<?php
include 'config.php';
include 'header.php';

$type = $_SESSION['admin_name'];

if ($type == 'user') {

   session_destroy();
   header("location:login_form.php");
}

?>

<div class="container-fluid h-100">
   <div class="row h-100">
      <div class="col-md-2" style="margin-left:-12px;">
         <?php
         include 'slidebar.php';
         ?>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-9">
         <div class="content">
            <div class="w3-container w3-center">
               <img src="upload/jeevan.jfif" alt="Avatar" style="width:50%; height:auto"; >
               <h5><span><?php echo $_SESSION['user_name'] ?></span></h5>
            </div>
            <h3>Hi, <span><?php echo $type ?></span></h3>
            <h1>Welcome</h1>
            <!-- <p>This is <span></span>e</p> -->
         </div>
      </div>
   </div>
</div>

</div>
<td>
   <?php

   include 'footer.php';


   ?>
</td>