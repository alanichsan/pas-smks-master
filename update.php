<?php
    require_once 'db.php';

    if(isset($_POST['submit'])) {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $department = $_POST['department'];
        $position = $_POST['position'];
        $allowance = $_POST['allowance'];

        $id = mysqli_real_escape_string($link, $id);
        $name = mysqli_real_escape_string($link, $name);
        $address = mysqli_real_escape_string($link, $address);
        $salary = mysqli_real_escape_string($link, $salary);
        $department = mysqli_real_escape_string($link, $department);
        $position = mysqli_real_escape_string($link, $position);
        $allowance = mysqli_real_escape_string($link, $allowance);
        
        $query = "UPDATE employees SET name = '$name', address = '$address', salary = '$salary', department = '$department', position = '$position', allowance = '$allowance' WHERE id = '$id'";
        
        if(mysqli_query($link, $query)) header('Location: index.php');
        else echo 'gagal';
    }
?>