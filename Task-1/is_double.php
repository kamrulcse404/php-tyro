<?php

echo "32:   " .(is_double(32) ? "true" : "false") ."<br>";
echo "0:   " .(is_double(0) ? "true" : "false") ."<br>";
echo "12.5:   " .(is_double(12.5) ? "true" : "false") ."<br>";
echo "'32':   " .(is_double("32") ? "true" : "false") ."<br>";
echo "true:   " .(is_double(true) ? "true" : "false") ."<br>";
echo "NULL:   " .(is_double(NULL) ? "true" : "false") ."<br>";
echo "'null':   " .(is_double("null") ? "true" : "false") ."<br>";
echo "1.e3:   " .(is_double(1.e3) ? "true" : "false") ."<br>";

