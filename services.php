<?php
include 'config.php';
include 'header.php';

$conn = mysqli_connect('localhost','root','','user_db');
if (isset($_POST['push'])) {
  // Get image name
    
$title=$_POST['title'];
$desc=$_POST['desc'];
  $image = $_FILES['image']['name'];
  // Get text


  // image file directory
  $target = "upload/".basename($image);

  $sql = "INSERT INTO service (titles,descriptions,image) VALUES ('$title','$desc','$image')";
  // execute query
  mysqli_query($conn, $sql);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
  }else{
      $msg = "Failed to upload image";
  }
}
$result = mysqli_query($conn, "SELECT * FROM service");

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

      <form action="services.php" method="post" enctype="multipart/form-data">

        <div class="form group">
          <label class="form-label">services title </label>
          <input type="text" name="title" required class="form-control" placeholder="enter your services title">
        </div>

        <div class="form group">
          <label class="form-label">services description</label>
          <textarea class="form-control" name="desc" rows="3"></textarea>
        </div>

        <div class="form group">
          <label class="form-label">image</label>
          <div>
  	         <input type="file" name="image">
       	</div>
          

        <div class="form group">
          <button type="submit" name="push" class="btn btn-primary mt-5">Push</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>


<?php
include 'footer.php';
?>