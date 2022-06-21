<?php

// str_getcsv — Parse a CSV string into an array

$CSVfp = fopen("str_getcsv.csv", "r");  
if($CSVfp !== FALSE) {  
 while(! feof($CSVfp)) {  
  $data = fgetcsv($CSVfp, 1000, ",");  
  print_r($data);  
 }  
}  
fclose($CSVfp);  