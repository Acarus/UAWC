<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Checkout extends Controller_Base{
    
    public function action_success(){
        $view = View::factory('checkout/success');
        $this->template->content = $view->render();
    }
    
    public function action_fail(){
        $view = View::factory('checkout/fail');
        $this->template->content = $view->render();
    }
    
}

?>  