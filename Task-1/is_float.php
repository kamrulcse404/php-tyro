<?php


echo "32:   " .(is_float(32) ? "true" : "false") ."<br>";
echo "0:   " .(is_float(0) ? "true" : "false") ."<br>";
echo "12.5:   " .(is_float(12.5) ? "true" : "false") ."<br>";
echo "'1.3':   " .(is_float("1.3") ? "true" : "false") ."<br>";
echo "0.1:   " .(is_float(0.1) ? "true" : "false") ."<br>";
echo "'32':   " .(is_float("32") ? "true" : "false") ."<br>";
echo "true:   " .(is_float(true) ? "true" : "false") ."<br>";
echo "NULL:   " .(is_float(NULL) ? "true" : "false") ."<br>";
echo "'null':   " .(is_float("null") ? "true" : "false") ."<br>";
echo "1.e3:   " .(is_float(1.e3) ? "true" : "false") ."<br>";
