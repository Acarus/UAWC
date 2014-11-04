<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-21 17:33:16 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\xampp\htdocs\site\www\system\classes\Kohana\Cookie.php:67
2014-10-21 17:33:16 --- DEBUG: #0 C:\xampp\htdocs\site\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\xampp\htdocs\site\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\site\www\system\classes\Kohana\Cookie.php:67
2014-10-21 17:33:26 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\xampp\htdocs\site\www\system\classes\Kohana\Cookie.php:67
2014-10-21 17:33:26 --- DEBUG: #0 C:\xampp\htdocs\site\www\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 C:\xampp\htdocs\site\www\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\site\www\system\classes\Kohana\Cookie.php:67
2014-10-21 19:14:20 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /kohana/index.php/ [ status 0 ] SSL certificate problem: unable to get local issuer certificate ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php:138
2014-10-21 19:14:20 --- DEBUG: #0 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\xampp\htdocs\site\www\application\classes\Controller\Welcome.php(9): Kohana_Request->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php:138
2014-10-21 19:14:30 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /kohana/index.php/ [ status 0 ] SSL certificate problem: unable to get local issuer certificate ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php:138
2014-10-21 19:14:30 --- DEBUG: #0 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\xampp\htdocs\site\www\application\classes\Controller\Welcome.php(9): Kohana_Request->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php:138
2014-10-21 19:15:00 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /kohana/index.php/ [ status 0 ] SSL certificate problem: unable to get local issuer certificate ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php:138
2014-10-21 19:15:00 --- DEBUG: #0 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\xampp\htdocs\site\www\application\classes\Controller\Welcome.php(9): Kohana_Request->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php:138
2014-10-21 19:21:01 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /kohana/index.php/ [ status 0 ] SSL certificate problem: unable to get local issuer certificate ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php:138
2014-10-21 19:21:01 --- DEBUG: #0 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\xampp\htdocs\site\www\application\classes\Controller\Welcome.php(9): Kohana_Request->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php:138
2014-10-21 19:21:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Welcome.php [ 11 ] in file:line
2014-10-21 19:21:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-21 19:21:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Welcome.php [ 11 ] in file:line
2014-10-21 19:21:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-21 19:22:08 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /kohana/index.php/ [ status 0 ] SSL certificate problem: unable to get local issuer certificate ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php:138
2014-10-21 19:22:08 --- DEBUG: #0 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 C:\xampp\htdocs\site\www\application\classes\Controller\Welcome.php(9): Kohana_Request->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\External.php:138
2014-10-21 19:37:56 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant ENDL - assumed 'ENDL' ~ APPPATH\classes\Controller\Welcome.php [ 3 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Welcome.php:3
2014-10-21 19:37:56 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Welcome.php(3): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 3, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Core.php(511): require('C:\\xampp\\htdocs...')
#2 [internal function]: Kohana_Core::auto_load('Controller_Welc...')
#3 [internal function]: spl_autoload_call('Controller_Welc...')
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(74): class_exists('Controller_Welc...')
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Welcome.php:3