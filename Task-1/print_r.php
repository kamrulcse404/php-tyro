<?php

$var = 12;
$a = NULL;

print_r($var)."<br>";
echo "<br>";

$var1 = print_r($a);
$var2 = print_r($var);

echo "<br>";

echo $var1;
echo "<br>";
echo $var2;
echo "<br>";


$arr = array(1, 2, 3, array("red", "blue"));

print_r($arr);
echo "<br>";
print_r($arr[0]);



