<?php

$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);

echo "<br>";

$input = array("a" => 1, "b" => 1, "c" => 2);
$flipped = array_flip($input);
print_r($flipped);