<?php

$sentence = 'GFG is Awesome';
$word = 'GFG';
 
$result = str_contains($sentence, $word) ? 'is' : 'is not';
 
echo "The word {$word} {$result} present in the sentence \"{$sentence}\"";