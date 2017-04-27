<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Product_m extends MY_Model
{
    public function __construct() {
        $this->table = 'products';
        $this->primary_key = 'pr_id';
        $this->protected = ['pr_id'];
        $this->soft_deletes = TRUE;
        
        $this->has_one['company'] = array(
            'foreign_model'=>'Company_m',
            'foreign_table'=>'companies',
            'foreign_key'=>'co_id',
            'local_key'=>'pr_co_id'
            );
        /*
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
                'rules' => 'trim|required|callback_product_check',
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
                    'rules' => 'trim|required|callback_product_check',
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