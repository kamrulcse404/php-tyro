<?php

// Scalar variables are those containing an int, float, string or bool. Types array, object, resource and null are not scalar.

echo "12:   ".(is_scalar(12) ? "scalar value" : "not a scalar value"). "<br>";
echo "12.12:   ".(is_scalar(12.12) ? "scalar value" : "not a scalar value"). "<br>";

echo "0.1:   ".(is_scalar(0.1) ? "scalar value" : "not a scalar value"). "<br>";

echo "1:   ".(is_scalar(1) ? "scalar value" : "not a scalar value"). "<br>";

echo "0:   ".(is_scalar(0) ? "scalar value" : "not a scalar value"). "<br>";

echo "'123':   ".(is_scalar("123") ? "scalar value" : "not a scalar value"). "<br>";
echo "'string':   ".(is_scalar("string") ? "scalar value" : "not a scalar value"). "<br>";

echo "true:   ".(is_scalar(true) ? "scalar value" : "not a scalar value"). "<br>";

echo "false:   ".(is_scalar(false) ? "scalar value" : "not a scalar value"). "<br>";

echo "[]:   ".(is_scalar([]) ? "scalar value" : "not a scalar value"). "<br>";
echo "array():   ".(is_scalar(array()) ? "scalar value" : "not a scalar value"). "<br>";
echo "array(1, 2, 3):   ".(is_scalar(array(1, 2, 3)) ? "scalar value" : "not a scalar value"). "<br>";
echo "NULL:   ".(is_scalar(NULL) ? "scalar value" : "not a scalar value"). "<br>";
echo "null:   ".(is_scalar(null) ? "scalar value" : "not a scalar value"). "<br>";

echo "null:   ".(is_scalar(new stdClass) ? "scalar value" : "not a scalar value"). "<br>";



