<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('client_m');
    }
    
    public function add() {
        $this->twig->display('client/add', $this->data);
    }
    
    public function all() {
        $this->data['clients'] = $this->client_m->where('cl_us_id', $this->data['us_id'])->get_all();
        $this->twig->display('client/all', $this->data);
    }
    
    public function create() {
        $rules = $this->client_m->rules['insert'];
        $id = $this->client_m->from_form($rules, array('cl_created_by'=> $this->data['us_id'], 'cl_us_id'=> $this->data['us_id']))->insert();
        
        if($id) {
            echo json_encode(array('status' => 1, 'msg' => 'Zapisano nowego Klienta.'));
            $this->session->userdata['create'] = $this->db->last_query();
        } else {
            echo json_encode(array('status' => 0, 'msg' => validation_errors()));
        }
    }
    
    public function edit() {
        // z uwagi na używany prefix kolumn w tabeli BD trzeba zrobić nw. obejście aby 
        $_POST[$this->input->post('name')] = $this->input->post('value');
        // /z uwagi na używany prefix kolumn w tabeli BD trzeba zrobić nw. obejście
        
        $this->form_validation->set_rules($this->client_m->rules['edit'][$this->input->post('name')]);

        if($this->form_validation->run()) {
            $this->client_m->update(array(
                $this->input->post('name') => $this->input->post('value'),
                'cl_updated_by' => $this->data['us_id']
                ), $this->input->post('pk'));
            $this->session->userdata['update'] = $this->db->last_query();
            echo json_encode(array('status' => 1, 'msg' => 'Zmieniono dane'));
        } else {
            $this->form_validation->set_error_delimiters('', '');
            echo json_encode(array('status' => 0, 'msg' => validation_errors()));
        }
    }
    
    public function delete() {
        if(!is_int($this->input->post('cl_id'))) {
            $this->client_m->update(array(
                'cl_deleted_by' => $this->data['us_id']
                ), $this->input->post('cl_id'));
            $this->client_m->delete($this->input->post('cl_id'));
            $this->session->userdata['delete'] = $this->db->last_query();
            echo json_encode(array('status' => 1, 'msg' => 'Usunięto dane'));
        } else {
            echo json_encode(array('status' => 0, 'msg' => 'Coś poszło nie tak'));
        }
        
    }
    
    public function client_check($cl_identity) {
        $check = $this->client_m->where(array('cl_identity' => $cl_identity, 'cl_us_id' => $this->data['us_id']))->as_array()->get_all();
        if($check) {
            $this->form_validation->set_message('client_check', 'Klient już istnieje w bazie');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}