<?php

 
$string = 'GFG is awesome';
$endsWith = 'some';

$result = str_ends_with($string, $endsWith) ? 'is' : 'is not';

echo "The string \"$string\" $result ending with $endsWith";