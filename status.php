
<?php

// Connect to database 
$conn = mysqli_connect("localhost", "root", "", "user_db");


$id = $_GET['act_id'];
$stat = $_GET['stat'];

// SQL query that sets the status
// to 1 to indicate activation.
$sel = "UPDATE user_form SET 
           stat='$stat' WHERE id='$id'";

// Execute the query
mysqli_query($conn, $sel);

// Go back to course-page.php
header('location: userlist.php');

?>