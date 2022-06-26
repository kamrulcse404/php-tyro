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

// $students = [
//     'name' => 'Palak Mahmud',
//     'age' => 18,
//     'email' => 'palak@email.com',
//     'district' => 'Dhaka'
// ];


// $students = [
//     [
//         'name' => 'Palak Mahmud',
//         'age' => 18,
//         'email' => 'palak@email.com',
//         'district' => 'Dhaka'
//     ],
//     [
//         'name' => 'Kamrul Hasan',
//         'age' => 18,
//         'email' => 'palak@email.com',
//         'district' => 'Dhaka'
//     ]
// ];

foreach ($students as $key => $student) {
    if (is_array($student)) {
        foreach ($student as $k => $value) {
            if (is_array($value)) {
                foreach ($value as $x => $val) {
                    if ($x == 'district' && $val == 'Dhaka') {
                        echo $student['name'] . "<br>";
                    }
                }
            } else {
                if ($k == 'district' && $value == 'Dhaka') {
                    echo $student['name'] . "<br>";
                    break;
                }
            }
        }
    } else {
        if ($students['district'] == 'Dhaka') {
            echo $students['name'] . "<br>";
            break;
        }
    }
}
