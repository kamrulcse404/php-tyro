<?php

function myfunction($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a1=array("a"=>"red","b"=>"green");
$a2=array($a1,"1"=>"blue","2"=>"yellow");
array_walk_recursive($a2,"myfunction");