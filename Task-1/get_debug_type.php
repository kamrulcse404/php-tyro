
<?php

echo get_debug_type(null). "<br>";
echo get_debug_type(true). "<br>";
echo get_debug_type(1). "<br>";
echo get_debug_type(1.1). "<br>";
echo get_debug_type("string"). "<br>";
echo get_debug_type([]). "<br>";
echo get_debug_type(new stdClass). "<br>"; //stdClass
echo get_debug_type(new class {}). "<br>"; //anonymous class


echo get_debug_type(__FILE__). "<br>";
$f = fopen(__FILE__, 'rb');             //non text file for 'rb';
echo get_debug_type($f). "<br>";
fclose($f);
echo get_debug_type($f). "<br>";