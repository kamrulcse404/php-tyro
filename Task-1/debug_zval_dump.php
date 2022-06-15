<?php

//Dumps a string representation of an internal zval structure to output

$var = "Hello";

echo (debug_zval_dump($var))."<br>";

$var .= " World";

echo (debug_zval_dump($var)). "<br>";       //string(11) "Hello World" refcount(2)

$var = "Hello";
$var .= " PHP ";
$var .= "World";

echo (debug_zval_dump($var)). "<br>"; //string(15) "Hello PHP World" refcount(2) Why refcount(2)

$var1 = &$var;
echo (debug_zval_dump($var1)). "<br>";
