<?php

var_dump(fdiv(5.7, 1.3)); // float(4.384615384615385)
echo "<br>";

var_dump(fdiv(4, 2)); // float(2)
echo "<br>";

var_dump(fdiv(1.0, 0.0)); // float(INF)
echo "<br>";

var_dump(fdiv(-1.0, 0.0)); // float(-INF)
echo "<br>";

var_dump(fdiv(0.0, 0.0)); // float(NAN)
echo "<br>";
