<?php

echo array_is_list([]); // true
echo "<br>";
echo array_is_list(['apple', 2, 3]); // true
echo "<br>";

echo array_is_list([0 => 'apple', 'orange']); // true
echo "<br>";


// The array does not start at 0
echo array_is_list([1 => 'apple', 'orange']); // false
echo "<br>";


// The keys are not in the correct order
echo array_is_list([1 => 'apple', 0 => 'orange']); // false
echo "<br>";
