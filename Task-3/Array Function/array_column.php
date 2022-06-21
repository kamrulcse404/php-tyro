<?php

$a = [
    [
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ],
    [
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ],
    [
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    ]
];
  
  $last_names = array_column($a, 'last_name');
  print_r($last_names);