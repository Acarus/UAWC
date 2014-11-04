<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-28 00:04:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function checkout() ~ APPPATH\classes\Controller\Catalog.php [ 23 ] in file:line
2014-10-28 00:04:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 00:05:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'as' (T_AS) ~ APPPATH\classes\Controller\Catalog.php [ 23 ] in file:line
2014-10-28 00:05:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 00:18:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_states' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 00:18:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 00:18:42 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_State as array ~ APPPATH\classes\Controller\Catalog.php [ 13 ] in file:line
2014-10-28 00:18:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 00:19:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\Catalog.php [ 12 ] in file:line
2014-10-28 00:19:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 00:19:37 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_State as array ~ APPPATH\classes\Controller\Catalog.php [ 15 ] in file:line
2014-10-28 00:19:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 00:29:05 --- CRITICAL: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ MODPATH\orm\classes\Kohana\ORM.php [ 1100 ] in file:line
2014-10-28 00:29:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', 'C:\\xampp\\htdocs...', 1100, Array)
#1 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(1100): array_key_exists(Array, Array)
#2 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(469): Kohana_ORM->_load_values(Array)
#3 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(392): Kohana_ORM->clear()
#4 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(7): Kohana_ORM::factory('catalog')
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#10 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-10-28 00:29:06 --- CRITICAL: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ MODPATH\orm\classes\Kohana\ORM.php [ 1100 ] in file:line
2014-10-28 00:29:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', 'C:\\xampp\\htdocs...', 1100, Array)
#1 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(1100): array_key_exists(Array, Array)
#2 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(469): Kohana_ORM->_load_values(Array)
#3 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(392): Kohana_ORM->clear()
#4 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(7): Kohana_ORM::factory('catalog')
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#10 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-10-28 00:33:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Catalog::count() ~ APPPATH\classes\Controller\Catalog.php [ 13 ] in file:line
2014-10-28 00:33:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 00:34:00 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'state.state_id' in 'where clause' [ SELECT `state`.`id` AS `id`, `state`.`name` AS `name`, `state`.`description` AS `description` FROM `states` AS `state` WHERE `state`.`state_id` IS NULL LIMIT 1 ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:34:00 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `state`....', false, Array)
#1 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(653): Kohana_ORM->find()
#4 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('state')
#5 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(13): Kohana_ORM->__get('state')
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#9 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:34:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Catalog.php [ 13 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:13
2014-10-28 00:34:11 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:13
2014-10-28 00:34:15 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'state.state_id' in 'where clause' [ SELECT `state`.`id` AS `id`, `state`.`name` AS `name`, `state`.`description` AS `description` FROM `states` AS `state` WHERE `state`.`state_id` IS NULL LIMIT 1 ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:34:15 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `state`....', false, Array)
#1 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(653): Kohana_ORM->find()
#4 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('state')
#5 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(13): Kohana_ORM->__get('state')
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#9 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:35:54 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'product.product_id' in 'where clause' [ SELECT `product`.`id` AS `id`, `product`.`title` AS `title`, `product`.`description` AS `description`, `product`.`logo` AS `logo`, `product`.`price` AS `price`, `product`.`articul` AS `articul` FROM `products` AS `product` WHERE `product`.`product_id` IS NULL LIMIT 1 ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:35:54 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `product...', false, Array)
#1 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(653): Kohana_ORM->find()
#4 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('product')
#5 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(14): Kohana_ORM->__get('product')
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#9 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:36:52 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'product.product_id' in 'where clause' [ SELECT `product`.`id` AS `id`, `product`.`title` AS `title`, `product`.`description` AS `description`, `product`.`logo` AS `logo`, `product`.`price` AS `price`, `product`.`articul` AS `articul` FROM `products` AS `product` WHERE `product`.`product_id` IS NULL LIMIT 1 ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:36:52 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `product...', false, Array)
#1 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(653): Kohana_ORM->find()
#4 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('products')
#5 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(14): Kohana_ORM->__get('products')
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#9 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:39:17 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'state.state_id' in 'where clause' [ SELECT `state`.`id` AS `id`, `state`.`name` AS `name`, `state`.`description` AS `description` FROM `states` AS `state` WHERE `state`.`state_id` = '1' LIMIT 1 ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:39:17 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `state`....', false, Array)
#1 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(640): Kohana_ORM->find()
#4 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('states')
#5 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(14): Kohana_ORM->__get('states')
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#9 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:39:20 --- CRITICAL: Kohana_Exception [ 0 ]: The state property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 00:39:20 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('state')
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(14): Kohana_ORM->__get('state')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 00:42:05 --- CRITICAL: Kohana_Exception [ 0 ]: The states property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 00:42:05 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('states')
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(14): Kohana_ORM->__get('states')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 00:43:20 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Product class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 00:43:20 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(13): Kohana_ORM->__get('name')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 00:44:16 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'product.product_id' in 'where clause' [ SELECT `product`.`id` AS `id`, `product`.`title` AS `title`, `product`.`description` AS `description`, `product`.`logo` AS `logo`, `product`.`price` AS `price`, `product`.`articul` AS `articul` FROM `products` AS `product` WHERE `product`.`product_id` IS NULL LIMIT 1 ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:44:16 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `product...', false, Array)
#1 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(653): Kohana_ORM->find()
#4 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('product')
#5 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(13): Kohana_ORM->__get('product')
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#9 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 00:50:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Catalog::count() ~ APPPATH\classes\Controller\Catalog.php [ 10 ] in file:line
2014-10-28 00:50:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 01:09:04 --- CRITICAL: ErrorException [ 2 ]: rsort() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\Catalog.php [ 40 ] in file:line
2014-10-28 01:09:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rsort() expects...', 'C:\\xampp\\htdocs...', 40, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(40): rsort(NULL)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 01:09:06 --- CRITICAL: ErrorException [ 2 ]: rsort() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\Catalog.php [ 40 ] in file:line
2014-10-28 01:09:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rsort() expects...', 'C:\\xampp\\htdocs...', 40, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(40): rsort(NULL)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 01:09:21 --- CRITICAL: ErrorException [ 2 ]: rsort() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\Catalog.php [ 40 ] in file:line
2014-10-28 01:09:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rsort() expects...', 'C:\\xampp\\htdocs...', 40, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(40): rsort(NULL)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 01:10:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _arr ~ APPPATH\classes\Controller\Catalog.php [ 42 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:42
2014-10-28 01:10:30 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 42, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php:42
2014-10-28 01:12:29 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Product class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 01:12:29 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(45): Kohana_ORM->__get('name')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 02:02:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\views\Catalog.php [ 4 ] in C:\xampp\htdocs\site\www\application\views\Catalog.php:4
2014-10-28 02:02:41 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Catalog.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(52): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Catalog.php:4
2014-10-28 02:03:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\views\Catalog.php [ 4 ] in C:\xampp\htdocs\site\www\application\views\Catalog.php:4
2014-10-28 02:03:34 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Catalog.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(52): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Catalog.php:4
2014-10-28 02:15:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''AND `state_id` = %d ORDER BY ' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Model\Product.php [ 20 ] in file:line
2014-10-28 02:15:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 02:26:13 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 24 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:26:13 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(24): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:26:32 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 24 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:26:32 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(24): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:26:33 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 24 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:26:33 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(24): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:26:35 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 24 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:26:35 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(24): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:26:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_object() ~ APPPATH\classes\Model\Product.php [ 23 ] in file:line
2014-10-28 02:26:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 02:26:58 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 24 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:26:58 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(24): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:27:19 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 24 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:27:19 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(24): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:27:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: count ~ APPPATH\classes\Controller\Product.php [ 24 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:27:59 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 24, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:24
2014-10-28 02:38:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Connection::count() ~ APPPATH\classes\Controller\Product.php [ 21 ] in file:line
2014-10-28 02:38:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 02:43:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Connection.php [ 46 ] in file:line
2014-10-28 02:43:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 02:44:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Connection::obtain_simular() ~ APPPATH\classes\Controller\Product.php [ 20 ] in file:line
2014-10-28 02:44:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 03:14:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: weight ~ APPPATH\classes\Controller\Product.php [ 36 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:36
2014-10-28 03:14:57 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(36): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 36, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:36
2014-10-28 03:16:54 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$product_a ~ APPPATH\classes\Controller\Product.php [ 37 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:16:54 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:17:24 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$state_id ~ APPPATH\classes\Controller\Product.php [ 37 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:17:24 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:18:03 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$count ~ APPPATH\classes\Controller\Product.php [ 37 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:18:03 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:18:07 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$count ~ APPPATH\classes\Controller\Product.php [ 37 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:18:07 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:18:08 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$count ~ APPPATH\classes\Controller\Product.php [ 37 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:18:08 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:18:43 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$product_a ~ APPPATH\classes\Controller\Product.php [ 37 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:18:43 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\xampp\\htdocs...', 37, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:18:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Product.php [ 37 ] in file:line
2014-10-28 03:18:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 03:19:37 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 38 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:38
2014-10-28 03:19:37 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(38): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 38, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:38
2014-10-28 03:19:57 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first_product ~ APPPATH\classes\Controller\Product.php [ 38 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:38
2014-10-28 03:19:57 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 38, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:38
2014-10-28 03:21:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: first_product ~ APPPATH\classes\Controller\Product.php [ 38 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:38
2014-10-28 03:21:22 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 38, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:38
2014-10-28 03:21:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: product_a ~ APPPATH\classes\Controller\Product.php [ 38 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:38
2014-10-28 03:21:54 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 38, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:38
2014-10-28 03:22:03 --- CRITICAL: ErrorException [ 8 ]: Undefined index: weight ~ APPPATH\classes\Controller\Product.php [ 38 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:38
2014-10-28 03:22:03 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(38): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 38, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:38
2014-10-28 03:22:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: weight ~ APPPATH\classes\Controller\Product.php [ 40 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:40
2014-10-28 03:22:46 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(40): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 40, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:40
2014-10-28 03:22:58 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Connection as array ~ APPPATH\classes\Controller\Product.php [ 40 ] in file:line
2014-10-28 03:22:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 03:26:53 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:26:53 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(37): Kohana_Database_Result->offsetUnset(0)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:26:56 --- CRITICAL: Kohana_Exception [ 0 ]: Database results are read-only ~ MODPATH\database\classes\Kohana\Database\Result.php [ 272 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:26:56 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(37): Kohana_Database_Result->offsetUnset(0)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:37
2014-10-28 03:36:31 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Controller_Product::choose_four_elements(), called in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php on line 41 and defined ~ APPPATH\classes\Controller\Product.php [ 5 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:5
2014-10-28 03:36:31 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 5, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(41): Controller_Product->choose_four_elements(Array)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:5
2014-10-28 03:37:16 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 45 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:45
2014-10-28 03:37:16 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(45): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 45, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:45
2014-10-28 03:37:24 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 45 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:45
2014-10-28 03:37:24 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(45): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 45, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:45
2014-10-28 03:37:29 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 45 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:45
2014-10-28 03:37:29 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(45): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 45, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:45
2014-10-28 03:38:40 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 46 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:46
2014-10-28 03:38:40 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(46): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:46
2014-10-28 03:38:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\Controller\Product.php [ 46 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:46
2014-10-28 03:38:48 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:46
2014-10-28 03:40:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: similar_with_bought ~ APPPATH\views\Product.php [ 7 ] in C:\xampp\htdocs\site\www\application\views\Product.php:7
2014-10-28 03:40:51 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\views\Product.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(51): Kohana_View->render()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\site\www\application\views\Product.php:7
2014-10-28 03:43:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\Product.php [ 8 ] in file:line
2014-10-28 03:43:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 03:49:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\Product.php [ 5 ] in file:line
2014-10-28 03:49:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 03:49:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH\views\Product.php [ 5 ] in file:line
2014-10-28 03:49:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 04:28:02 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Model_Connection::create_connection(), called in C:\xampp\htdocs\site\www\application\classes\Model\Checkout.php on line 44 and defined ~ APPPATH\classes\Model\Connection.php [ 55 ] in C:\xampp\htdocs\site\www\application\classes\Model\Connection.php:55
2014-10-28 04:28:02 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Model\Connection.php(55): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 55, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Model\Checkout.php(44): Model_Connection->create_connection('2', '3')
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Checkout.php(18): Model_Checkout->checkout()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Checkout->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Checkout))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\site\www\application\classes\Model\Connection.php:55
2014-10-28 04:29:23 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:29:23 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:29:27 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:29:27 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:29:35 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:29:35 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:29:37 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:29:37 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:00 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:00 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:00 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:02 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:02 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:04 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:04 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:06 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:06 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:07 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:07 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:10 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:10 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:12 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:30:12 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:34:04 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 13 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:13
2014-10-28 04:34:04 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(13): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 13, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(52): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:13
2014-10-28 04:36:08 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 15 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:15
2014-10-28 04:36:08 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(54): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:15
2014-10-28 04:36:09 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 15 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:15
2014-10-28 04:36:09 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(54): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:15
2014-10-28 04:36:11 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 15 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:15
2014-10-28 04:36:11 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(54): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:15
2014-10-28 04:36:29 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 15 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:15
2014-10-28 04:36:29 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(54): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:15
2014-10-28 04:36:43 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 15 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:15
2014-10-28 04:36:43 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(15): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 15, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(54): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:15
2014-10-28 04:38:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 14 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:14
2014-10-28 04:38:54 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(53): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:14
2014-10-28 04:40:01 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 14 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:14
2014-10-28 04:40:01 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(55): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:14
2014-10-28 04:40:02 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 14 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:14
2014-10-28 04:40:02 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(55): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:14
2014-10-28 04:40:03 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 14 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:14
2014-10-28 04:40:03 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(55): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:14
2014-10-28 04:40:13 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 14 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:14
2014-10-28 04:40:13 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(14): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 14, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(55): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:14
2014-10-28 04:47:16 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 04:47:16 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(42): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 05:31:18 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_state' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 05:31:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 05:32:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_state' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 05:32:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 05:32:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_behavior/state' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 05:32:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 05:45:56 --- CRITICAL: ErrorException [ 2 ]: rsort() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\Catalog.php [ 48 ] in file:line
2014-10-28 05:45:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rsort() expects...', 'C:\\xampp\\htdocs...', 48, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(48): rsort(NULL)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 05:45:58 --- CRITICAL: ErrorException [ 2 ]: rsort() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\Catalog.php [ 48 ] in file:line
2014-10-28 05:45:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rsort() expects...', 'C:\\xampp\\htdocs...', 48, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Catalog.php(48): rsort(NULL)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Catalog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 06:22:15 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php:20
2014-10-28 06:22:15 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php(20): Kohana_ORM->find()
#1 C:\xampp\htdocs\site\www\application\classes\Model\Checkout.php(34): Model_Behavior_State->increment_cout(3, 'bought')
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Checkout.php(18): Model_Checkout->checkout()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Checkout->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Checkout))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php:20
2014-10-28 06:22:39 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php:20
2014-10-28 06:22:39 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php(20): Kohana_ORM->find()
#1 C:\xampp\htdocs\site\www\application\classes\Model\Checkout.php(34): Model_Behavior_State->increment_cout(3, 'bought')
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Checkout.php(18): Model_Checkout->checkout()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Checkout->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Checkout))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php:20
2014-10-28 06:25:42 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php:20
2014-10-28 06:25:42 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php(20): Kohana_ORM->find()
#1 C:\xampp\htdocs\site\www\application\classes\Model\Checkout.php(34): Model_Behavior_State->increment_cout(3, 'bought')
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Checkout.php(18): Model_Checkout->checkout()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Checkout->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Checkout))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php:20
2014-10-28 06:34:37 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php:20
2014-10-28 06:34:37 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php(20): Kohana_ORM->find()
#1 C:\xampp\htdocs\site\www\application\classes\Model\Checkout.php(34): Model_Behavior_State->increment_cout(2, 'bought')
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Checkout.php(18): Model_Checkout->checkout()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Checkout->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Checkout))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php:20
2014-10-28 06:35:51 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php:20
2014-10-28 06:35:51 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php(20): Kohana_ORM->find()
#1 C:\xampp\htdocs\site\www\application\classes\Model\Checkout.php(34): Model_Behavior_State->increment_cout(2, 'bought')
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Checkout.php(18): Model_Checkout->checkout()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Checkout->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Checkout))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php:20
2014-10-28 06:48:07 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Behavior_Connection class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 06:48:07 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id')
#1 C:\xampp\htdocs\site\www\application\views\Product.php(9): Kohana_ORM->__get('id')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(55): Kohana_View->render()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 06:51:48 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 44 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:44
2014-10-28 06:51:48 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(44): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 44, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:44
2014-10-28 06:51:50 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Product.php [ 44 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:44
2014-10-28 06:51:50 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(44): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\\xampp\\htdocs...', 44, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:44
2014-10-28 06:54:39 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Behavior_Connection class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 06:54:39 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id')
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(43): Kohana_ORM->__get('id')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 07:08:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function random() ~ APPPATH\classes\Controller\Product.php [ 11 ] in file:line
2014-10-28 07:08:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:08:15 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant first_product - assumed 'first_product' ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 07:08:15 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(56): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 07:09:12 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant second_product - assumed 'second_product' ~ APPPATH\classes\Controller\Product.php [ 12 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 07:09:12 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(12): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(56): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:12
2014-10-28 07:10:17 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\Product.php [ 22 ] in file:line
2014-10-28 07:10:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:10:24 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\Product.php [ 13 ] in file:line
2014-10-28 07:10:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:10:57 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\Product.php [ 11 ] in file:line
2014-10-28 07:10:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:11:11 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 6 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:6
2014-10-28 07:11:11 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(6): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(35): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:6
2014-10-28 07:11:24 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 6 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:6
2014-10-28 07:11:24 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(6): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 6, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(35): Controller_Product->choose_four_elements(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:6
2014-10-28 07:12:10 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Behavior_Connection class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 07:12:10 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id')
#1 C:\xampp\htdocs\site\www\application\views\Product.php(9): Kohana_ORM->__get('id')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(40): Kohana_View->render()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#8 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\site\www\modules\orm\classes\Kohana\ORM.php:603
2014-10-28 07:22:36 --- CRITICAL: ErrorException [ 2 ]: array_rand(): Second argument has to be between 1 and the number of elements in the array ~ APPPATH\classes\Controller\Product.php [ 8 ] in file:line
2014-10-28 07:22:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_rand(): S...', 'C:\\xampp\\htdocs...', 8, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(8): array_rand(Array, 0)
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(47): Controller_Product->get_randomly(Array, '2')
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-10-28 07:23:36 --- CRITICAL: ErrorException [ 2 ]: array_rand(): Second argument has to be between 1 and the number of elements in the array ~ APPPATH\classes\Controller\Product.php [ 9 ] in file:line
2014-10-28 07:23:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_rand(): S...', 'C:\\xampp\\htdocs...', 9, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(9): array_rand(Array, 0)
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(48): Controller_Product->get_randomly(Array, '2')
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-10-28 07:23:57 --- CRITICAL: ErrorException [ 2 ]: array_rand(): Second argument has to be between 1 and the number of elements in the array ~ APPPATH\classes\Controller\Product.php [ 10 ] in file:line
2014-10-28 07:23:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_rand(): S...', 'C:\\xampp\\htdocs...', 10, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(10): array_rand(Array, 0)
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(49): Controller_Product->get_randomly(Array, '2')
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-10-28 07:37:05 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 14 ] in file:line
2014-10-28 07:37:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:37:08 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 14 ] in file:line
2014-10-28 07:37:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:38:27 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 14 ] in file:line
2014-10-28 07:38:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:38:43 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 16 ] in file:line
2014-10-28 07:38:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:38:50 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 16 ] in file:line
2014-10-28 07:38:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:38:53 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 16 ] in file:line
2014-10-28 07:38:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:38:58 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 16 ] in file:line
2014-10-28 07:38:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:39:36 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 16 ] in file:line
2014-10-28 07:39:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:39:48 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 17 ] in file:line
2014-10-28 07:39:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:41:27 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Product.php [ 7 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:7
2014-10-28 07:41:27 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(7): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(39): Controller_Product->get_randomly(Array, '2')
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Product.php:7
2014-10-28 07:44:46 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 16 ] in file:line
2014-10-28 07:44:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:45:08 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 19 ] in file:line
2014-10-28 07:45:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:45:11 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 19 ] in file:line
2014-10-28 07:45:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:45:55 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 18 ] in file:line
2014-10-28 07:45:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:46:26 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Behavior_Connection as array ~ APPPATH\classes\Controller\Product.php [ 18 ] in file:line
2014-10-28 07:46:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:46:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(array)' (array) (T_ARRAY_CAST), expecting '&' or variable (T_VARIABLE) ~ APPPATH\classes\Controller\Product.php [ 5 ] in file:line
2014-10-28 07:46:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 07:46:39 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\classes\Controller\Product.php [ 15 ] in file:line
2014-10-28 07:46:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:43:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:43:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:43:36 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:43:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:43:59 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:43:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:43:59 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:43:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:00 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:01 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:01 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:01 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:02 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:02 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:03 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:04 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:04 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:05 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:05 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:05 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:05 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:06 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:06 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:07 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:07 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:07 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:08 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:44:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:44:08 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('http://localhos...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:23 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(localhost/ajax/atb): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('localhost/ajax/...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:44:25 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(localhost/ajax/atb): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Ajax.php [ 41 ] in file:line
2014-10-28 08:44:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'C:\\xampp\\htdocs...', 41, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(41): file_get_contents('localhost/ajax/...', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:46:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:46:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:46:28 --- CRITICAL: ErrorException [ 2 ]: fopen(http://localhost/ajax/atb): failed to open stream: HTTP request failed! HTTP/1.0 500 Internal Server Error
 ~ APPPATH\classes\Controller\Ajax.php [ 36 ] in file:line
2014-10-28 08:46:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(http://lo...', 'C:\\xampp\\htdocs...', 36, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(36): fopen('http://localhos...', 'r', false, Resource id #51)
#2 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-28 08:52:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\classes\Controller\Ajax.php [ 50 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php:50
2014-10-28 08:52:33 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 50, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php:50
2014-10-28 08:52:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Ajax.php [ 52 ] in file:line
2014-10-28 08:52:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:52:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Ajax.php [ 52 ] in file:line
2014-10-28 08:52:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:52:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Ajax.php [ 52 ] in file:line
2014-10-28 08:52:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 08:54:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Ajax.php [ 30 ] in C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php:30
2014-10-28 08:54:39 --- DEBUG: #0 C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 30, Array)
#1 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\site\www\application\classes\Controller\Ajax.php:30
2014-10-28 08:56:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_connection' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-10-28 08:56:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 09:24:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Behavior_Connection::increment_cout() ~ APPPATH\classes\Controller\Ajax.php [ 17 ] in file:line
2014-10-28 09:24:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 09:25:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Behavior_Connection::increment_cout() ~ APPPATH\classes\Controller\Ajax.php [ 17 ] in file:line
2014-10-28 09:25:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 10:54:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Behavior_State::create_connection() ~ APPPATH\classes\Controller\Product.php [ 51 ] in file:line
2014-10-28 10:54:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-28 10:55:23 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ON DUPLICATE KEY UPDATE `weight` = `weight` + 1' at line 1 [ INSERT INTO `connections` (`product_a`,`product_b`,`state_id`,`weight`) VALUES  ON DUPLICATE KEY UPDATE `weight` = `weight` + 1; ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-28 10:55:23 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(3, 'INSERT INTO `co...', false, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Model\Behavior\Connection.php(102): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(51): Model_Behavior_Connection->create_connection('2', Array, 'revised')
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251