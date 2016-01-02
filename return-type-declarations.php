<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "Class-php7.php";

$php7 = new php7;

#Return type declarations
$presidents = array("George Bush", "Barack Obama");
$candidates = array("Donald Trump", "Ben Carson");

var_dump($php7->ReceiveNames($presidents, $candidates));