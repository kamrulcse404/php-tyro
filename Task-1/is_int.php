
<?php

echo "21:   " .(is_int(21) ? "true" : "false") ."<br>";

echo "0:   " .(is_int(0) ? "true" : "false") ."<br>";

echo "'12':   " .(is_int("12") ? "true" : "false") ."<br>";

echo "true:   " .(is_int(true) ? "true" : "false") ."<br>";

echo "'string':   " .(is_int("string") ? "true" : "false") ."<br>";

echo "NULL:   " .(is_int(NULL) ? "true" : "false") ."<br>";

echo "'null':   " .(is_int("null") ? "true" : "false") ."<br>";

$var = array(23, "23", 23.5, "23.5", null, 0.1, 0, "string", true, false);

foreach ($var as $value) {
    echo $value." : ".is_int($value);
    echo "<br>";
}