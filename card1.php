<?php
include 'config.php';
include 'header.php';
$query = "SELECT * FROM contain WHERE title='Card'";
$query_run = mysqli_query($conn, $query);
if (mysqli_num_rows($query_run) > 0) {
  foreach ($query_run as $row) {
?>
    <style>
      #bannerimage {
        width: 100%;
        background-image: url(upload/<?php echo $row['img']; ?>);
        height: 405px;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }
    </style>
    <div class="box-area">

      <div class="banner-area">
        <div id="bannerimage"></div>
      </div>
      <div class="content-area">
        <div class="wrapper">
          <h2><b>
              <center><?php echo $row['title']; ?></center>
            </b></h2>
          <p><?php echo $row['description']; ?></p>
        </div>
      </div>
    </div>


<?php

  }
} else {
  echo 'no record not found';
}


?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php
include 'footer.php';
?>