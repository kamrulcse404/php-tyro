<?php


$var = "Hello";

echo (is_iterable($var) ? "Iterable" : "Not Iterable") . "<br>"; //Not Iterable why? this is also character array;

$var = array("kamrul", "hasan", "sayem", "hello");
echo (is_iterable($var) ? "Iterable" : "Not Iterable") . "<br>";

$var = [1, 2, 3, 4];
echo (is_iterable($var) ? "Iterable" : "Not Iterable") . "<br>";

$var = array("name" => "Kamrul", "age" => "45", "education" => "BSc");
echo (is_iterable($var) ? "Iterable" : "Not Iterable") . "<br>";


echo (is_iterable(12) ? "Iterable" : "Not Iterable") . "<br>";
echo (is_iterable(12.5) ? "Iterable" : "Not Iterable") . "<br>";
echo (is_iterable(new stdClass) ? "Iterable" : "Not Iterable") . "<br>";
echo (is_iterable(new ArrayIterator([1, 2, 3])) ? "Iterable" : "Not Iterable") . "<br>";

echo (is_iterable(function(){return false;}) ? "Iterable" : "Not Iterable") . "<br>";









