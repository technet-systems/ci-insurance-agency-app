<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('company_m');
        $this->load->model('product_m');
    }
    
    public function all($co_id) {
        $this->data['company'] = $this->company_m->get($co_id);
        $this->data['products'] = $this->product_m->where(array('pr_co_id' => $co_id, 'pr_us_id' => $this->data['us_id']))->get_all();
        $this->twig->display('product/all', $this->data);
    }

    public function create($co_id) {
        $this->data['co_id_temp'] = $co_id;

        $rules = $this->product_m->rules['insert'];
        $id = $this->product_m->from_form($rules, array('pr_created_by'=> $this->data['us_id'], 'pr_us_id'=> $this->data['us_id'], 'pr_co_id' => $co_id))->insert();
        
        if($id) {
            $id = $this->db->insert_id();
            if($this->input->post('pr_notice') != NULL) {
                $pr_notice = $this->input->post('pr_notice');
            } else {
                $pr_notice = '<span style="font-style: italic; color: #DD1144;">Brak danych</span>';
            }
            
            echo json_encode(array('status' => 1, 'msg' => 'Zapisano nowy Produkt', 'pr_id' => $id, 'pr_name' => $this->input->post('pr_name'), 'pr_notice' => $pr_notice));
            $this->session->userdata['create'] = $this->db->last_query();
        } else {
            echo json_encode(array('status' => 0, 'msg' => validation_errors()));
        }
    }
    
    public function edit() {
        // dla potrzeb metody product_check (callback) uzyskujemy co_id i przenosimy go do $this->data
        $product = $this->product_m->get($this->input->post('pk'));
        $this->data['co_id_temp'] = $product->pr_co_id;
        // /dla potrzeb metody product_check (callback) uzyskujemy co_id
                
        // z uwagi na używany prefix kolumn w tabeli BD trzeba zrobić nw. obejście aby 
        $_POST[$this->input->post('name')] = $this->input->post('value');
        // /z uwagi na używany prefix kolumn w tabeli BD trzeba zrobić nw. obejście
        
        $this->form_validation->set_rules($this->product_m->rules['edit'][$this->input->post('name')]);

        if($this->form_validation->run()) {
            $this->product_m->update(array(
                $this->input->post('name') => $this->input->post('value'),
                'pr_updated_by' => $this->data['us_id']
                ), $this->input->post('pk'));
            $this->session->userdata['update'] = $this->db->last_query();
            echo json_encode(array('status' => 1, 'msg' => 'Zmieniono dane'));
        } else {
            $this->form_validation->set_error_delimiters('', '');
            echo json_encode(array('status' => 0, 'msg' => validation_errors()));
        }
    }
    
    public function delete() {
        if(!is_int($this->input->post('pr_id'))) {
            $this->product_m->update(array(
                'pr_deleted_by' => $this->data['us_id']
                ), $this->input->post('pr_id'));
            $this->product_m->delete($this->input->post('pr_id'));
            $this->session->userdata['delete'] = $this->db->last_query();
            echo json_encode(array('status' => 1, 'msg' => 'Usunięto dane'));
        } else {
            echo json_encode(array('status' => 0, 'msg' => 'Coś poszło nie tak'));
        }
    }
    
    public function product_check($product) {
        $check = $this->product_m->where(array('pr_name' => $product, 'pr_co_id' => $this->data['co_id_temp'], 'pr_us_id' => $this->data['us_id'], ))->as_array()->get_all();
        if($check) {
            $this->form_validation->set_message('product_check', 'Produkt ' . $product . ' już istnieje w bazie');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}