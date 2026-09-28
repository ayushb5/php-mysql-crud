<?php
include "config.php";
$id = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM employees where id=$id");
$employee = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Edit Employee</h1>
        <div class="d-flex justify-content-center align-items-center">
            <form class="w-75" action="action.php?id=<?= $employee['id'] ?>" method="post">
                <div class="mb-2">
                    <input type="text" name="name" value="<?= $employee['name'] ?>" placeholder="Name"
                        class="form-control border border-black" required>
                </div>
                <div class="mb-2">
                    <input type="email" name="email" value="<?= $employee['email'] ?>" placeholder="Email"
                        class="form-control border border-black" required>
                </div>
                <div class="mb-2">
                    <input type="text" name="department" value="<?= $employee['department'] ?>" placeholder="Department"
                        class="form-control border border-black" required>
                </div>
                <div class="mb-2">
                    <input type="number" name="salary" value="<?= $employee['salary'] ?>" placeholder="Salary"
                        class="form-control border border-black" required>
                </div>
                <div class="text-end gap-2">
                    <button type="submit" name="update" class="btn btn-success">Update</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>