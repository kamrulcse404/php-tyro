<?php

$var = 12;
echo gettype($var)."<br>";
$var = 3.2;
echo gettype($var)."<br>";
$var = "Hello";
echo gettype($var)."<br>";
$var = array();
echo gettype($var)."<br>";
$var = array(1, 2.4, "sting", null, new stdClass, false);
echo gettype($var)."<br>";

foreach ($var as $value) {
    echo gettype($value)."<br>";
}