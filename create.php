<?php
    require_once 'db.php';

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $department = $_POST['department'];
        $position = $_POST['position'];
        $allowance = $_POST['allowance'];

        $name = mysqli_real_escape_string($link, $name);
        $address = mysqli_real_escape_string($link, $address);
        $salary = mysqli_real_escape_string($link, $salary);
        $department = mysqli_real_escape_string($link, $department);
        $position = mysqli_real_escape_string($link, $position);
        $allowance = mysqli_real_escape_string($link, $allowance);
        
        $query = "INSERT INTO employees(name, address, salary, department, position, allowance) VALUES('$name', '$address', '$salary', '$department', '$position', '$allowance')";
        
        if(mysqli_query($link, $query)) header('Location: index.php');
        else echo 'gagal';
    }
?>