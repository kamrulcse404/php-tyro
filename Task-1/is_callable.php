<?php

function test(){

}

if (is_callable("test")) {
    echo "Callable"."<br>";
}

if (is_callable("test1")) {
    echo "Callable"."<br>";
}else{
    echo "Not callable". "<br>";
}

class human{
    function name(){

    }
}


if (is_callable("name")) {
    echo "Callable"."<br>";
}else{
    echo "Not callable". "<br>";
}

