<?php

$var = array("Kamrul", 12, 2.34, null, new stdClass);

echo is_array($var) ? "Array" : "Not Array";
echo "<br>";

$string = "Md Kamrul Hasan";

echo is_array($string) ? "Array" : "Not Array";
