<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    $resume = [
        "basicInfo" => [
            "name" => "Md Kamrul Hasan",
            "address" => "Bibir-Bagicha, Jatrabari, Dhaka-1232",
            "email" => "kamrul.h01960@gmail.com",
            "github" => "https://github.com/kamrulcse404",
            "mobile" => "+880 1634-845293",
            "img" => "img/kamrul.jpg"
        ],

        "careerObjective" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minus! Quo ut dolor obcaecati debitis.",

        "presentStatus" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minus! Quo ut dolor obcaecati debitis.",

        "education" => [
            "bsc" => [
                "BSc in CSE",
                "Dhaka",
                "2020",
                "Daffodil International University",
                3.20
            ],

            "hsc" => [
                "HSC",
                "Dhaka",
                "2014",
                "Dhaka Imperial College",
                5.00
            ],

            "ssc" => [
                "SSC",
                "Cumilla",
                "2012",
                "Fatehpur K.G High School",
                4.56
            ],
        ],

        "computerSkills" => [
            "programmingLanguage" => "C, C++, C#, PHP, JavaScript",
            "webBased" => "Html, CSS, Bootstrap",
            "database" => "MySql",
            "scripting" => "PHP, javaScript",
            "developmentTools" => "git, gitHub, CodeBlock, Visual Studio Code, Visual Studio",
            "others" => "....."
        ],

        "professionalExperience" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, minus! Quo ut dolor obcaecati debitis.",

        "projects" => [
            [
                "title" => "Project 1",
                "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, cupiditate?",
                "link" => "https://github.com/kamrulcse404"
            ],

            [
                "title" => "Project 2",
                "description" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, cupiditate?",
                "link" => "https://github.com/kamrulcse404"
            ]
        ],

        "achivements" => [
            [
                "title" => "abc programming contest 212",
                "rank" => "***"
            ],
            [
                "title" => "xyz programming contest 212",
                "rank" => "***"
            ]
        ],

        "language" => [
            "Bangla",
            "English"
        ],

        "personalInfo" => [
            "fullName" => "Md Kamrul Hasan",
            "fatherName" => "Abdur Rauf",
            "motherName" => "Juhera Begum",
            "dob" => "***",
            "sex" => "Male",
            "maritalStatus" => "Single",
            "nationality" => "Bangladeshi",
            "religion" => "Islam",
            "bloodGroup" => "A+"
        ],

        "habbies" => [
            "Travelling",
            "Gardening"
        ],

        "games" => [
            "Palying Card",
            "Chess",
            "Cricket"
        ],

        "reference" => [
            [
                "name" => "Mr. XYZ",
                "address" => "Jatrabari",
                "email" => "xyz@gmail.com",
                "mobile" => "017********"
            ],

            [
                "name" => "Mr. ABC",
                "address" => "Malibag",
                "email" => "abc@gmail.com",
                "mobile" => "016********"
            ]
        ],

        "footer" => "Md Kamrul Hasan"
    ];

    echo '<div class="container">';
    foreach ($resume as $key => $value) {
        if ($key == 'basicInfo' && is_array($value)) {
            foreach ($value as $info => $val) {
                echo '<div class="info">';
                    echo '<div class="left">';
                    if ($info == "name") {
                        echo '<h2>'.$val.'</h2>';
                    }else if($info != 'img'){
                        echo '<h4>'.ucfirst($info)." : ".$val.'</h4>';
                    }
                    echo '</div>';
                    echo '<div class="right">';
                    if ($info == 'img') {
                        echo '<img src="' . $val . '" alt="profile" " />';
                    }
                    echo '</div>';
                echo '</div>';
            }
        }
        if ($key == 'careerObjective') {
            echo '<div class="objective">';
                echo '<h2>Career Objective</h2>';
                echo '<hr>';
                echo '<h4>'.$value.'</h4>';
            echo '</div>';
        }

        if ($key == 'presentStatus') {
            echo '<div class="objective">';
                echo '<h2>Present Status</h2>';
                echo '<hr>';
                echo '<h4>'.$value.'</h4>';
            echo '</div>';
        }

        if ($key == 'education' && is_array($value)) {
            echo '<h2>Education</h2>';
            echo '<hr>';
            echo '<table class = "education">';
                echo '<tr>';
                    echo '<th>Exam</th>';
                    echo '<th>Board/University</th>';
                    echo '<th>Year</th>';
                    echo '<th>Name of Institution</th>';
                    echo '<th>Marks</th>';
                echo '</tr>';
                foreach ($value as $e => $val) {
                    echo '<tr>';
                    if (is_array($val)) {
                        foreach ($val as $ed => $edVal) {
                            echo '<td>'.$edVal.'</td>';                          
                        }
                    }
                    echo '</tr>';
                }
            echo '</table>';
        }

        if ($key == 'computerSkills' && is_array($value)) {
            echo '<h2>Computer Skills</h2>';
            echo '<hr>';
            echo '<table>';
            foreach ($value as $k => $val) {
                echo '<tr>';
                    echo '<th>'.ucfirst($k).' : '.'</th>';
                    echo '<td>'.$val.'</td>';
                echo '</tr>';
            }
            echo '</table>';
        }

        if ($key == 'professionalExperience') {
            echo '<h2>Computer Skills</h2>';
            echo '<hr>';
            echo '<h4>'.$value.'</h4>';
        }

        if ($key == 'projects' && is_array($value)) {
            echo '<h2>Projects</h2>';
            echo '<hr>';
                foreach ($value as $p => $val) {
                    echo '<ul>';
                    if (is_array($val)) {
                        foreach ($val as $pro => $Provalue) {
                            echo '<li><b>'.ucfirst($pro).'</b></li>';
                            echo '<ul>';
                                echo '<li>'.$Provalue.'</li>';
                            echo '</ul>';
                        }
                    }
                    echo '</ul>';
                }
        }


        if ($key == 'achivements' && is_array($value)) {
            echo '<h2>Achivements</h2>';
            echo '<hr>';
                foreach ($value as $a => $val) {
                    echo '<ul>';
                    if (is_array($val)) {
                        foreach ($val as $ac => $Achvalue) {
                            echo '<li><b>'.ucfirst($ac).'</b></li>';
                            echo '<ul>';
                                echo '<li>'.$Achvalue.'</li>';
                            echo '</ul>';
                        }
                    }
                    echo '</ul>';
                }
        }

        if ($key == 'language') {
            echo '<h2>Achivements</h2>';
            echo '<hr>';
            echo '<ul>'; 
            foreach ($value as $k => $val) {
                echo '<li>'.$val.'</li>';
            }
            echo '</ul>';
        }

        if ($key == 'personalInfo') {
            echo '<h2>Personal Information</h2>';
            echo '<hr>';
            echo '<table>';
            foreach ($value as $p => $val) {
                echo '<tr>';
                    echo '<th>'.ucfirst($p).' : '.'</th>';
                    echo '<td>'.$val.'</td>';
                echo '</tr>';
            }
            echo '</table>';
        }

        
        if ($key == 'habbies') {
            echo '<h2>Habbies</h2>';
            echo '<hr>';
            echo '<ul>'; 
            foreach ($value as $k => $val) {
                echo '<li>'.$val.'</li>';
            }
            echo '</ul>';
        }

        if ($key == 'games') {
            echo '<h2>Games</h2>';
            echo '<hr>';
            echo '<ul>'; 
            foreach ($value as $k => $val) {
                echo '<li>'.$val.'</li>';
            }
            echo '</ul>';
        }

        if ($key == 'reference' && is_array($value)) {
            echo '<h2>Reference</h2>';
            echo '<hr>';
                foreach ($value as $r => $val) {
                    if (is_array($val)) {
                        foreach ($val as $ref => $refVal) {  
                            if ($ref == 'name') {
                                echo '<h4>'.ucfirst($ref).' : '.$refVal.'</h4>';
                            }else {
                                echo '<p>'.ucfirst($ref).' : '.$refVal.'</p>';
                            }            
                        }
                    }
                }
        }

    }
    echo '<div\>';

    ?>

</body>

</html>