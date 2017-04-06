<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Product_m extends MY_Model
{
    public function __construct() {
        $this->table = 'products';
        $this->primary_key = 'pr_id';
        $this->protected = ['pr_id'];
        
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
        'insert' => [
            'pr_name' => [
                'field' => 'pr_name',
                'label' => 'Nazwa Produktu',
                'rules' => 'trim|required|is_unique[products.pr_name]',
            ],
            'pr_notice' => [
                'field' => 'pr_notice',
                'label' => 'Uwagi',
                'rules' => 'trim'
            ]
        ],
        'edit' => [
            'pr_name' => [
                'pr_name' => [
                    'field' => 'pr_name',
                    'label' => 'Nazwa Produktu',
                    'rules' => 'trim|required|is_unique[products.pr_name]',
                ]
            ],
            'pr_notice' => [
                'pr_notice' => [
                    'field' => 'pr_notice',
                    'label' => 'Uwagi',
                    'rules' => 'trim'
                ]
            ]
        ]
    ];
}