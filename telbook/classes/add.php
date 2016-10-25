<?php
ini_set('display_errors', 1);
$host='localhost';
$user='devel';
$pass='112233';
$db='phones';
$charset='utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
global $pdo;
$pdo = new PDO($dsn, $user, $pass, $opt);

if (empty($_POST['name']) && empty($_POST['org']) && empty($_POST['tel']))
{
echo "Не введенны все данные";
}
else
{
if (!to_filter($_POST['name'])) {
echo "Не корректное имя</br>";
die();
}
if (!to_filter($_POST['org']))
{
echo "Не корерктно введена организация</br>";
die();
}
$data=array($_POST['name'],$_POST['org'],$_POST['tel']);
to_base($data);
}

function to_base($data)
{
global $pdo;
try {
$place_holders = implode(',', array_fill(0, count($data), '?'));
$stmt=$pdo->prepare("INSERT INTO names (name,organization,tel) VALUE ($place_holders)");
$stmt->execute($data);
} catch (PDOException $e) {
    if ($e->getCode() == 1062) {
        // Take some action if there is a key constraint violation, i.e. duplicate name
} else
{
throw $e;
}
}
}
function to_filter($data)
{
 if(!preg_match("/[А-][а-я]+$/D",$data))
        {
         return false;
        }
        else {
        	return true;
        }

 if(strlen($data) < "2")
        {
        	return false;
        }
        else
        {
        	return true;
        }
        if(strlen($data) > "100")
        {
            return false;
        } 
else {
	return true;

}
}

