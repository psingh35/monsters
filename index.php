<?php

//Require the autoload file
require_once('vendor/autoload.php');

//error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

include ('Monsters.php');
echo 'hello';
//$monster1 = new Monsters("Jhakon");
//$monster3 = new Monsters();
$monster4 = new Monsters();
$monster4->getName();
$monster4->setName("Parminder");
//print_r($monster4);
//echo $monster4;
$monster4->attack();
//$monster4->fetch();

?>