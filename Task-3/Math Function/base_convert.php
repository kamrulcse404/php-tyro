<?php

$hex = "E196";
echo base_convert($hex,16,8) ."<br>";

$val = "2";
echo base_convert($val, 10, 2) ."<br>";

$oct = "0031";
echo base_convert($oct,8,10)."<br>";

$oct = "364";
echo base_convert($oct,8,16)."<br>";

$oct = "f4";
echo base_convert($oct,8,8)."<br>";