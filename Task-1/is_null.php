<?php

echo "12:   ".(is_null(12) ? "true" : "false") ."<br>";
echo "12.32:   ".(is_null(12.32) ? "true" : "false") ."<br>";
echo "0:   ".(is_null(0) ? "true" : "false") ."<br>";
echo "1:   ".(is_null(1) ? "true" : "false") ."<br>";
echo "0.1:   ".(is_null(0.1) ? "true" : "false") ."<br>";
echo "'string':   ".(is_null("string") ? "true" : "false") ."<br>";
echo "'NULL':   ".(is_null("NULL") ? "true" : "false") ."<br>";
echo "NULL:   ".(is_null(NULL) ? "true" : "false") ."<br>";
echo "null:   ".(is_null(null) ? "true" : "false") ."<br>";
echo "array():   ".(is_null(array()) ? "true" : "false") ."<br>";
echo "new stdClass:   ".(is_null(new stdClass) ? "true" : "false") ."<br>";

