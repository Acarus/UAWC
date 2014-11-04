<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Basket extends Model {
    
    
    private $_min_index;
    private $_max_index;
    
    public function __construct(){
        
        $result = DB::query(Database::SELECT,'SELECT min(`id`),max(`id`) FROM `products`')->execute()->as_array();
        
        // Get min and max product's ID in catalog
        $this->_min_index = $result[0]['min(`id`)'];
        $this->_max_index = $result[0]['max(`id`)'];
    }
    
    public function checkout(){
        
        if(!isset($_COOKIE['basket']) OR !isset($_COOKIE['bcount']) OR (strlen($_COOKIE['bcount']) == 0) OR (strlen($_COOKIE['basket']) == 0) )
            return FALSE;
        
        $basket = explode(',',Arr::get($_COOKIE,'basket'));
        
        $basket_count = explode(',',Arr::get($_COOKIE,'bcount'));
        
        if(count($basket) != count($basket_count))
            return FALSE;
      
      
        // Validate each product's ID in basket. It must be in range(min_index,max_index).
        for($i=0; $i<count($basket); $i++)
            if((int)$basket[$i] > $this->_max_index OR (int)$basket[$i] < $this->_min_index)
                return FALSE; 
      
        
        $state = ORM::factory('behavior_state');
        $state->increment_cout($basket, 'bought');
        // Insert data in DB
        $query = "INSERT INTO `purchases`(`product_id`, `client`, `count`) VALUES ";
        for($i=0; $i<count($basket); $i++)
        {
            $query = $query.sprintf('(\'%d\',\'%s\',\'%d\')',(int) $basket[$i], Arr::get($_POST,'name'), (int) $basket_count[$i]);
            if($i < count($basket)-1) $query = $query.',';      
        }
        
        DB::query(Database::INSERT,$query)->execute();
        
        // Set relation with each pair of products
        $connection = ORM::factory('behavior_connection');
        
        for($i = 0; $i < count($basket); $i++)
            for($j = $i+1; $j < count($basket); $j++)
                if($basket[$i] != $basket[$j])
                    $connection->create_connection($basket[$i],$basket[$j],'bought');
        
        return TRUE;
    }
    
    public function get_products(){
        
        if( !isset($_COOKIE['basket']) OR !isset($_COOKIE['bcount']) )
            return array();
            
        $basket = explode(',',Arr::get($_COOKIE,'basket'));
        $basket_count = explode(',',Arr::get($_COOKIE,'bcount'));
         
        if(count($basket) != count($basket_count))
            return FALSE;
            
        $b_c = array();
        for($i = 0; $i < count($basket); $i++)
            $b_c[$basket[$i]] = $basket_count[$i];
       
        $sql = 'SELECT * FROM `products` WHERE `id` IN(';
        
        for($i = 0; $i < count($basket); $i++)
        {
            $sql = $sql.sprintf('%d',$basket[$i]);
            
            if($i < count($basket)-1 ) 
                $sql = $sql.',';
            else
                $sql = $sql.')';  
        }    
        
        $result = DB::query(Database::SELECT, $sql)->execute();
        
        $arr = $result->as_array();
        
        for($i=0; $i < count($arr); $i++)
            $arr[$i]['count'] = $b_c[$arr[$i]['id']];
                
        return $arr;
    }
}
?>