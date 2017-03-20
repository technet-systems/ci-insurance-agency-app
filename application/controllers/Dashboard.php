<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * -------------------------------------------------------------------
 * DASHBOARD CONTROLLER
 * -------------------------------------------------------------------
 * 
 * @author Dariusz Wójcicki <wojcicki@technet.systems>
 * 
 */
class Dashboard extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        var_dump($this->data);
        var_dump($_SESSION);
        
        echo anchor('dashboard/create', 'create');
        echo '<br />';
        echo anchor('dashboard/update', 'update');
        echo '<br />';
        echo anchor('dashboard/delete', 'delete');
        echo '<br />';
        echo anchor('dashboard/select', 'select');
    }
    
    public function create() {
        $users = $this->auth_m->get_all();
        $this->session->userdata['create'] = $this->db->last_query();
        var_dump($_SESSION['create']);
        echo '<br />';
        echo anchor('dashboard', 'back');
    }
    
    public function update() {
        $users = $this->auth_m->get(1);
        $this->session->userdata['update'] = $this->db->last_query();
        var_dump($_SESSION['update']);
        echo '<br />';
        echo anchor('dashboard', 'back');
    }
    
    public function delete() {
        $users = $this->auth_m->get_all();
        $this->session->userdata['delete'] = $this->db->last_query();
        var_dump($_SESSION['delete']);
        echo '<br />';
        echo anchor('dashboard', 'back');
    }
    
    public function select() {
        
        $users = $this->auth_m->get(1);
        $this->session->userdata['select'] = $this->db->last_query();
        $users = $this->auth_m->get_all();
        var_dump($_SESSION['select']);
        echo '<br />';
        echo anchor('dashboard', 'back');
    }
}