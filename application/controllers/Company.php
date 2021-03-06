<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('company_m');
    }
    
    public function add() {
        $this->twig->display('company/add', $this->data);
    }
    
    public function all() {
        $this->data['companies'] = $this->company_m->where('co_us_id', $this->data['us_id'])->get_all();
        $this->twig->display('company/all', $this->data);
    }
    
    public function create() {
        $rules = $this->company_m->rules['insert'];
        $id = $this->company_m->from_form($rules, array('co_created_by'=> $this->data['us_id'], 'co_us_id'=> $this->data['us_id']))->insert();
        
        if($id) {
            echo json_encode(array('status' => 1, 'msg' => 'Zapisano nowego Ubezpieczyciela.'));
            $this->session->userdata['create'] = $this->db->last_query();
        } else {
            echo json_encode(array('status' => 0, 'msg' => validation_errors()));
        }
    }
    
    public function edit() {
        // z uwagi na używany prefix kolumn w tabeli BD trzeba zrobić nw. obejście aby 
        $_POST[$this->input->post('name')] = $this->input->post('value');
        // /z uwagi na używany prefix kolumn w tabeli BD trzeba zrobić nw. obejście
        
        $this->form_validation->set_rules($this->company_m->rules['edit'][$this->input->post('name')]);

        if($this->form_validation->run()) {
            $this->company_m->update(array(
                $this->input->post('name') => $this->input->post('value'), 
                'co_updated_by' => $this->data['us_id']
                ), $this->input->post('pk'));
            $this->session->userdata['update'] = $this->db->last_query();
            echo json_encode(array('status' => 1, 'msg' => 'Zmieniono dane'));
        } else {
            $this->form_validation->set_error_delimiters('', '');
            echo json_encode(array('status' => 0, 'msg' => validation_errors()));
        }
    }
    
    public function delete() {
        if(!is_int($this->input->post('co_id'))) {
            $this->company_m->update(array(
                'co_deleted_by' => $this->data['us_id']
                ), $this->input->post('co_id'));
            
            $this->load->model('product_m');
            $products = $this->product_m->where('pr_co_id', $this->input->post('co_id'))->get_all();
            foreach ($products as $product) {
                $this->product_m->update(array(
                    'pr_deleted_by' => $this->data['us_id']
                    ), $product->pr_id);
                $this->product_m->delete($product->pr_id);
            }
            
            $this->company_m->delete($this->input->post('co_id'));
            $this->session->userdata['delete'] = $this->db->last_query();
            echo json_encode(array('status' => 1, 'msg' => 'Usunięto dane'));
        } else {
            echo json_encode(array('status' => 0, 'msg' => 'Coś poszło nie tak'));
        }
    }
    
    public function company_check($co_name) {
        $check = $this->company_m->where(array('co_name' => $co_name, 'co_us_id' => $this->data['us_id']))->get();
        if($check == FALSE) {
            return TRUE;
        } else {
            $this->form_validation->set_message('company_check', 'Towarzystwo ' . $co_name . ' jest już w bazie');
            return FALSE;
        }
    }
}