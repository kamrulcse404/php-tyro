<?php

$data = serialize(array(3, 2, 1, array("Red", "Green", "Blue")));
echo $data . "<br>";

$test = unserialize($data);
var_dump($test);
echo "<br>";

$data = serialize(array(3, 2, 1, array("Red", "Green", "Blue")));
// echo $data . "<br>";

// $test = unserialize($data);
var_dump (unserialize($data));