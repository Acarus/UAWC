<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Behavior_Connection extends ORM {
    
    protected $_table_name = 'connections';
    
    protected $_table_columns = array(
      'product_a'    =>  NULL,
      'product_b'    =>  NULL,
      'state_id'     =>  NULL,
      'weight'       =>  NULL     
    );
    
    protected $_belongs_to = array(
        'state' => array(
            'model' => 'behavior_state',
            'foreign_key' => 'state_id'
        ),
        
        'first_product' => array(
            'model' => 'product',
            'foreign_key' => 'product_a'
        ),
        
        'second_product' => array(
            'model' => 'product',
            'foreign_key' => 'product_b'
        )
        
    );
    
    
    public function obtain_similar($product_id, $state){
        // Get State id
        $state_id = ORM::factory('behavior_state')
                        ->where('name','=',$state)
                        ->find()
                        ->id;
        
        //echo 'state_id = '.$state_id;
         
        // Get 10 similar products
        $arr =  $this   ->where_open()
                        ->where('product_a','=',$product_id)
                        ->or_where('product_b','=',$product_id)
                        ->where_close()
                        ->and_where('state_id','=',$state_id)
                        ->order_by('weight','desc')
                        ->limit(10)
                        ->find_all();
        
        $array_of_object = $arr->as_array();
        
        $result = array();
        
        foreach($array_of_object as $item)
        {
            if($item->first_product->id == $product_id)
                $result[] = $item->second_product;
            else
                $result[] = $item->first_product;
        }
        
        return $result;
        
    }
    
    public function create_connection($product_id, $products, $state){
        // Get State id
        $state_id = ORM::factory('behavior_state')
                        ->where('name','=',$state)
                        ->find()
                        ->id;
                                
        $result = DB::query(Database::SELECT,'SELECT min(`id`),max(`id`) FROM `products`')->execute()->as_array();
        
        // Get min and max product's ID in catalog
        $min_index = $result[0]['min(`id`)'];
        $max_index = $result[0]['max(`id`)'];
        
        // Validate product`s ID. Each ID must be in range(min_id,max_id)
        if($product_id < $min_index OR $product_id > $max_index) 
            return FALSE;
    
        if(!is_array($products))
            $products = array($products);
    
        for($i = 0; $i < count($products); $i++)
            if( (int)$products[$i] < $min_index OR (int)$products[$i] > $max_index)
                return FALSE;
                
        $sql = 'INSERT INTO `connections` (`product_a`,`product_b`,`state_id`,`weight`) VALUES ';
        
        for($i = 0; $i < count($products); $i++)
        {
            // As we have an undirected graph, so to get rid of ambiguity of the existence of connections types (a,b) and (b,a)
            // We connect vertex of a smaller index to the vertex with a greater index 
            $sql = $sql.sprintf('(\'%d\',\'%d\',\'%d\',\'%d\')', min($product_id,$products[$i]), max($product_id,$products[$i]), $state_id, 1);
            if($i < count($products)-1) $sql = $sql.',';
        }
        
        $sql = $sql.' ON DUPLICATE KEY UPDATE `weight` = `weight` + 1;';
     
        DB::query(Database::UPDATE,$sql)->execute();
        return TRUE;
    } 
}




?>