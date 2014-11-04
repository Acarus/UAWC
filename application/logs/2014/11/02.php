<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-02 11:19:30 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'uawc.products' doesn't exist [ SELECT `product`.`id` AS `id`, `product`.`title` AS `title`, `product`.`description` AS `description`, `product`.`logo` AS `logo`, `product`.`blogo` AS `blogo`, `product`.`price` AS `price`, `product`.`articul` AS `articul` FROM `products` AS `product` WHERE `id` = 1 LIMIT 1 ] ~ MODPATH/mysqli/classes/Database/Mysqli.php [ 174 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 11:19:30 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `product...', false, Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(979): Kohana_ORM->_load_result(false)
#3 /var/www/application/classes/Controller/Product.php(22): Kohana_ORM->find()
#4 /var/www/system/classes/Kohana/Controller.php(84): Controller_Product->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Product))
#7 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 11:19:39 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'uawc.products' doesn't exist [ SELECT `product`.`id` AS `id`, `product`.`title` AS `title`, `product`.`description` AS `description`, `product`.`logo` AS `logo`, `product`.`blogo` AS `blogo`, `product`.`price` AS `price`, `product`.`articul` AS `articul` FROM `products` AS `product` ] ~ MODPATH/mysqli/classes/Database/Mysqli.php [ 174 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 11:19:39 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `product...', 'Model_Product', Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/application/classes/Model/catalog.php(11): Kohana_ORM->find_all()
#4 /var/www/application/classes/Controller/Catalog.php(9): Model_Catalog->get_sorted_products()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 11:20:18 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'uawc.products' doesn't exist [ SELECT `product`.`id` AS `id`, `product`.`title` AS `title`, `product`.`description` AS `description`, `product`.`logo` AS `logo`, `product`.`blogo` AS `blogo`, `product`.`price` AS `price`, `product`.`articul` AS `articul` FROM `products` AS `product` ] ~ MODPATH/mysqli/classes/Database/Mysqli.php [ 174 ] in /var/www/modules/database/classes/Kohana/Database/Query.php:251
2014-11-02 11:20:18 --- DEBUG: #0 /var/www/modules/database/classes/Kohana/Database/Query.php(251): Database_MySQLi->query(1, 'SELECT `product...', 'Model_Product', Array)
#1 /var/www/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 /var/www/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/application/classes/Model/catalog.php(11): Kohana_ORM->find_all()
#4 /var/www/application/classes/Controller/Catalog.php(9): Model_Catalog->get_sorted_products()
#5 /var/www/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#8 /var/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/modules/database/classes/Kohana/Database/Query.php:251