<?php
session_start();
include_once "connectdb.php";

if (isset($_POST['save_student'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $query = "INSERT INTO students (first_name, last_name, email, phone, course) VALUES (:firstName, :lastName, :email, :phone, :course)";

    //=======================================================

    // $stmt = $this->db->prepare("INSERT INTO Admin(admin_user,
    // admin_email,
    // admin_password,
    // admin_departamento,
    // admin_name,
    // admin_lastname,
    // admin_matricula)
    // VALUES(:auser, :aemail, :apass, :adep, :aname, :alast, :agender, :amatricula)");
    // $stmt->bindparam(":auser", $auser);
    // $stmt->bindparam(":aemail", $aemail);
    // $stmt->bindparam(":apass", $apass);
    // $stmt->bindparam(":adep", $adep);
    // $stmt->bindparam(":aname", $aname);
    // $stmt->bindparam(":alast", $alast);
    // $stmt->bindparam(":agender", $agender);
    // $stmt->bindparam(":amatricula", $amatricula);
    // #$stmt->bindparam(":apic", $apic);
    // $stmt->execute();

    //========================================

    $statement = $conn->prepare($query);

    $data = [
        ':firstName' => $firstName,
        ':lastName' => $lastName,
        ':email' => $email,
        ':phone' => $phone,
        ':course' => $course
    ];

    $statement_execute = $statement->execute($data);

    if ($statement_execute) {
        $_SESSION['message'] = "Student Record Inserted Successfully";
        header('Location: index.php');
        exit(0);
    }else {
        $_SESSION['message'] = "Not Inserted";
        header('Location: index.php');
        exit(0);
    }
}