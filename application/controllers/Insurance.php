<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('client_m');
        $this->load->model('company_m');
        $this->load->model('product_m');
        $this->load->model('insurance_m');
        
        $config = array(
            'upload_path' => './uploads',
            'allowed_types' => 'gif|jpg|png|pdf|bmp',
            'encrypt_name' => TRUE
            
        );
        $this->load->library('upload', $config);
    }
    
    public function all($cl_id) {
        //$this->output->enable_profiler(TRUE);
        $this->data['client'] = $this->client_m->get($cl_id);
        $this->data['companies_with_products'] = $this->company_m->where('co_us_id', $this->data['us_id'])->with_products('fields:pr_name')->get_all();
        $this->data['insurances'] = $this->insurance_m->where('in_cl_id', $cl_id)->get_all();
        //$this->data['products_with_companies'] = $this->product_m->with_company()->get_all();
        //dump($this->data['insurances']);die;
        
        //echo json_encode($this->data['products_with_companies']);
        
        $this->twig->display('insurance/all', $this->data);
    }
    
    public function get_product() {
        $out = [];
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null) {
                $pr_co_id = $parents[0];
                $products = $this->product_m->where('pr_co_id', $pr_co_id)->get_all();
                foreach ($products as $product) {
                    $params = ['id' => $product->pr_id, 'name' => $product->pr_name];
                    array_push($out, $params);
                }
                echo json_encode(['output'=>$out, 'selected'=>'']);
                return;
            }
        }
        echo json_encode(['output'=>'', 'selected'=>'']);
    }

    public function create($cl_id) {
        $rules = $this->insurance_m->rules['insert'];
        $this->form_validation->set_rules($rules);
        
        if($this->form_validation->run()) {
            if($this->upload->do_upload('in_link')) {
                /**
                 * Przygotowanie do zapisu
                 */
                // Uzyskanie nazwy pliku http://stackoverflow.com/questions/16345761/codeigniter-get-the-uploaded-file-name
                $upload_data = $this->upload->data(); // Returns array of containing all of the data related to the file you uploaded.
                $file_name = $upload_data['file_name'];                
                
                // Uzyskanie nazwy Ubezpieczyciela i Polisy
                $company = $this->company_m->get($this->input->post('in_co_id'));
                $product = $this->product_m->get($this->input->post('in_pr_id'));
                $client = $this->client_m->get($cl_id);
                
                /**
                 * Zapis do BD
                 */
                $id = $this->insurance_m->from_form(NULL, 
                    array(
                        'in_co_name'            => $company->co_name,
                        'in_pr_name'            => $product->pr_name,
                        'in_created_by'         => $this->data['us_id'], 
                        'in_link'               => $file_name, 
                        'in_link_description'   => $this->input->post('in_link_description'),
                        'in_notice'             => $this->input->post('in_notice'),
                        'in_process'            => $client->cl_process,
                        'in_us_id'              => $this->data['us_id'], 
                        'in_cl_id'              => $cl_id)
                    )
                    ->insert();
                
                $this->session->userdata['create'] = $this->db->last_query();
                
                if($id) {
                    $id = $this->db->insert_id();
                    $insurance = $this->insurance_m->get($id);
                    
                    if($this->input->post('in_notice') != NULL) {
                        $in_notice = $insurance->in_notice;
                    } else {
                        $in_notice = '<span style="font-style: italic; color: #DD1144;">Brak danych</span>';
                    }
                    
                    if($this->input->post('in_link_description') != NULL) {
                        $in_link_description = $insurance->in_link_description;
                    } else {
                        $in_link_description = '<span style="font-style: italic; color: #DD1144;">Brak danych</span>';
                    }

                    echo json_encode(array(
                        'status' => 1, 
                        'msg' => 'Przypisano nową Polisę', 
                        'in_id' => $insurance->in_id,
                        'in_co_name' => $insurance->in_co_name,
                        'in_pr_name' => $insurance->in_pr_name,
                        'in_identity' => $insurance->in_identity,
                        'in_fdate' => $insurance->in_fdate,
                        'in_ldate' => $insurance->in_ldate,
                        'in_link' => $insurance->in_link,
                        'in_link_description' => $in_link_description,
                        'in_notice' => $in_notice,
                        'in_process' => $client->cl_process
                            
                        ));
                    
                } 
            } else {
                echo json_encode(array('status' => 0, 'msg' => $this->upload->display_errors()));
                die;
            }
        } else {
            $this->form_validation->set_error_delimiters('', '');
            echo json_encode(array('status' => 0, 'msg' => validation_errors()));
        }
    }
    /**
     * 
     * @param type $file_name string
     * @see http://stackoverflow.com/questions/12247040/how-to-restrict-access-to-files-in-a-folder-in-codeigniter
     */
    public function read($file_name) {
        $this->load->helper('file');
        // Now check the filename is only made up of letters and numbers
        // this helps prevent against file transversal attacks
        if (preg_match('^[A-Za-z0-9]{2,32}+[.]{1}[A-Za-z]{3,4}$^', $file_name)) {
            // Rewrite the request to the path on my server 
            $file = 'uploads/' . $file_name;

            // Now check if file exists
            if (file_exists($file)) {
               // Serve the file
               header('Content-Type: ' . get_mime_by_extension($file));
               readfile($file);
            }
        }
    }
    
    public function edit() {
        // dla potrzeb sprawdzenia dat (in_fdate <= in_ldate) przekazujemy do $this->data[] potrzebne wartości
        $this->data['in_id_temp'] = $this->input->post('pk');
        $this->date['in_date_temp'] = $this->input->post('name');
        
        // z uwagi na używany prefix kolumn w tabeli BD trzeba zrobić nw. obejście aby 
        $_POST[$this->input->post('name')] = $this->input->post('value');
        // /z uwagi na używany prefix kolumn w tabeli BD trzeba zrobić nw. obejście
        
        $this->form_validation->set_rules($this->insurance_m->rules['edit'][$this->input->post('name')]);

        if($this->form_validation->run()) {
            $this->insurance_m->update(array($this->input->post('name') => $this->input->post('value')), $this->input->post('pk'));
            $this->session->userdata['update'] = $this->db->last_query();
            echo json_encode(array('status' => 1, 'msg' => 'Zmieniono dane'));
        } else {
            $this->form_validation->set_error_delimiters('', '');
            echo json_encode(array('status' => 0, 'msg' => validation_errors()));
        } 
    }
    
    public function update($in_id) {
        if($this->upload->do_upload('in_link')) {
            /**
             * Przygotowanie do zapisu
             */
            // Uzyskanie nazwy pliku http://stackoverflow.com/questions/16345761/codeigniter-get-the-uploaded-file-name
            $upload_data = $this->upload->data(); // Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];  
            
            // Usuwanie starego pliku
            unlink('uploads/' . $this->input->post('old_in_link'));
            
            $this->insurance_m->update(array(
                'in_link' => $file_name, 
                'in_link_description' => $this->input->post('in_link_description'),
                'in_updated_by' => $this->data['us_id']
                ), $in_id);
            $this->session->userdata['update'] = $this->db->last_query();
            echo json_encode(array('status' => 1, 'msg' => 'Zmieniam załącznik'));
        } else {
            echo json_encode(array('status' => 0, 'msg' => $this->upload->display_errors()));
        }
}
    
    public function delete() {
        if(!is_int($this->input->post('in_id'))) {
            $this->insurance_m->delete($this->input->post('in_id'));
            $this->session->userdata['delete'] = $this->db->last_query();
            echo json_encode(array('status' => 1, 'msg' => 'Usunięto dane'));
        } else {
            echo json_encode(array('status' => 0, 'msg' => 'Coś poszło nie tak'));
        }
        
    }
    
    public function date_check($in_date) {
        if($this->input->post('name') == 'in_fdate') {
            $check = $this->insurance_m->get($this->input->post('pk'));
            if($in_date <= $check->in_ldate) {
                return TRUE;
            } else {
                $this->form_validation->set_message('date_check', 'Data ' . $in_date . ' jest nieprawidłowa');
                return FALSE;
            }
        } elseif ($this->input->post('name') == 'in_ldate') {
            $check = $this->insurance_m->get($this->input->post('pk'));
            if($check->in_fdate <= $in_date) {
                return TRUE;
            } else {
                $this->form_validation->set_message('date_check', 'Data ' . $in_date . ' jest nieprawidłowa');
                return FALSE;
            }
        }
    }
}