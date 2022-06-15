<?php
 // convert numeric string to numeric
$var = array(
    "42",
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    "0x539",
    "02471",
    "0b10100111001",
    "1337e0",
    "not numeric",
    // array(), //showing error
    9.1,
    null,
    '',
);

foreach ($var as $value) {
    echo $value. " : " .(is_numeric($value) ? "Numeric" : "Not Numeric"). "<br>";
}