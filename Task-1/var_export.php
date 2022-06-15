<?php

$var = "hello";

// echo $var. "<br>";
// var_dump($var);
// echo "<br>";


var_export($var);
echo "<br>";
var_export(12);
echo "<br>";

$a = array (1, 2, array ("a", "b", "c"));
var_export($a);
echo "<br>";


$obj = new stdClass;
$obj->name = "Kamrul";
$obj->age = 56;

var_export($obj);