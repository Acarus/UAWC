<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Catalog extends Controller_Base{

    private $elementsOnPage = 6; 

    public function action_index(){
        
        $products = Model::factory('catalog')->get_sorted_products();
        // Output in sorted form   
        $view = View::factory('catalog')
                ->bind('products',$products)
                ->set('elementsOnPage',$this->elementsOnPage);
        
        $this->template->content = $view->render();        
        
           
    }
}

?>