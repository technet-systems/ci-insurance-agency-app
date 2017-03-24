<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * -------------------------------------------------------------------
 * AUTH CONTROLLER
 * -------------------------------------------------------------------
 * 
 * @author Dariusz Wójcicki <wojcicki@technet.systems>
 * 
 */
class Auth extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * -------------------------------------------------------------------
     * USER AUTHENTICATION
     * -------------------------------------------------------------------
     * 
     * Sprawdzanie czy jest ustanowiona sesja dla użytkownika:
     * - TRUE -> przekierowanie do aplikacji
     * - FALSE -> walidacja danych z formularza 
     *      - TRUE -> przekierowanie do aplikacji
     *      - FALSE -> przekierowanie do strony logowania z komunikatem o błędzie
     * 
    * @author Dariusz Wójcicki <wojcicki@technet.systems>
    * 
    */
    public function index() {
        $dashboard = 'dashboard/monitoring'; // Final controler after successful login
        
        if($this->auth_m->loggedin()) { // Check if user is logged in
            redirect($dashboard); // Redirect to dashboard
        } else {
            $this->form_validation->set_rules($this->auth_m->rules['auth']); // Match user data with validation rules
            
            if($this->form_validation->run()) { // Validate process
                if($this->auth_m->login()) { // Check if the login() method returns TRUE
                    redirect($dashboard); // Redirect to dashboard
                } else {
                    $this->session->set_flashdata('error', 'Niepoprawny e-mail i/lub hasło!'); // Set flash message to the user
                    $this->twig->addGlobal('session', $this->session);
                    redirect(); // Redirect to login
                }
            }
        }
        $this->twig->addGlobal('session', $this->session);
        $this->twig->display('modal/login', $this->data);
        //$this->load->view('sign-in_v', $this->data);
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect();
    }
}