<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Behavior_Counter extends ORM {
    
    protected $_table_name = 'products_states_count';
     
    protected $_table_columns = array(
      'product_id'  =>  NULL,
      'state_id'    =>  NULL,
      'count'       =>  NULL     
    );
    
    protected $_belongs_to = array(
        'state' => array(
            'model' => 'behavior_state',
            'foreign_key' => 'state_id'
        ),
        
        'product' => array(
            'model' => 'product',
            'foreign_key' => 'product_id'
        )
        
    );
}

?>