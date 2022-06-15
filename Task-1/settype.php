<?php

$var = 12;
settype($var, "double");
echo gettype($var)."<br>";


$var = 12.21;
settype($var, "integer");
echo gettype($var)."<br>";


$var = 12;
settype($var, "string");
echo gettype($var)."<br>";


$var = "hello";
settype($var, "boolean");
echo gettype($var)."<br>";


$var = null;
settype($var, "integer");
echo gettype($var)."<br>";

// var_dump($var);


$var = 12.32;
settype($var, "Object");
echo gettype($var)."<br>";
// var_dump($var);

$var = false;
settype($var, "double");
echo gettype($var)."<br>";
// var_dump($var);



$var = true;
settype($var, "double");
echo gettype($var)."<br>";
// var_dump($var);