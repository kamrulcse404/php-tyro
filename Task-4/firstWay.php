<?php


$students = [
    [
        'name' => 'John Doe',
        'age' => 20,
        'email' => 'john.doe@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Dhaka'
        ]
    ],
    [
        'name' => 'Lilly',
        'age' => 19,
        'email' => 'lilly@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Chittagong'
        ]
    ],
    [
        'name' => 'Hasan Ahmed',
        'age' => 19,
        'email' => 'hasan@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Barishal'
        ]

    ],
    [
        'name' => 'Palak Mahmud',
        'age' => 18,
        'email' => 'palak@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Dhaka'
        ]
    ]
];

foreach ($students as $key => $student) {
    foreach ($student as $x => $value) {
        if (is_array($value) && $x == 'address') {
            foreach ($value as $y => $val) {
                if ($y == 'district' && $val == 'Dhaka') {
                    echo $student['name'] ."<br>";
                }
            }
        }
    }
}
