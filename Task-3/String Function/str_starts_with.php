<?php

$name = 'Saurabh Singh';
$beginsWith = 'S';
  
$result = str_starts_with($name, $beginsWith) ? 'is' : 'is not';
  
echo "The string \"$name\" $result starting with $beginsWith";