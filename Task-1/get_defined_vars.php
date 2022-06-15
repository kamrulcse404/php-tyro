<?php

// Returns an array of all defined variables

$var = array(1, 2, 3, 4);

$res = get_defined_vars();

print_r($res);

echo "<br>";

$var = array("red", "green", "blue");

$var = get_defined_vars();

print_r($var);

// do't understand the proper use of get_defined_vars;