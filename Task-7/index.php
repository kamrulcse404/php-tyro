<?php
include_once "connectdb.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Student Details</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">

                <?php if (isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?php echo $_SESSION['message']; ?></h5>
                <?php
                    unset($_SESSION['message']);
                endif;
                ?>

                <div class="card">
                    <div class="card-header">
                        <h3 style="color: #405e48;">Students Details
                            <a href="addStudent.php" class="btn btn-primary float-end">Add Student</a>
                        </h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "SELECT * FROM students";
                                $stmt = $conn->prepare($query);
                                $stmt->execute();
                                $students = $stmt->fetchAll(PDO::FETCH_OBJ);
                                if ($students) {
                                    foreach ($students as $student) {
                                ?>
                                        <tr>
                                            <td><?php echo $student->id;?></td>
                                            <td><?php echo $student->first_name;?></td>
                                            <td><?php echo $student->last_name;?></td>
                                            <td><?php echo $student->email;?></td>
                                            <td><?php echo $student->phone;?></td>
                                            <td><?php echo $student->course;?></td>
                                            <td>
                                            <a href="updateStudent.php?id=<?= $student->id; ?>" class="btn btn-primary">Edit</a>
                                            <a href="deleteStudent.php?id=<?= $student->id; ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="7">No Record Found</td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>