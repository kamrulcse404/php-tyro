<?php

// get_resource_id — Returns an integer identifier for the given resource
// This function provides a type-safe way for generating the integer identifier for a resource.


$res = fopen("get_resource_id.txt", "r");

echo get_resource_id($res);
echo "<br>";

fclose($res);

echo get_resource_id($res);
echo "<br>";
