<?php
    require_once 'db.php';

    $id = $_GET['id'];

    $id = mysqli_real_escape_string($link, $id);
    
    $query = "DELETE FROM employees WHERE id = $id";
    
    if(mysqli_query($link, $query)) header('Location: index.php');
    else echo 'gagal';
?>