<?php
session_start();
include_once "connectdb.php";

if (isset($_POST['delete_student'])) {
    $stdId = $_POST['sId'];

    try {
        $query = "DELETE FROM students WHERE id = :sId";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":sId", $stdId);
        $stmt->execute();

        if ($stmt) {
            $_SESSION['message'] = "Student Deleted Successfully";
            header('Location: index.php');
            exit(0);
        }else {
            $_SESSION['message'] = "Student is not Deleted";
            header('Location: index.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['update_student'])) {
    $stdId = $_POST['sId'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    try {
        $query = "UPDATE students SET first_name = :firstName, last_name = :lastName, email = :email, phone = :phone, course = :course WHERE id =:sId LIMIT 1";
        
        $stmt = $conn->prepare($query);
        $stmt->bindparam(":sId", $stdId);
        $stmt->bindparam(":firstName", $firstName);
        $stmt->bindparam(":lastName", $lastName);
        $stmt->bindparam(":email", $email);
        $stmt->bindparam(":phone", $phone);
        $stmt->bindparam(":course", $course);
        $stmt->execute();

        if ($stmt) {
            $_SESSION['message'] = "Student Updated Successfully";
            header('Location: index.php');
            exit(0);
        }else {
            $_SESSION['message'] = "Student is not Updated";
            header('Location: index.php');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST['save_student'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $query = "INSERT INTO students (first_name, last_name, email, phone, course) VALUES (:firstName, :lastName, :email, :phone, :course)";

    $stmt = $conn->prepare($query); 
    
    $stmt->bindparam(":firstName", $firstName);
    $stmt->bindparam(":lastName", $lastName);
    $stmt->bindparam(":email", $email);
    $stmt->bindparam(":phone", $phone);
    $stmt->bindparam(":course", $course);
    $stmt->execute();

    if ($stmt) {
        $_SESSION['message'] = "Student Record Inserted Successfully";
        header('Location: index.php');
        exit(0);
    }else {
        $_SESSION['message'] = "Student is not Inserted";
        header('Location: index.php');
        exit(0);
    }
}