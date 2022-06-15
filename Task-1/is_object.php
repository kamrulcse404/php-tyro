<?php

$human = new stdClass();

$human -> name = "Kamrul";
$human -> age = 90;
$human -> result = 2.2;

if (is_object($human)) {
    echo "human is Object";
    echo "<br>";
}else{
    echo "Human is not an Object";
    echo "<br>";
}

// echo $human->name;

echo "12:   ".(is_object(12) ? "Object" : "Not an Object") ."<br>";
echo "1.2:   ".(is_object(1.2) ? "Object" : "Not an Object") ."<br>";
echo "null:   ".(is_object(null) ? "Object" : "Not an Object") ."<br>";
echo "NULL:   ".(is_object(NULL) ? "Object" : "Not an Object") ."<br>";
echo "string:   ".(is_object("string") ? "Object" : "Not an Object") ."<br>";

echo "array():   ".(is_object(array()) ? "Object" : "Not an Object") ."<br>";
echo "new stdClass:   ".(is_object(new stdClass) ? "Object" : "Not an Object") ."<br>";
echo "[]:   ".(is_object([]) ? "Object" : "Not an Object") ."<br>";
