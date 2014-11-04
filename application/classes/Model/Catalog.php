<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Catalog extends Model {
    
    public function get_sorted_products(){
        
        $prod = array();
        $arr  = array();
        
        // The amount of data is small, we can get all the data at a time.
        $data = ORM::factory('product')->find_all();
        foreach($data as $item)
        {
            $prod[$item->id] = $item;
            
            // SET DEFAULT VALUE (0,0,0) - 0 times was bought,  0 times was revised, 0 times was in basket
            // Store ID of the product, because function rsort does not preserve the key value
             $arr[$item->id] = array(0,0,0,$item->id); 
            
        }
        
        // Get information on buying, revising, adding product to basket 
        $counter = ORM::factory('behavior_counter')->find_all();
        if($counter->count() > 0)
        {
            foreach($counter as $item)
            {
                
                switch($item->state->name)
                {
                    
                    //Set the most important parameter
                    case 'bought':
                        $arr[$item->product_id][0] = $item->count;
                    break;
                    
                    // Set the equally important parameter
                    case 'revised':
                        $arr[$item->product_id][1] = $item->count;
                    break;
                    
                    // And set the least important parameter
                    case 'basket':
                        $arr[$item->product_id][2] = $item->count;
                    break;    
                }
                  
            }    
        }
        
        rsort($arr);
        
        $products = array();
        foreach($arr as $item)
        {
            $products[] = $prod[$item[3]];
        }

        return $products;
    }   
}
?>