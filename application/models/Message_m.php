<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Message_m extends MY_Model
{
    public function __construct() {
        $this->table = 'messages';
        $this->primary_key = 'me_id';
        $this->protected = ['me_id'];
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
            'me_header' => [
                'field' => 'me_header',
                'label' => 'Nagłówek wiadomości',
                'rules' => 'trim|required',
            ],
            'me_text' => [
                'field' => 'me_text',
                'label' => 'Tekst wiadomości',
                'rules' => 'trim|required'
            ]
        ]
    ];
}