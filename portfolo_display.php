<?php
include 'config.php';
include 'header.php';

if (isset($_POST['push'])) {
  // Get image name
  $image = $_FILES['image']['name'];
  // Get text


  // image file directory
  $target = "upload/".basename($image);

  $sql = "INSERT INTO portfolo (image) VALUES ('$image')";
  // execute query
  mysqli_query($conn, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
  }else{
      $msg = "Failed to upload image";
  }
}
$result = mysqli_query($conn, "SELECT * FROM portfolo");

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

    <form method="POST" action="portfolo_display.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
    </div>
  </div>
</div>
</div>


<?php
include 'footer.php';
?>