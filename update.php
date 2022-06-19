<?php
include 'config.php';
//Database Connection
include 'header.php';
include 'update_data.php';
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
      <?php
      $id = $_GET['id'];
      $query = "SELECT * FROM contain WHERE id='$id'";
      $query_run = mysqli_query($conn, $query);
      if (mysqli_num_rows($query_run) > 0) {


        foreach ($query_run as $row) {
          //echo $row['id'];
      ?>


          <form action="update_data.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form group">
              <label class="form-label">Content Title </label>

              <input type="text" name="title" value="<?php echo $row['title']; ?>" required class="form-control">
            </div>

            <div class="form group">
              <label class="form-label">Content Description</label>
              <textarea class="form-control" name="desc" rows="3"><?php echo $row['description']; ?></textarea>
            </div>

            <div class="form group">
              <label class="form-label">Image</label>
              <input type="file" name="img" required class="form-control">
              <input type="text" name="img_old" value="<?php echo $row['img']; ?>">
            </div>

            <div class="form group">
              <button type="submit" name="update" class="btn btn-primary mt-5">Update</button>
            </div>
          </form>

      <?php


        }
      } else {
        echo 'no record not found';
      }

      ?>

    </div>
  </div>
</div>
</div>

<?php
include 'footer.php';
?>