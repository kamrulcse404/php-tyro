<?php

$a = true;
$b = false;
$c = 0;
$d = 1;

echo (is_bool($a) ? "True" : "false")."<br>";
echo (is_bool($b) ? "True" : "false")."<br>";
echo (is_bool($c) ? "True" : "false")."<br>";
echo (is_bool($d) ? "True" : "false")."<br>";

if (is_bool($a)) {
    echo "this is boolean <br>";
}

if (!is_bool($c)) {
    echo "This is not boolean";
}