<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Outbox_m extends MY_Model
{
    public function __construct() {
        $this->table = 'outbox';
        $this->primary_key = 'ou_id';
        $this->protected = ['ou_id'];
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
        $this->has_many['insurances'] = [
            'foreign_model'=>'Insurance_m',
            'foreign_table'=>'insurances',
            'foreign_key'=>'in_cl_id',
            'local_key'=>'cl_id'
            ];
        */
        
        parent::__construct();
    }

    public $rules = [
        'insert' => [
            'ou_header' => [
                'field' => 'ou_header',
                'label' => 'Nagłówek wiadomości',
                'rules' => 'trim|required',
            ],
            'ou_text' => [
                'field' => 'ou_text',
                'label' => 'Tekst wiadomości',
                'rules' => 'trim|required'
            ],
            'ou_in_id' => [
                'field' => 'ou_in_id',
                'label' => '',
                'rules' => 'trim'
            ]
        ]
    ];
}