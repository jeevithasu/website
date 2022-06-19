<?php
include 'config.php';
include 'header.php';
?>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
</style>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
  </ul>
  <div class="carousel-inner">

    <!-- The slideshow -->
    <div class="carousel-item active">
      <img src="upload/slider.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>slider</h5>
        <p>Team spirit is an attitude that enables people to work well together. It's about camaraderie, cooperation and collaboration between different members of the organization. Team spirit is based on the culture of the company.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="upload/jeevitha.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>slider2</h5>
        <p>The word lady is a term for a girl or woman, with various connotations. Once used to describe only women of a high social class or status, the equivalent of lord,</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="upload/download (2).jfif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>slider3</h5>
        <p>Nature is defined as our environment. It is the interaction between the physical world around us and the life within it like the atmosphere, climate, natural resources, ecosystem, flora, fauna and humans. Nature also includes non-living things such as water, mountains, landscape, plants, trees and many other things.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="upload/jeevitha.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>slider4</h5>
        <p>God is usually conceived of as being omnipotent, omniscient, omnipresent and omnibenevolent as well as having an eternal and necessary existence.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="upload/slider.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>slider6</h5>
        <p>Love is a set of emotions and behaviors characterized by intimacy, passion, and commitment.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="upload/slider1.jfif" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>slider7</h5>
        <p>Usually you will be able to put the code from the slideshow settings page into your header.php file. It depends on your theme and how it’s built.</p>
      </div>
    </div>


    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>

  <div class="row h-100" style="margin-left:50px; margin-bottom:20px; margin-top:50px; margin-right:50px;">
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'user_db');

    $query = "SELECT * FROM contain WHERE title='Card'";
    $query_run = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_run) > 0) {
      foreach ($query_run as $row) {
    ?>


        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['title']; ?></h5>
              <p class="card-text">

                <?php
                $string = mb_strimwidth($row['description'], 0, 103, '...');
                echo $string;
                ?>

              </p>
              <a href="http://localhost/login%20system/card1.php" class="btn btn-primary">view more</a>
            </div>
          </div>
        </div>

    <?php

      }
    } else {
      echo 'no record not found';
    }
    ?>


    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'user_db');

    $query = "SELECT * FROM contain WHERE title='Card2'";
    $query_run = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_run) > 0) {
      foreach ($query_run as $row) {
    ?>

        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['title']; ?></h5>
              <p class="card-text">
                <?php
                $string = mb_strimwidth($row['description'], 0, 103, '...');
                echo $string;
                ?>
              </p>
              <a href="http://localhost/login%20system/card2.php" class="btn btn-primary">view more</a>
            </div>
          </div>
        </div>
    <?php

      }
    } else {
      echo 'no record not found';
    }
    ?>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'user_db');

    $query = "SELECT * FROM contain WHERE title='Card3'";
    $query_run = mysqli_query($conn, $query);
    if (mysqli_num_rows($query_run) > 0) {
      foreach ($query_run as $row) {
    ?>

        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['title']; ?></h5>
              <p class="card-text"> <?php
                                    $string = mb_strimwidth($row['description'], 0, 103, '...');
                                    echo $string;
                                    ?></p>
              <a href="http://localhost/login%20system/card3.php" class="btn btn-primary">view more</a>
            </div>
          </div>
        </div>
    <?php

      }
    } else {
      echo 'no record not found';
    }
    ?>
  </div>
</div>
<?php

$query = "SELECT * FROM portfolo";
$query_run = mysqli_query($conn, $query);
?>
<section>
  <div class="row">
    <div style="background-color:#33475b">
      <h1 style="font-size:50px; color:yellow;">
        <center>Portfolio Images</center>
      </h1>
      <h1>
        <center>RECENT PROJECTS</center>
      </h1>
    </div>
    <?php

    if (mysqli_num_rows($query_run) > 0) {
      foreach ($query_run as $row) {

    ?>
        <div class="col-sm-3">
          <img src="<?php echo "upload/" . $row['image']; ?>" alt="image" style="width:100%;height:100%">
        </div>

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
  </div>

</section>
<div class="row" style="border-top:4px solid black">
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'user_db');

  $query = "SELECT * FROM contain WHERE title='HEADING'";
  $query_run = mysqli_query($conn, $query);
  if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $row) {
  ?>
      <div class="col-md-6">
        <div class="split left">
          <div class="centered">
            <img src="upload/nature.jpg" alt="Avatar woman" style="width:100%;height:100%">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="split right">
          <div class="centered">
            <h2 style="margin-top:50px;"><center><?php echo $row['title']; ?></center></h2>
            <p><?php
                $string = mb_strimwidth($row['description'], 0, 211, '...');
                echo $string;
                ?></p>
            <button class="btn btn-danger m-1"><a href=".php" class="btn">read more</a></button>
          </div>
        </div>
      </div>
  <?php

    }
  } else {
    echo 'no record not found';
  }
  ?>
</div>
</section>


















































</div>
</div>
</div>






<?php
include 'footer.php';
?>