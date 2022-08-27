<?php 

require_once ("config.php");

$dsn = "mysql:host=$host;dbname=$database;charset=UTF8";

try {
    $conn = new PDO($dsn, $user, $password);
    // if ($conn) {
    //     echo "Connected Successfully";
    // }
} catch (PDOException $e) {
    echo "Connection Failed ".$e->getMessage();
}