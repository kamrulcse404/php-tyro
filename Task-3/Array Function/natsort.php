<?php

$temp_files = array("temp15.txt","temp10.txt",
"temp1.txt","temp22.txt","temp2.txt");

sort($temp_files);
echo "Standard sorting: ";
print_r($temp_files);
echo "<br>";

natsort($temp_files);
echo "Natural order: ";
print_r($temp_files);