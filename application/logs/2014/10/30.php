<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-30 02:39:46 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`success`.`products_states_count`, CONSTRAINT `products_states_count_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`)) [ INSERT INTO `products_states_count` (`product_id`, `state_id`, `count`) VALUES ('3','0','1') ON DUPLICATE KEY UPDATE `count` = `count` + 1; ] ~ MODPATH\mysqli\classes\Database\MySQLi.php [ 174 ] in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251
2014-10-30 02:39:46 --- DEBUG: #0 C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `pr...', false, Array)
#1 C:\xampp\htdocs\site\www\application\classes\Model\Behavior\State.php(32): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\site\www\application\classes\Controller\Product.php(48): Model_Behavior_State->increment_cout('3', 'revised')
#3 C:\xampp\htdocs\site\www\system\classes\Kohana\Controller.php(84): Controller_Product->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#6 C:\xampp\htdocs\site\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\site\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\site\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\site\www\modules\database\classes\Kohana\Database\Query.php:251