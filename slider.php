<?php
include 'config.php';
include 'header.php';



if(isset($_POST['display']))
{

    
 $title=$_POST['titless'];
 $desc=$_POST['descriptionss'];
 $images=$_FILES['images']['name'];
 $position=$_POST['position'];


$query="INSERT INTO slider(titless,descriptionss,images,position) VALUES('$title','$desc','$images','$position') ";
 $query_run=mysqli_query($conn,$query);

if($query_run)
{
 move_uploaded_file($_FILES["images"]["tmp_name"],"upload/".$_FILES["images"]["name"]);
 $_SESSION['status']="image stored successfully";
 header('Location:display.php');
}
else{

   $_SESSION['status']="image not inserted";
    header('Location:display.php');

}

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

      <form action="slider.php" method="post" enctype="multipart/form-data">

        <div class="form group">
          <label class="form-label">Slider Title </label>
          <input type="text" name="titless" required class="form-control" placeholder="enter your slider title">
        </div>

        <div class="form group">
          <label class="form-label">Slider Description</label>
          <textarea class="form-control" name="desc" rows="3"></textarea>
        </div>

        <div class="form group">
          <label class="form-label">Image</label>
          <input type="file" name="images" required class="form-control">
        </div>
        <div class="form group">
          <label class="form-label">Position</label>
          <textarea class="form-control" name="position"></textarea>
        </div>
        

        <div class="form group">
          <button type="submit" name="display" class="btn btn-primary mt-5">Display</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>



<?php
include 'footer.php';
?>