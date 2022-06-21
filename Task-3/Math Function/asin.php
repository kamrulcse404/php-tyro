<?php

$arg = 0.5;
$val = asin($arg);
echo "asin(" . $arg . ") = " . $val . " radians.<br/>";
echo "Pi value = " . pi() . "<br/>";  
echo "asin(" . $arg . ") = " . $val/pi()*180 . " degrees<br/>";

$arg = 1;
$val = asin($arg);
echo "asin(" . $arg . ") = " . $val . " radians.<br/>";
echo "Pi value = " . pi() . "<br/>";  
echo "asin(" . $arg . ") = " . $val/pi()*180 . " degrees<br/>";