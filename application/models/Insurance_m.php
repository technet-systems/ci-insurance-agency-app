<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Insurance_m extends MY_Model
{
    public function __construct() {
        $this->table = 'insurances';
        $this->primary_key = 'in_id';
        $this->protected = ['in_id'];
        $this->soft_deletes = TRUE;
        
        /*
        $this->has_one['company'] = array(
            'foreign_model'=>'Company_m',
            'foreign_table'=>'companies',
            'foreign_key'=>'co_id',
            'local_key'=>'pr_co_id'
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
        
        $this->has_one['client'] = [
            'foreign_model'=>'Client_m',
            'foreign_table'=>'clients',
            'foreign_key'=>'cl_id',
            'local_key'=>'in_cl_id'
        ];
        
        parent::__construct();
    }

    public $rules = [
        'insert' => [
            'in_co_id' => [
                'field' => 'in_co_id',
                'label' => 'Nazwa Ubezpieczyciela',
                'rules' => 'trim|required',
            ],
            'in_pr_id' => [
                'field' => 'in_pr_id',
                'label' => 'Nazwa Polisy',
                'rules' => 'trim|required'
            ],
            'in_identity' => [
                'field' => 'in_identity',
                'label' => 'Identyfikacja',
                'rules' => 'trim|required'
            ],
            'in_fdate' => [
                'field' => 'in_fdate',
                'label' => 'Data podpisania',
                'rules' => 'trim|required'
            ],
            'in_ldate' => [
                'field' => 'in_ldate',
                'label' => 'Data wygaśnięcia',
                'rules' => 'trim|required'
            ],
            'in_link_description' => [
                'field' => 'in_link_description',
                'label' => '',
                'rules' => 'trim'
            ],
            'in_notice' => [
                'field' => 'in_notice',
                'label' => '',
                'rules' => 'trim'
            ],
            'in_process' => [
                'field' => 'in_process',
                'label' => '',
                'rules' => 'trim'
            ]
        ],
        'edit' => [
            'in_co_name' => [
                'in_co_name' => [
                    'field' => 'in_co_name',
                    'label' => 'Nazwa Ubezpieczyciela',
                    'rules' => 'trim|required',
                ]
            ],
            'in_pr_name' => [
                'in_pr_name' => [
                    'field' => 'in_pr_name',
                    'label' => 'Nazwa Polisy',
                    'rules' => 'trim|required'
                ]
            ],
            'in_identity' => [
                'in_identity' => [
                    'field' => 'in_identity',
                    'label' => 'Identyfikacja',
                    'rules' => 'trim|required'
                ]
            ],
            'in_fdate' => [
                'in_fdate' => [
                    'field' => 'in_fdate',
                    'label' => 'Data podpisania',
                    'rules' => 'trim|required'
                ]
            ],
            'in_ldate' => [
                'in_ldate' => [
                    'field' => 'in_ldate',
                    'label' => 'Data wygaśnięcia',
                    'rules' => 'trim|required'
                ]
            ],
            'in_link_description' => [
                'in_link_description' => [
                    'field' => 'in_link_description',
                    'label' => '',
                    'rules' => 'trim'
                ]
            ],
            'in_notice' => [
                'in_notice' => [
                    'field' => 'in_notice',
                    'label' => '',
                    'rules' => 'trim'
                ]
            ],
            'in_process' => [
                'in_process' => [
                    'field' => 'in_process',
                    'label' => '',
                    'rules' => 'trim'
                ]
            ]
        ]
    ];
}