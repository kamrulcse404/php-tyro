<?php

$number = 9;
$str = "Beijing";
$file = fopen("fprintf.txt","w");
echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);

fclose(fprintf.txt);