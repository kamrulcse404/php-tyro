<?php

//Get the boolean value of a variable

echo "0:        ".(boolval(0) ? "true" : "false"). "<br>";
echo "42:        ".(boolval(42) ? "true" : "false"). "<br>";
echo "0.0:      ".(boolval(0.0) ? "true" : "false"). "<br>";
echo "4.2:      ".(boolval(4.2) ? "true" : "false"). "<br>";


echo '" ":       '.(boolval(" ") ? "true" : "false"). "<br>"; //string with whitespace
echo '"":       '.(boolval("") ? "true" : "false"). "<br>";     //empty string
echo '"string": '.(boolval("string") ? "true" : "false"). "<br>";//string with value


echo '"0":      '.(boolval("0") ? "true" : "false"). "<br>";
echo '"1":      '.(boolval("1") ? "true" : "false"). "<br>";
echo "[1, 2]:       ".(boolval([1, 2]) ? "true" : "false"). "<br>";//array
echo "[]:       ".(boolval([]) ? "true" : "false"). "<br>";         //array
echo "stdClass:     ".(boolval(new stdClass) ? "true" : "false"). "<br>"; // Object