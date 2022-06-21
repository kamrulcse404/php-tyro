<?php

$string_to_decode = "\x63";
 
// Encoding string
echo utf8_encode($string_to_decode) ."<br>";
 
// Encoding string
echo utf8_decode($string_to_decode);