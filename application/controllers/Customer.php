<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function add() {
        $this->twig->display('customer/add', $this->data);
    }
}