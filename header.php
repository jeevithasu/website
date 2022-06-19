<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="css/style6.css">
    <link rel="stylesheet" href="css/style7.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style7.css">
    <!--<link rel="stylesheet" href="css/style5.css">-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Hello, world!</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <!-- <div class="container-fluid"> -->
            <a class="navbar-brand" href="#">
                <img src="upload/images.jfif" alt="" width="80" height="50" class="d-inline-block align-text-top">
            </a>
            <!-- </div> -->
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 ml-5 lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/login%20system/index.php?#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/login%20system/about_us1.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/login%20system/our_services1.php">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/login%20system/privacy_policy1.php">Privacy Policy</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/login%20system/company1.php">Company</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/login%20system/get_help1.php">Get Help</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <?php
                    if (!isset($_SESSION['user_name']) && empty($_SESSION['user_name'])) {
                    ?>
                        <button class="btn btn-light m-1"><a href="register_form.php" class="btn">Register</a></button>
                        <button class="btn btn-danger m-1"><a href="login_form.php" class="btn">Login</a></button>
        

                    <?php
                    } else {
                    ?>
                        <button class="btn btn-danger m-1"><a href="logout.php" class="btn">Logout</a></button>

                    <?php
                    }
                    ?>
                </form>
            </div>
        </div>
    </nav>