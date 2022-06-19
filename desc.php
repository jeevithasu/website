<?php
include 'config.php';
include 'header.php';
if(isset($_POST['sub']))
{

    
 $title=$_POST['title'];
 $desc=$_POST['desc'];
 $img=$_FILES['img']['name'];


$query="INSERT INTO contain(title,description,img) VALUES('$title','$desc','$img') ";
 $query_run=mysqli_query($conn,$query);

if($query_run)
{
 move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);
 $_SESSION['status']="image stored successfully";
 header('Location:contant.php');
}
else{

   $_SESSION['status']="image not inserted";
    header('Location:contant.php');

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

      <form action="desc.php" method="post" enctype="multipart/form-data">

        <div class="form group">
          <label class="form-label">content title </label>
          <input type="text" name="title" required class="form-control" placeholder="enter your content title">
        </div>

        <div class="form group">
          <label class="form-label">content description</label>
          <textarea class="form-control" name="desc" rows="3"></textarea>
        </div>

        <div class="form group">
          <label class="form-label">image</label>
          <input type="file" name="img" required class="form-control">
        </div>

        <div class="form group">
          <button type="submit" name="sub" class="btn btn-primary mt-5">submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>


<?php
include 'footer.php';
?>