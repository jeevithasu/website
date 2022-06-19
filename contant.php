<?php
include 'header.php';
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
      include 'config.php';
      $query = "SELECT * FROM contain";
      $query_run = mysqli_query($conn, $query);

      ?>
      <button class="btn btn-danger m-5"><a href="desc.php" class="btn">add </a></button>
      <h1><b>Content List</b></h1>
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Content Title</th>
            <th>Image</th>
            <th>Action</th>
          </tr>


        </thead>
        <tbody>
          <?php

          if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $row) {

          ?>
              <tr>
                <td><?php echo $row['id'];  ?></td>
                <td><?php echo $row['title'] ?></td>
                <td>
                  <img src="<?php echo "upload/" . $row['img']; ?>" width="100px" alt="image">
                </td>
                <td>
                  <a class="btn btn-primary" href="update.php?id=<?php echo $row['id']; ?>">update</a>
                </td>

                <!-- <td>
   <a class="btn btn-primary" href="</?php echo  (str_replace(' ', '_', strtolower($row['title']))); ?>.php?id=//?php echo $row['id'];?>">//<//?php echo print (str_replace(' ', '_', strtolower($row['title'])));?></a> 
   
   </td>-->


              <tr>

              <?php

            }
          } else {
              ?>
              <tr>
                <td> no data avabile</td>
              </tr>
            <?php

          }
            ?>

        </tbody>
      </table>

    </div>


  </div>
</div>
<?php
include 'footer.php';
?>