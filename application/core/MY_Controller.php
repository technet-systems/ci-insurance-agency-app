<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * -------------------------------------------------------------------
 * APP MAIN CONTROLLER
 * -------------------------------------------------------------------
 * 
 * Główny kontroler apliacji mający na celu sprawdzanie zalogowania użytkownika oraz przechowywaniu danych w tablicy $data (wraz z danymi sesji) przekazywanych do
 * widoku
 * 
 * @author Dariusz Wójcicki <wojcicki@technet.systems>
 * 
 */
class MY_Controller extends CI_Controller {
    
    /**
     * @var type array -> pozwala przenosić w obrębie aplikacji dane przesyłane do widoków (razem z danymi sesji)
     */
    protected $data = [];
    
    /**
     * -------------------------------------------------------------------
     * CONSTRUCTOR
     * -------------------------------------------------------------------
     * 
     * Ładujemy model auth_m, który będzie wykorzystywany w całej aplikacji oraz dodatkowo sprawdzamy czy użytkownik jest ciąglę zalogowany i jeśli jest to przekazujemy
     * do tablicy $data dane ze zmiennej sesyjnej
     * 
     */
    public function __construct() {
        parent::__construct();
        
        $this->load->model('auth_m');
        
        // Pobranie danych konfiguracyjnych aplikacji
        $this->data['app_name'] = config_item('app_name');
        $this->data['app_ver'] = config_item('app_ver');
        $this->data['app_description'] = config_item('app_description');
        $this->data['warning_period'] = config_item('warning_period');
        
        // Dodatkowe zabezpieczenie logowania
        $exception_uris = [
            'auth',
            'auth/logout'
        ];
        
        if(in_array(uri_string(), $exception_uris) == FALSE) {
            if($this->auth_m->loggedin() == FALSE) {
                $this->session->set_flashdata('error', 'Wylogowano użytkownika, zaloguj się ponownie.'); // Set flash message to the user
                redirect('auth');
            } else {
                foreach ($this->session->userdata as $key => $value) { // Za pomocą pętli dodajemy wszystkie dane logowania
                    $this->data[$key] = $value;
                }
            }
        }
    }
}