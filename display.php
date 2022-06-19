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
      $query = "SELECT * FROM slider";
      $query_run = mysqli_query($conn, $query);

      ?>
      <button class="btn btn-danger m-5"><a href="slider.php" class="btn">add </a></button>
      <h1><b>Slider List</b></h1>
      <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Slider Title</th>
            <th>Image</th>
            <th rowspan="4">Position</th>
          </tr>


        </thead>
        <tbody>
          <?php

          if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $row) {

          ?>
              <tr>
                <td><?php echo $row['id'];  ?></td>
                <td><?php echo $row['titless'] ?></td>
                <td>
                  <img src="<?php echo "upload/" . $row['images']; ?>" width="100px" alt="image">
                </td>

                <td>
                  <a class="btn btn-primary" href="update_slider.php?id=<?php echo $row['id']; ?>">Show</a>
                </td>
                <td><?php echo $row['position'] ?></td>
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