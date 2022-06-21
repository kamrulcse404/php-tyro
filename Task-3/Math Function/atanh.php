<?php

// Parameters: This function accepts a single parameter $value. It is the number whose inverse hyperbolic tangent value you want to find. The value of this parameter must be in radians.

// Return Value: It returns a floating point number which is the inverse hyperbolic tangent value of a number passed to it as argument.

echo (atanh(0.50)) ."<br>";
echo (atanh(-0.50)) ."<br>";
echo (atanh(1)) ."<br>";

// When (M_PI_4) is passed as a parameter, M_PI_4 is a constant in PHP and it’s value is
//  0.78539816339744830962:

echo (atanh(M_PI_4)) ."<br>";


