<?php
ini_set('display_errors', '1');
include ('includes/init.php');
$registry = new Registry();
$db = new PDO('mysql:host=localhost;dbname=zeng', 'devel', '112233');
$registry->set ('db', $db);
$template = new Template($registry);
$registry->set ('template', $template);
$router = new Router($registry);
$registry->set ('router', $router);
$router->setPath (site_path . 'controllers');
$router->delegate();


?>