<?php

echo var_dump(12)."<br>";
echo var_dump(12.123)."<br>";
echo var_dump(0)."<br>";
echo var_dump(0.1)."<br>";
echo var_dump("123")."<br>";
echo var_dump("string")."<br>";
echo var_dump(NULL)."<br>";
echo var_dump(null)."<br>";
echo var_dump(array())."<br>";
echo var_dump([])."<br>";
echo var_dump([1, 2, 3])."<br>";
echo var_dump(new stdClass)."<br>";
echo var_dump(true)."<br>";
echo var_dump(" ")."<br>";
echo var_dump(function(){return false;})."<br>";    //object(Closure)#1 (0) { } why?


