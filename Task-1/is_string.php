<?php

echo "'Hello':  ".(is_string("hello") ? "string" : "not a string")."<br>";
echo "23:  ".(is_string(23) ? "string" : "not a string")."<br>";

echo "0:  ".(is_string(0) ? "string" : "not a string")."<br>";
echo "12.21:  ".(is_string(12.21) ? "string" : "not a string")."<br>";
echo "'0':  ".(is_string("0") ? "string" : "not a string")."<br>";
echo "'1':  ".(is_string("1") ? "string" : "not a string")."<br>";
echo "'NULL':  ".(is_string("NULL") ? "string" : "not a string")."<br>";
echo "NULL:  ".(is_string(NULL) ? "string" : "not a string")."<br>";

