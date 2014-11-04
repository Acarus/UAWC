<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Product extends ORM {
    
    protected $_table_name = 'products';

    protected $_primary_key = 'id';
    
    protected $_table_columns = array(
      'id'          =>  NULL,
      'title'       =>  NULL,
      'description' =>  NULL,
      'logo'        =>  NULL,
      'blogo'       =>  NULL,
      'price'       =>  NULL,
      'articul'     =>  NULL     
    );    

}

?>