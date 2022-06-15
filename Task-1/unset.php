<?php

$var = "php world";

echo "Before using unset() function <br>";
echo "Hello ".$var."<br>";

unset($var);

echo "After using unset() function <br>";
echo "Hello ".$var."<br>";

function destroy_foo() 
{
    global $foo;
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;

function foo() 
{
    unset($GLOBALS['bar']);
}

$bar = "something";
foo();
echo $bar;


function fo(&$bar) 
{
    unset($bar);
    $bar = "blah";
}

$bar = 'something';
echo "$bar<br>";

fo($bar);
echo "$bar<br>";