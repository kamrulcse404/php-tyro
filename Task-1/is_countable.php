<?php

echo "12:   ".(is_countable(12) ? "countable" : "not countable")."<br>";
echo "array(1, 2, 3):   ".(is_countable(array(1, 2, 3)) ? "countable" : "not countable")."<br>";
echo "[]:   ".(is_countable([]) ? "countable" : "not countable")."<br>";
echo "array():   ".(is_countable(array()) ? "countable" : "not countable")."<br>";
echo "new stdClass:   ".(is_countable(new stdClass) ? "countable" : "not countable")."<br>";
echo "'string':   ".(is_countable("string") ? "countable" : "not countable")."<br>";
