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
    }
    
    public function monitoring() {
        $this->twig->display('dashboard/all', $this->data);
    }
}