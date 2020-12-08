<?php 
    require_once 'db.php';
    
    session_start();

    if(isset($_SESSION['username'])) header('Location: index.php');

    if(isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!empty(trim($username)) && !empty(trim($password))) {
            $username = mysqli_real_escape_string($link, $username);
            $password = mysqli_real_escape_string($link, $password);

            $query = "SELECT password FROM users WHERE username = '$username'";
            $result = mysqli_fetch_assoc(mysqli_query($link, $query));

            if(password_verify($password, $result['password'])) {
                $_SESSION['username'] = $username;
                header('Location: index.php');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container">
            <!-- Navbar Brand -->
            <a href="#" class="navbar-brand">
            </a>
        </div>
    </nav>
</header>


<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="https://res.cloudinary.com/alanichsan/image/upload/v1607320923/login_chvtrh.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
            <h1>Login Dashboard</h1>
            <p class="font-italic text-muted mb-0">login using the username and password you used</p>
        </div>

        <!-- Registeration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="login.php" method="post">
                <div class="row">

                    <!-- username -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="username" type="text" name="username" placeholder="Username" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Password -->
                    <div class="input-group col-lg-12 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-3">
                        <button type="submit" class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Login</span>
                        </button>
                    </div>

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <a href="index.php" class="text-primary nav-link">go to <strong>Dashboard</strong> <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>