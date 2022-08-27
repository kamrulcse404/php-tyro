<?php
include_once "connectdb.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Update Student</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3 style="color: #405e48;">Edit Student</h3>
                    </div>

                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $stdId = $_GET['id'];
                            $query = "SELECT * FROM students WHERE id = :sId LIMIT 1";
                            $stmt = $conn->prepare($query);
                            $stmt->bindParam(":sId", $stdId);
                            $stmt->execute();

                            $student = $stmt->fetch(PDO::FETCH_OBJ);
                        }
                        ?>

                        <form action="code.php" method="post">
                            <input type="hidden" name="sId" value="<?= $student->id?>"/>
                            <div class="mb-3">
                                <label>First Name</label>
                                <input type="text" name="firstName" value="<?= $student->first_name?>" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Last Name</label>
                                <input type="text" name="lastName" value="<?= $student->last_name?>" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" value="<?= $student->email?>" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" value="<?= $student->phone?>" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text" name="course" value="<?= $student->course?>" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="update_student" class="btn btn-success">Update Student</button>
                                <a href="index.php" class="btn btn-primary float-end">BACK</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>