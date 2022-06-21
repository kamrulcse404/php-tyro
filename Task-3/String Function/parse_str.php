<?php

$str = "first=value&arr[]=foo+bar&arr[]=baz";

// Recommended
parse_str($str, $output);
echo "<br>";
echo $output['first'];  // value
echo "<br>";

echo $output['arr'][0]; // foo bar
echo "<br>";

echo $output['arr'][1]; // baz