<?php defined('SYSPATH') or die('No direct script access.');

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {
 
    public function get_response()
    {
        // Redirect to home page
        header('Location: '.URL::base());
    }
}

?>