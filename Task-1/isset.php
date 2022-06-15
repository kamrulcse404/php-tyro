<?php

$var;
echo (isset($var) ? "true" : "false") ."<br>"; //false

$var = "";
echo (isset($var) ? "true" : "false") ."<br>";

$var = " ";
echo (isset($var) ? "true" : "false") ."<br>";

$var = null;
echo (isset($var) ? "true" : "false") ."<br>"; //false

$var = NULL;
echo (isset($var) ? "true" : "false") ."<br>"; //false

$var = "NULL";
echo (isset($var) ? "true" : "false") ."<br>";

$var = 12;
echo (isset($var) ? "true" : "false") ."<br>";

$var = "12.23 ";
echo (isset($var) ? "true" : "false") ."<br>";

$var = true;
echo (isset($var) ? "true" : "false") ."<br>";