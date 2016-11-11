<?php

require_once ("vendor/autoload.php");

$a = Leonard::getInstance();
$b = Leonard::getInstance();

var_dump($a);
var_dump($b);

var_dump($a == $b);
var_dump($a === $b);