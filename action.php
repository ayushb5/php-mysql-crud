<?php
include "config.php";

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    mysqli_query($conn, "INSERT INTO employees(name,email,department,salary) VALUES('$name','$email','$department','$salary')");
    header("Location: index.php");
    exit;
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    mysqli_query($conn, "UPDATE employees SET name='$name',email='$email',department='$department',salary='$salary' WHERE id=$id");
    header("Location: index.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_query($conn, "DELETE FROM employees WHERE id=$id");
    header("Location: index.php");
    exit;
}
?>