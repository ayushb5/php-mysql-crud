<?php
include "config.php";

$query = mysqli_query($conn, "SELECT * from employees");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container w-75">
        <h1 class="text-center">Employee CRUD Operations (PHP)</h1>
        <br>
        <div class="d-flex justify-content-end">
            <a href="add.php" class="btn btn-primary">Add Employee</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($emp = mysqli_fetch_assoc($query)): ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $emp['name'] ?></td>
                        <td><?= $emp['email'] ?></td>
                        <td><?= $emp['department'] ?></td>
                        <td><?= $emp['salary'] ?></td>
                        <td class="d-flex align-items-center gap-3">
                            <a href="edit.php?id=<?= $emp['id'] ?>" class="btn btn-sm btn-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="action.php?id=<?= $emp['id'] ?>"
                                onclick="return confirm('Are you sure you want to delete this record?')"
                                class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>