<?php

echo "42:   " .intval(42)."<br>";
echo "4.2:   " .intval(4.2)."<br>";
echo '"42":     ' .intval("42")."<br>";
echo '"+42":    ' .intval("+42")."<br>";
echo '"-42":    ' .intval("-42")."<br>";
echo "042:      " .intval(042)."<br>";      // why output is 34;
echo "1e10:     " .intval('1e10')."<br>";
echo "1e10:     " .intval(1e10)."<br>";
echo "0x1A:     " .intval(0x1A)."<br>";
echo "42000000:     " .intval(42000000)."<br>";
echo "420000000000000000000:        " .intval(420000000000000000000)."<br>";//why output is -4275113695319687168
echo '"420000000000000000000":      ' .intval("420000000000000000000")."<br>";//why output is 9223372036854775807
echo "42, 8:        " .intval(42, 8)."<br>"; //why output is 42
echo '"42", 8:      ' .intval("42", 8)."<br>"; //why output is 34
echo "array():      ".intval(array())."<br>";
echo "array('foo', 'bar'):      " .intval(array('foo', 'bar')). "<br>"; 
echo "false:       " .intval(false). "<br>";
echo "true:       " .intval(true). "<br>";

