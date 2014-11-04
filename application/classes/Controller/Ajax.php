<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller{
    
    public function action_atb(){
    
        if(!isset($_POST['id']) OR !isset($_POST['basket']))
            die('NO');
                
        $backet = explode(',', Arr::get($_POST,'basket'));
        
        $connection = ORM::factory('behavior_connection');
     
        // Set relations between products that are already in the basket and newr product
        if($connection->create_connection(Arr::get($_POST,'id'), $backet, 'basket'))
        {   
            // Increase by one the number of times that the product ID is in a state BASKET
            ORM::factory('behavior_state')->increment_cout(array(Arr::get($_POST,'id')),'basket');  
            echo 'YES';
        }
        else    
            echo 'NO';           
    }            
}

?>