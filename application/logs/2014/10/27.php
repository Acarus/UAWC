<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-27 08:27:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\ajax.php [ 14 ] in C:\xampp\htdocs\site\www\application\classes\Controller\ajax.php:14
2014-10-27 08:27:29 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\ajax.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_hack()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\ajax.php:14
2014-10-27 08:33:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: postdata ~ APPPATH\classes\Controller\ajax.php [ 28 ] in C:\xampp\htdocs\site\www\application\classes\Controller\ajax.php:28
2014-10-27 08:33:12 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\ajax.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 28, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_go()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\ajax.php:28
2014-10-27 13:11:11 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\site\www\system\classes\Kohana\View.php:137
2014-10-27 13:11:11 --- DEBUG: #0 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('')
#3 C:\xampp\htdocs\site\www\application\classes\Controller\base.php(7): Kohana_Controller_Template->before()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\system\classes\Kohana\View.php:137
2014-10-27 13:11:52 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\site\www\system\classes\Kohana\View.php:137
2014-10-27 13:11:52 --- DEBUG: #0 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('')
#3 C:\xampp\htdocs\site\www\application\classes\Controller\base.php(7): Kohana_Controller_Template->before()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\system\classes\Kohana\View.php:137
2014-10-27 13:11:57 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\site\www\system\classes\Kohana\View.php:137
2014-10-27 13:11:57 --- DEBUG: #0 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\site\www\application\classes\Controller\base.php(7): Kohana_Controller_Template->before()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\system\classes\Kohana\View.php:137
2014-10-27 13:12:00 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\site\www\system\classes\Kohana\View.php:137
2014-10-27 13:12:00 --- DEBUG: #0 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('')
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('', NULL)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('')
#3 C:\xampp\htdocs\site\www\application\classes\Controller\base.php(7): Kohana_Controller_Template->before()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\system\classes\Kohana\View.php:137
2014-10-27 13:13:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: left_block ~ APPPATH\views\Base.php [ 1 ] in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:13:33 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Base.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:13:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: left_block ~ APPPATH\views\Base.php [ 1 ] in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:13:46 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Base.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:14:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: left ~ APPPATH\views\Base.php [ 1 ] in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:14:02 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Base.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:14:36 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Base.php [ 8 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Base.php:8
2014-10-27 13:14:36 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Base.php(8): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Base.php:8
2014-10-27 13:14:40 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Base.php [ 8 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Base.php:8
2014-10-27 13:14:40 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Base.php(8): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Base.php:8
2014-10-27 13:15:26 --- CRITICAL: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Base.php [ 8 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Base.php:8
2014-10-27 13:15:26 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Base.php(8): Kohana_Core::error_handler(2, 'Creating defaul...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(69): Controller_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Base))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Base.php:8
2014-10-27 13:21:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: left ~ APPPATH\views\Base.php [ 1 ] in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:21:10 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Base.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:23:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: left ~ APPPATH\views\Base.php [ 1 ] in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:23:38 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Base.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:23:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: left ~ APPPATH\views\Base.php [ 1 ] in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:23:42 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Base.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:23:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: left ~ APPPATH\views\Base.php [ 1 ] in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:23:49 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Base.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:23:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: left ~ APPPATH\views\Base.php [ 1 ] in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 13:23:52 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Base.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 20:27:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: left ~ APPPATH\views\Base.php [ 1 ] in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 20:27:40 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Base.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 21:05:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\Base.php [ 1 ] in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 21:05:06 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Base.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 1, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Base.php:1
2014-10-27 21:07:59 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Product.php [ 21 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:21
2014-10-27 21:07:59 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(21): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\\xampp\\htdocs...', 21, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:21
2014-10-27 21:08:37 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Product.php [ 21 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:21
2014-10-27 21:08:37 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(21): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\\xampp\\htdocs...', 21, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:21
2014-10-27 21:40:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function label() on a non-object ~ APPPATH\classes\Controller\Checkout.php [ 19 ] in file:line
2014-10-27 21:40:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-27 21:41:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function __i18() ~ APPPATH\classes\Controller\Checkout.php [ 10 ] in file:line
2014-10-27 21:41:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-27 22:00:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method HTML::redirect() ~ APPPATH\classes\Controller\Checkout.php [ 15 ] in file:line
2014-10-27 22:00:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-27 22:37:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_checkout' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-10-27 22:37:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-27 22:37:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Checkout' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2014-10-27 22:37:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-27 23:01:12 --- CRITICAL: ErrorException [ 1 ]: Cannot call constructor ~ APPPATH\classes\Model\Checkout.php [ 9 ] in file:line
2014-10-27 23:01:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-27 23:02:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: min(`id`) ~ APPPATH\classes\Model\Checkout.php [ 11 ] in C:\xampp\htdocs\site\www\application\classes\Model\Checkout.php:11
2014-10-27 23:02:04 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Model\Checkout.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Model.php(26): Model_Checkout->__construct()
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Checkout.php(15): Kohana_Model::factory('Checkout')
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Checkout->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Checkout))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\site\www\application\classes\Model\Checkout.php:11
2014-10-27 23:11:08 --- CRITICAL: ErrorException [ 8192 ]: Function split() is deprecated ~ APPPATH\classes\Model\Checkout.php [ 18 ] in file:line
2014-10-27 23:11:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'Function split(...', 'C:\\xampp\\htdocs...', 18, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Model\Checkout.php(18): split()
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Checkout.php(18): Model_Checkout->checkout()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Checkout->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Checkout))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-10-27 23:49:29 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant compare - assumed 'compare' ~ APPPATH\classes\Controller\Catalog.php [ 35 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:35
2014-10-27 23:49:29 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(35): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 35, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(43): Controller_Catalog->my_sort(Array)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:35
2014-10-27 23:49:32 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant compare - assumed 'compare' ~ APPPATH\classes\Controller\Catalog.php [ 35 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:35
2014-10-27 23:49:32 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(35): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 35, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(43): Controller_Catalog->my_sort(Array)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:35
2014-10-27 23:49:50 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Catalog::$compare ~ APPPATH\classes\Controller\Catalog.php [ 35 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:35
2014-10-27 23:49:50 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 35, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(43): Controller_Catalog->my_sort(Array)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:35
2014-10-27 23:50:01 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Catalog::compare(), called in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php on line 35 and defined ~ APPPATH\classes\Controller\Catalog.php [ 5 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:5
2014-10-27 23:50:01 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(35): Controller_Catalog->compare()
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(43): Controller_Catalog->my_sort(Array)
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:5
2014-10-27 23:50:19 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant compare - assumed 'compare' ~ APPPATH\classes\Controller\Catalog.php [ 35 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:35
2014-10-27 23:50:19 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(35): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 35, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(43): Controller_Catalog->my_sort(Array)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:35
2014-10-27 23:50:44 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant cmp - assumed 'cmp' ~ APPPATH\classes\Controller\Catalog.php [ 38 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:38
2014-10-27 23:50:44 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(38): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 38, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(46): Controller_Catalog->my_sort(Array)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:38
2014-10-27 23:51:07 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\classes\Controller\Catalog.php [ 50 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:50
2014-10-27 23:51:07 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(50): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:50