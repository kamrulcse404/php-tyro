<?php

function myfunction($a,$b)
{
    if ($a===$b)
    {
    return 0;
    }
    return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"green","d"=>"blue");
$a3=array("e"=>"yellow","a"=>"red","d"=>"blue");

$result=array_diff_uassoc($a1,$a2,$a3,"myfunction");
print_r($result);