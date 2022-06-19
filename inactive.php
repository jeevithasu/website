<?php
  
    // Connect to database 
    $conn=mysqli_connect("localhost","root","","user_db");
  
    // Check if id is set or not, if true,
    // toggle else simply go back to the page
    if (isset($_GET['inactid'])){
  
        // Store the value from get to 
        // a local variable "course_id"
        $id=$_GET['inactid'];
  
        // SQL query that sets the status to
        // 0 to indicate deactivation.
        $select="UPDATE user_form SET 
            stat='0' WHERE id='$id'";
  
        // Execute the query
        mysqli_query($conn,$select);
    }
  
    // Go back to course-page.php
    header('location:admin_page.php');
?>