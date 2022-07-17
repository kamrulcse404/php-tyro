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
    require_once "database.php";
    ?>

    <div class="container">
        <section class="basicInfo">
            <?php foreach ($resume as $key => $info) {
                if (!empty($info == 'basicInfo')) {
                    foreach ($info as $k => $value) { ?>
                        <h1><?php $value ?></h1>
            <?php }
                }
            } ?>
        </section>
    </div>
</body>

</html>