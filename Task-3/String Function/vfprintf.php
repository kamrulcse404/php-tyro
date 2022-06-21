<?php

$number = 9;
$str = "Beijing";
$file = fopen("vfprintf.txt","w");
echo vfprintf($file,"There are %u million bicycles in %s.",array($number,$str));