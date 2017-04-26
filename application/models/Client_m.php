<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Client_m extends MY_Model
{
    public function __construct() {
        $this->table = 'clients';
        $this->primary_key = 'cl_id';
        $this->protected = ['cl_id'];
        $this->soft_deletes = TRUE;
        
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
        
        $this->has_many['insurances'] = [
            'foreign_model'=>'Insurance_m',
            'foreign_table'=>'insurances',
            'foreign_key'=>'in_cl_id',
            'local_key'=>'cl_id'
        ];
        
        parent::__construct();
    }

    public $rules = [
        'insert' => [
            'cl_name' => [
                'field' => 'cl_name',
                'label' => 'Imię i nazwisko lub nazwa Firmy',
                'rules' => 'trim|required',
            ],
            'cl_address' => [
                'field' => 'cl_address',
                'label' => 'Adres',
                'rules' => 'trim|required'
            ],
            'cl_email' => [
                'field' => 'cl_email',
                'label' => 'E-mail',
                'rules' => 'trim|valid_email'
            ],
            'cl_phone' => [
                'field' => 'cl_phone',
                'label' => 'Telefon',
                'rules' => 'trim|integer|exact_length[9]'
            ],
            'cl_identity' => [
                'field' => 'cl_identity',
                'label' => 'Identyfikacja',
                'rules' => 'trim|alpha_numeric|exact_length[11]|is_unique[clients.cl_identity]'
            ],
            'cl_notice' => [
                'field' => 'cl_notice',
                'label' => 'Telefon',
                'rules' => 'trim'
            ]
        ],
        'edit' => [
            'cl_name' => [
                'cl_name' => [
                    'field' => 'cl_name',
                    'label' => 'Imię i nazwisko lub nazwa Firmy',
                    'rules' => 'trim|required',
                ]
            ],
            'cl_address' => [
                'cl_address' => [
                    'field' => 'cl_address',
                    'label' => 'Adres',
                    'rules' => 'trim|required',
                ]
            ],
            'cl_email' => [
                'cl_email' => [
                    'field' => 'cl_email',
                    'label' => 'E-mail',
                    'rules' => 'trim|valid_email'
                ],
            ],
            'cl_phone' => [
                'cl_phone' => [
                    'field' => 'cl_phone',
                    'label' => 'Telefon',
                    'rules' => 'trim|integer|exact_length[9]'
                ],
            ],
            'cl_identity' => [
                'cl_identity' => [
                    'field' => 'cl_identity',
                    'label' => 'Identyfikacja',
                    'rules' => 'trim|alpha_numeric|exact_length[11]|is_unique[clients.cl_identity]'
                ],
            ],
            'cl_notice' => [
                'cl_notice' => [
                    'field' => 'cl_notice',
                    'label' => 'Uwagi',
                    'rules' => 'trim'
                ]
            ],
            'cl_process' => [
                'cl_process' => [
                    'field' => 'cl_process',
                    'label' => '',
                    'rules' => 'trim'
                ]
            ]
        ]
            
    ];
}