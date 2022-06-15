<?php

echo "12:   ".(is_resource(12) ? "resource" : "not resource"). "<br>";
echo "NULL:   ".(is_resource(NULL) ? "resource" : "not resource"). "<br>";
echo "'Hello':   ".(is_resource("Hello") ? "resource" : "not resource"). "<br>";

$var = 12;
echo "12:   ".(is_resource($var) ? "resource" : "not resource"). "<br>";


$res = fopen("text.txt", "r") or die("Unable to open file");

if (is_resource($res)) {
    echo "this is Resource". "<br>";
}else{
    echo "this is not a resource". "<br>";
}

fclose($res);

if (is_resource($res)) {
    echo "this is Resource". "<br>";
}else{
    echo "this is not a resource". "<br>";
}