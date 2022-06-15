<?php

// is_long — Alias of is_int()

echo "23:   ".(is_long(23) ? "true" : "false")."<br>";
echo "1:   ".(is_long(1) ? "true" : "false")."<br>";
echo "1:   ".(is_long(0) ? "true" : "false")."<br>";
echo "'12':   ".(is_long("12") ? "true" : "false")."<br>";
echo "12.12:   ".(is_long(12.12) ? "true" : "false")."<br>";
echo "'string':   ".(is_long("string") ? "true" : "false")."<br>";
echo "false:   ".(is_long(false) ? "true" : "false")."<br>";
echo "NULL:   ".(is_long(NULL) ? "true" : "false")."<br>";
echo "null:   ".(is_long(null) ? "true" : "false")."<br>";
echo "[]:   ".(is_long([]) ? "true" : "false")."<br>";
echo "array():   ".(is_long(array()) ? "true" : "false")."<br>";
echo "array(1, 2, 3):   ".(is_long(array(1, 2, 3)) ? "true" : "false")."<br>";
echo "new stdClass:   ".(is_long(new stdClass) ? "true" : "false")."<br>";

