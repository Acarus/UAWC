<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Basket extends Controller_Base{

    public function action_index(){
        
        $view = View::factory('basket');
        $model = Model::factory('basket');
        
        if(isset($_POST['btn']))
         {
            $validation = Validation::factory($_POST);
            $validation -> rule('name', 'not_empty')
                        -> label('name', __('name'));
            
            if($validation->check())
            {
                // Checkout
                if($model->checkout())
                {
                    // Delete basket
                    setcookie('basket', '', time()-3600);
                    setcookie('bcount', '', time()-3600);
                    setcookie('pbasket', '', time()-3600);
                    
                    // redirect to success page
                    $this->redirect(URL::base().'checkout/success');
                }
                else
                {
                    
                    // redirect to fail page
                    $this->redirect(URL::base().'checkout/fail');
                }
            }
            else
            {  
                // Validation failed. Show errors.
                $errors = $validation->errors('user');
                
                // Push errors
                $view->bind('errors',$errors);
                    
            }
        }

        
           
        $products = $model->get_products();  
        $view->bind('products',$products);
             
        $this->template->content = $view->render();        
           
    }
}

?>