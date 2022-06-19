<?php

session_start();
include 'config.php';



if (isset($_POST['login'])) {

   $email = $_POST['email'];
   $pass = $_POST['password'];

   $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);

      $_SESSION['admin_name'] = $row['user_type'];
      $_SESSION['user_name'] = $row['name'];
      $_SESSION['email'] = $row['email'];

      if ($row['stat'] == 1) {
         if ($row['user_type'] == 'admin') {
            header('location:admin_page.php');
         } elseif ($row['user_type'] == 'user') {

            header('location:user_page.php');
         }
      } else {
         $error[] = 'your not active!!!';
      }
   } else {
      $error[] = 'incorrect email or password!';
   }
};
?>
<!DOCTYPE html>
<html lang="en">


<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/style7.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
         <!-- <div class="container-fluid"> -->
         <a class="navbar-brand" href="#">
            <img src="upload/download.jfif" alt="" width="30" height="24" class="d-inline-block align-text-top">

         </a>
         <!-- </div> -->
         <!-- <a class="navbar-brand" href="#">Navbar</a> -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
               <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
               <button class="btn btn-light m-1"><a href="register_form.php" class="btn">Register</a></button>
               <button class="btn btn-danger m-1"><a href="logout.php" class="btn">Login</a></button>
            </form>
            </ul>
         </div>
      </div>
   </nav>


   <div class="form-container">

      <form action="" method="post">
         <h3>login now</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="enter your email"><br>
         <input type="password" name="password" required placeholder="enter your password"><br>
         <input type="submit" name="login" value="login now" class="form-btn"><br>
         <p>don't have an account? <a href="register_form.php">register now</a></p>
      </form>

   </div>
   <?php
   include 'footer.php';
   ?>

</body>

</html>