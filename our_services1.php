<?php
include 'config.php';
include 'header.php';
$query = "SELECT * FROM contain WHERE title='Our Services'";
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




        <section>
            <div class="row">
                <div style="background-color:#33475b">
                    <h1 style="font-size:50px; color:yellow;">
                        <center> Type Of Services</center>
                    </h1>
                </div>
                <div class="row">

                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="upload/nature.jpg" alt="Avatar woman" style="height:50%;width:100%; border: 5px solid #555;  margin-top: 25px; margin-bottom: 50px; margin-right: 150px; margin-left: 25px;">
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <h2 style="font-size: 24px">DESIGN & PLANNING</h2>
                                </div>
                                <div class="col-sm-12">
                                    <p> Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                      </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="upload/download (1).jfif" alt="Avatar woman" style="height:50%;width:100%; border: 5px solid #555;  margin-top: 25px; margin-bottom: 50px; margin-right: 150px; margin-left: 25px;">
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <h2 style="font-size: 24px">RENOVATION</h2>
                                </div>
                                <div class="col-sm-12">
                                <p> Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="upload/padma.png" alt="Avatar woman" style="height:50%;width:100%; border: 5px solid #555;  margin-top: 25px; margin-bottom: 50px; margin-right: 150px; margin-left: 25px;">
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <h2 style="font-size: 24px">INTERIOR DESIGN</h2>
                                </div>
                                <div class="col-sm-12">
                                <p> Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                      </p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="row">

<div class="col-sm-4">
    <div class="row">
        <div class="col-sm-4">
            <img src="upload/female - Copy.png" alt="Avatar woman" style="height:50%;width:100%; border: 5px solid #555;  margin-top: 25px; margin-bottom: 50px; margin-right: 150px; margin-left: 25px;">
        </div>
        <div class="col-sm-6">
            <div class="col-sm-12">
                <h2 style="font-size: 24px">DOCUMENTATION</h2>
            </div>
            <div class="col-sm-12">
                <p>Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-4">
    <div class="row">
        <div class="col-sm-4">
            <img src="upload/moulya.jfif" alt="Avatar woman" style="height:50%;width:100%; border: 5px solid #555;  margin-top: 25px; margin-bottom: 50px; margin-right: 150px; margin-left: 25px;">
        </div>
        <div class="col-sm-6">
            <div class="col-sm-12">
                <h2 style="font-size: 24px">CONSTRUCTION SERVICES</h2>
            </div>
            <div class="col-sm-12">
            <p> Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-4">
    <div class="row">
        <div class="col-sm-4">
            <img src="upload/nature.jpg" alt="Avatar woman" style="height:50%;width:100%; border: 5px solid #555;  margin-top: 25px; margin-bottom: 50px; margin-right: 150px; margin-left: 25px;">
        </div>
        <div class="col-sm-6">
            <div class="col-sm-12">
                <h2 style="font-size: 24px">PROFESSIONAL SUPPORT</h2>
            </div>
            <div class="col-sm-12">
            <p> Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
            </div>
        </div>
    </div>
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
    include 'footer.php';
    ?>