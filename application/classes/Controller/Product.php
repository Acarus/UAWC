<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Product extends Controller_Base{
    
    public function do_randomly(&$param){
        //  Randomly delete items until the length of the array is greater than 4 
        while(count($param) > 4)
        {
            $index = rand(0, count($param)-1);
                
            $param[$index] = $param[0];
            array_shift($param);         
        }
    }
    
    public function action_index(){
    
        $id = $this->request->param('id');
        
        if(isset($id))
        {
            $product = ORM::factory('product')->where('id','=',(int) $id)->find();
        }
        else
        {
            // Get first product
            $product = ORM::factory('product')->find();
        }       
        
        if($product->loaded())
        {   
            
            // Count revised pages
            if( ($arr = Cookie::get('views') ) == NULL) 
            {
                $arr = array();
            }
            else
            {
                $arr = unserialize($arr);
                if(! is_array($arr)) $arr = array();
            }              
            
            if(! in_array($product->id,$arr) )
            {
                
                // Plus one view this page
                ORM::factory('behavior_state')->increment_cout($product->id,'revised'); 
                
                // Set relations between products that was revised by current user and this product
                if(count($arr) > 0)
                    ORM::factory('behavior_connection')->create_connection($product->id, $arr, 'revised');
                
                $arr[] = $product->id;
            }
            
            Cookie::set('views',serialize($arr));
            
            // Get similar products
            $connection_model = ORM::factory('behavior_connection');
            
            $similar_with_bought  = $connection_model->obtain_similar($product->id,'bought');
            $similar_with_revised = $connection_model->obtain_similar($product->id,'revised');
            $similar_with_basket  = $connection_model->obtain_similar($product->id,'basket');
              
            $this->do_randomly($similar_with_bought);  
            $this->do_randomly($similar_with_revised);  
            $this->do_randomly($similar_with_basket);  
            
            $view = View::factory('product')
                    ->set('product',$product->as_array())
                    ->bind('similar_with_basket',$similar_with_basket)
                    ->bind('similar_with_revised',$similar_with_revised)
                    ->bind('similar_with_bought',$similar_with_bought);
            
            $this->template->content = $view->render();
        }
        else
        {
            //  Not found product with this ID
            $this->template->content = 'Такого товару немає в каталозі.';
        }
        
    }
    
}

?>