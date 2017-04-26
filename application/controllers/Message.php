<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('message_m');
    }
    
    public function add_email() {
        $this->data['message'] = $this->message_m->where(array('me_type' => 'email', 'me_us_id' => $this->data['us_id']))->get();
        
        $this->twig->display('message/email/add', $this->data);
    }
    
    public function add_sms() {
        $this->data['message'] = $this->message_m->where(array('me_type' => 'sms', 'me_us_id' => $this->data['us_id']))->get();
        
        $this->twig->display('message/sms/add', $this->data);
    }
    
    public function create($type) {
        if($type == 'email' || $type == 'sms') {
            $rules = $this->message_m->rules['insert'];
            $id = $this->message_m->from_form($rules, array('me_type' => $type, 'me_created_by'=> $this->data['us_id'], 'me_us_id'=> $this->data['us_id']))->insert();

            if($id) {
                echo json_encode(array('status' => 1, 'msg' => 'Zapisano nowy szablon.'));
                $this->session->userdata['create'] = $this->db->last_query();
            } else {
                echo json_encode(array('status' => 0, 'msg' => validation_errors()));
            }
        } else {
            echo json_encode(array('status' => 0, 'msg' => 'Nie rozpoznano typu powiadomienia'));
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
}