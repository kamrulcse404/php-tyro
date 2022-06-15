<?php

echo "21:   " .(is_integer(21) ? "true" : "false") ."<br>";

echo "0:   " .(is_integer(0) ? "true" : "false") ."<br>";

echo "'12':   " .(is_integer("12") ? "true" : "false") ."<br>";

echo "true:   " .(is_integer(true) ? "true" : "false") ."<br>";

echo "'string':   " .(is_integer("string") ? "true" : "false") ."<br>";

echo "NULL:   " .(is_integer(NULL) ? "true" : "false") ."<br>";

echo "'null':   " .(is_integer("null") ? "true" : "false") ."<br>";

echo "<br>";
echo "<br>";
echo "<br>";

$var = array(23, "23", 23.5, "23.5", NULL, 0.1, 0, "string", true, false);

foreach ($var as $value) {
    echo $value." : ".is_integer($value);
    echo "<br>";
}