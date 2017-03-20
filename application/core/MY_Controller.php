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
        
        // Dodatkowe zabezpieczenie logowania
        $exception_uris = [
            'auth',
            'auth/logout'
        ];
        
        if(in_array(uri_string(), $exception_uris) == FALSE) {
            if($this->auth_m->loggedin() == FALSE) {
                $this->session->set_flashdata('error', 'Brak uwierzytelnienia, zaloguj się ponownie.'); // Set flash message to the user
                redirect('auth');
            } else {
                foreach ($this->session->userdata as $key => $value) { // Za pomocą pętli dodajemy wszystkie dane logowania
                    $this->data[$key] = $value;
                }
            }
        }
    }
}