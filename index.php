<?php
require_once "Class-php7.php";

$php7 = new php7;

#Scalar type declarations
//var_dump( $php7->SumAge( 30, 50 ) );

#Return type declarations
$presidents = array("George Bush", "Barack Obama");
$candidates = array("Donald Trump", "Ben Carson");

//var_dump($php7->ReceiveNames($presidents, $candidates));

var_dump($php7->DetectAge());
