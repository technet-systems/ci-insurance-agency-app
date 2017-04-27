<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * -------------------------------------------------------------------
 * DASHBOARD CONTROLLER
 * -------------------------------------------------------------------
 * 
 * @todo $this->session->userdata['create'] = $this->db->last_query();
 * @todo $this->session->userdata['update'] = $this->db->last_query();
 * @todo $this->session->userdata['delete'] = $this->db->last_query();
 * @author Dariusz Wójcicki <wojcicki@technet.systems>
 * 
 */
class Dashboard extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('client_m');
        $this->load->model('insurance_m');
        $this->load->model('message_m');
        $this->load->model('outbox_m');
    }
    
    public function monitoring() {
        
        /**
         * START - WYCIĄGNIĘCIE DANYCH DLA POSZCZEGÓLNYCH BOX'ÓW
         */
        
        // Client Box
        $this->data['box_client_all'] = $this->client_m->where('cl_us_id', $this->data['us_id'])->count_rows();
        
        // Insurance Box
        $this->data['box_insurance_all'] = $this->insurance_m->where('in_us_id', $this->data['us_id'])->count_rows();
//        dump($this->data['box_insurance_all']);die;
        // E-mail Box
        $this->data['box_email_all'] = $this->outbox_m->where('ou_type', 'email')->where(array('ou_created_at >=' => date('Y-m-01 00:00:00'), 'ou_created_at <' => date('Y-m-t 23:59:59'), 'ou_us_id' => $this->data['us_id']))->count_rows();

        
        // SMS Box
        $this->data['box_sms_all'] = $this->outbox_m->where('ou_type', 'sms')->where(array('ou_created_at >=' => date('Y-m-01 00:00:00'), 'ou_created_at <' => date('Y-m-t 23:59:59'), 'ou_us_id' => $this->data['us_id']))->count_rows();
        
        /**
         * KONIEC - WYCIĄGNIĘCIE DANYCH DLA POSZCZEGÓLNYCH BOX'ÓW
         */
        
        $this->data['email'] = $this->message_m->where(array('me_type' => 'email', 'me_us_id' => $this->data['us_id']))->get();
        $this->data['sms'] = $this->message_m->where(array('me_type' => 'sms', 'me_us_id' => $this->data['us_id']))->get();
        
        $this->data['insurances_with_client'] = $this->insurance_m->where(array('in_us_id' => $this->data['us_id'], 'in_process' => 'Jest zgoda', 'in_reminder' => 1))->with_client('fields:cl_name,cl_phone')->get_all();
        
        //dump($this->data['insurances_with_client']);die();
        
        $this->twig->display('dashboard/all', $this->data);
    }
    
    public function send($ou_type, $cl_id) {
        $rules = $this->outbox_m->rules['insert'];
        $id = $this->outbox_m->from_form($rules, array('ou_created_by'=> $this->data['us_id'], 'ou_type' => $ou_type, 'ou_cl_id' => $cl_id, 'ou_us_id'=> $this->data['us_id']))->insert();
        $this->session->userdata['create'] = $this->db->last_query();
        
        if($id) {
            $type = ($ou_type == 'sms') ? 'in_send_sms' : 'in_send_email';
            $this->insurance_m->update(array($type => 1, 'in_updated_by' => $this->data['us_id']), $this->input->post('ou_in_id'));
            $this->session->userdata['update'] = $this->db->last_query();
            
            echo json_encode(array('status' => 1, 'msg' => 'Wysłano wiadomość ' . $ou_type));
        } else {
            echo json_encode(array('status' => 0, 'msg' => validation_errors()));
        }
    }
    
    public function send_bug() {
        $this->form_validation->set_rules('bug_description', 'bug_description', 'trim|required');
        
        if ($this->form_validation->run()) {
            $this->email->from($this->data['us_email'], $this->data['us_fname'] . ' ' . $this->data['us_lname']);
            $this->email->to('d.wojcicki@interia.pl');

            $this->email->subject($this->input->post('url_name'));
            $this->email->message($this->input->post('bug_description'));

            $this->email->send();
            
            echo json_encode(array('status' => 1, 'msg' => 'Wysłano wiadomość'));
        } else {
            echo json_encode(array('status' => 0, 'msg' => validation_errors()));
        }
    }
    
    public function delete() {
        if(!is_int($this->input->post('in_id'))) {
            $this->insurance_m->update(array('in_reminder' => 0, 'in_updated_by' => $this->data['us_id']), $this->input->post('in_id'));
            $this->session->userdata['delete'] = $this->db->last_query();
            echo json_encode(array('status' => 1, 'msg' => 'Usunięto przypomnienie'));
        } else {
            echo json_encode(array('status' => 0, 'msg' => 'Coś poszło nie tak'));
        }
        
    }
}