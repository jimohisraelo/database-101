<?php require_once 'connection.php'; ?>
<?php require_once 'nav.php'; ?>
<?php require_once 'imgOnIndex.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/fevicon.png" type="" />

    <title>Carint</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <!--owl slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <body>
    <div class="hero_area">
      <!-- header section strats -->
      <?php include_once 'header.php';?>
      <!-- end header section --->

      <!-- slider section -->
      <section class="slider_section">
        <div class="slider_bg_box">
          <img src="<?=$sliderImg?>" alt="" />
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            
            
            <?php

           $dql = "SELECT * FROM indexSlide";
           $result = $conn->query($dql);
  
          if ($result->num_rows > 0) {
          while ($row3 = $result -> fetch_assoc()) {?>


            <div class="carousel-item <?=$row3["class"]?>">
              <div class="container">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        <?=$row3["h1"]?>
                      </h1>
                      <p>
                      <?=$row3["para"]?>
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn1"> <?=$row3["btn"]?> </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          <?php  }
      } else {
        echo "No complains yet";
      }?>

            </div>
          </div>
          <ol class="carousel-indicators">
            <li
              data-target="#customCarousel1"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </section>
      <!-- end slider section -->
    </div>


    <!-- track section -->

    <section class="track_section layout_padding">
      <div class="track_bg_box">
        <img src="<?=$trackingImg?>" alt="" />
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="heading_container">
              <h2><?=$h2?></h2>
            </div>
            <p>
            <?=$paragraph?>
            </p>
            <form action="">
              <input type="text" placeholder="Enter Your Tracking Number" />
              <button type="submit"><?=$btnInfo?></button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- end track section -->

    <!-- client section -->

    <section class="client_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2><?=$indexH2?></span></h2>
        </div>
        <div class="client_container">
          <div class="carousel-wrap">
            <div class="owl-carousel">

            <?php

$lql = "SELECT * FROM cilentreview";
$result = $conn->query($lql);

if ($result->num_rows > 0) {
while ($row5 = $result -> fetch_assoc()) {?>

              <div class="item">
                <div class="box">
                  <div class="detail-box">
                    <p>
                    <?=$row5["para1"]?>
                    </p>
                  </div>
                  <div class="client_id">
                    <div class="img-box">
                      <img src="<?=$row5["img1"]?>" alt="" class="img-1" />
                    </div>
                    <div class="name">
                      <h6><?=$row5["h6"]?></h6>
                      <p><?=$row5["smallP"]?></p>
                    </div>
                  </div>
                </div>
              </div>
<?php  }
} else {
echo "No reviews  yet";
}?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end client section -->

    <!-- info section -->

    <?php include_once 'footer.php';?>
    <!-- footer section -->

    <!-- jQery -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    ></script>
    <!-- custom js -->
    <script type="text/javascript" src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->
  </body>
</html>
