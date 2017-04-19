<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Company_m extends MY_Model
{
    public function __construct() {
        $this->table = 'companies';
        $this->primary_key = 'co_id';
        $this->protected = ['co_id'];
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
        $this->has_many['products'] = [
            'foreign_model'=>'Product_m',
            'foreign_table'=>'products',
            'foreign_key'=>'pr_co_id',
            'local_key'=>'co_id'
        ];
        
        parent::__construct();
    }

    public $rules = [
        'insert' => [
            'co_name' => [
                'field' => 'co_name',
                'label' => 'Nazwa Ubezpieczyciela',
                'rules' => 'trim|required|is_unique[companies.co_name]',
            ],
            'co_notice' => [
                'field' => 'co_notice',
                'label' => 'Uwagi',
                'rules' => 'trim'
            ]
        ],
        'edit' => [
            'co_name' => [
                'co_name' => [
                    'field' => 'co_name',
                    'label' => 'Nazwa Ubezpieczyciela',
                    'rules' => 'trim|required|is_unique[companies.co_name]',
                ]
            ],
            'co_notice' => [
                'co_notice' => [
                    'field' => 'co_notice',
                    'label' => 'Uwagi',
                    'rules' => 'trim'
                ]
            ]
        ]
    ];
}