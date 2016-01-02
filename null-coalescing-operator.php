<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "Class-php7.php";

$php7 = new php7;

var_dump($php7->DetectAge());
