<?php 
//config.php
$db_host = "localhost";
$db_name = "phones";
$db_user = "devel";
$db_pass = "112233";
$db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>