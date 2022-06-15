<?php
// get_resource_type — Returns the resource type

$res = fopen("get_resource_type.txt", "r") or die("Unable to open");

echo get_resource_type($res);
echo "<br>";


$res = fopen("get_resource_type.txt", "a") or die("Unable to open");
echo get_resource_type($res);
echo "<br>";

$res = fopen("get_resource_type.txt", "w") or die("Unable to open");
echo get_resource_type($res);
echo "<br>";

fclose($res);

