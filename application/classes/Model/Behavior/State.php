<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Behavior_State extends ORM {
    
    protected $_table_name = 'states';
    
    protected $_primary_key = 'id';
    
    protected $_table_columns = array(
      'id'              =>  NULL,
      'name'            =>  NULL,
      'description'     =>  NULL     
    );
    
    
    public function increment_cout($param, $state){
        // Get State id
        $state_id =     $this
                        ->where('name','=',$state)
                        ->find()
                        ->id;
        
        $sql = 'INSERT INTO `products_states_count` (`product_id`, `state_id`, `count`) VALUES ';
        
        for($i = 0; $i < count($param); $i++ )
        {
            $sql = $sql.sprintf('(\'%d\',\'%d\',\'%d\')',$param[$i], $state_id, 1);
            if($i < count($param)-1) $sql = $sql.',';
        }
        
        $sql = $sql.' ON DUPLICATE KEY UPDATE `count` = `count` + 1;';
        DB::query(Database::INSERT, $sql)->execute();
    }
    
}

?>