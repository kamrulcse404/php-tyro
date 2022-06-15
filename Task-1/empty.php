<?php

$name = $_GET['name'];

if (empty($_GET['name'])) {
    echo "empty value";
}else{
    echo $name;
}
