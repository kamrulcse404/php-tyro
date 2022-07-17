<?php

// The crc32() function calculates a 32-bit CRC (cyclic redundancy checksum) for a string.

// This function can be used to validate data integrity.

// Tip: To ensure that you get the correct string representation from the crc32() function, you'll need to use the %u formatter of the printf() or sprintf() function. If the %u formatter is not used, the result may display in incorrect and negative numbers.


$str = crc32("Hello World!");
printf("%u\n",$str);