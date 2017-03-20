<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_m extends MY_Model
{
    public function __construct() {
        $this->table = 'users';
        $this->primary_key = 'us_id';
        $this->protected = ['us_id'];
        
        /*$this->has_one['user'] = array(
            'foreign_model'=>'V2auth_model',
            'foreign_table'=>'v2_users',
            'foreign_key'=>'us_id',
            'local_key'=>'cl_us_id'
            );
        $this->has_many_pivot['insurances'] = [
            'foreign_model' => 'V2insurance_model',
            'pivot_table' => 'v2_clients_insurances',
            'local_key' => 'cl_id',
            'pivot_local_key' => 'ci_cl_id',
            'pivot_foreign_key' => 'ci_in_id',
            'foreign_key' => 'in_id'
        ];
        */
        
        parent::__construct();
    }

    public $rules = [
        'auth' => [
            'us_email' => [
                'field' => 'us_email',
                'label' => 'E-mail',
                'rules' => 'trim|required|valid_email',
            ],
            'us_pass' => [
                'field' => 'us_pass',
                'label' => 'Hasło',
                'rules' => 'trim|required'
            ]
        ]
    ];
    
    public function login() {
        // Wyszukiwanie w BD użytkownika o podanym mailu i haśle
        $where = [ // Warunki wyszukiwania
            'us_email' => $this->input->post('us_email'),
            'us_pass' => $this->hash_salt($this->input->post('us_pass'))
        ];
        
        $user = $this->auth_m->where($where)->get(); // Wyszukanie użytkownika w BD

        // Upewnienie się, że tablica $user jest policzalna
        if(!empty($user)) {
            // Tworzenie sesji
            $this->load->library('user_agent');
            
            $data = [ // Dane do tablicy sesyjnej
                'us_id'         => $user->us_id,
                'us_fname'      => $user->us_fname,
                'us_lname'      => $user->us_lname,
                'us_email'      => $user->us_email,
                'agent'         => $this->agent->agent_string(),
                'loggedin'      => TRUE
            ];
            
            $this->session->set_userdata($data); // Ustanawianie sesji
        }
    }
    
    public function loggedin() {
        return (bool) $this->session->userdata('loggedin');
    }
    
    /**
    * @param type $string
    * @return type string
    */
   public function hash_salt($string) {
       return hash('sha512', $string . '--' . config_item('encryption_key'));

   }
}