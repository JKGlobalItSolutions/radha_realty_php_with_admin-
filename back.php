<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Radha Reality</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets2/img/favicon.png" rel="icon">
    <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets2/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets2/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets2/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets2/css/style.css" rel="stylesheet">
    <?php
    session_start();
    include('header.php');
    include('admin/db_connect.php');

    $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
    foreach ($query as $key => $value) {
        if (!is_numeric($key))
            $_SESSION['setting_' . $key] = $value;
    }
    ?>

</head>

<body>
    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top ">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="index.html">Radha <span class="color-b">Realty</span></a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="about.html">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="property-grid.html">Property</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav><!-- End Header/Navbar -->

    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel swiper position-relative">

        <div class="swiper-wrapper">

            <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets2/img/slide/slide1.webp)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title mb-4 ">THINGS TO FOLLOW DURING GIRIVALAM
                                            <span class="color-b">
                                        </h1>
                                        <h3 class="text-light">Tiruvannamalai
                                        </h3>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">swarnaboomi</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets2/img/slide/slide2.webp)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <h1 class="intro-title mb-4">
                                            <span class="color-b">radha reality
                                        </h1>
                                        <p class="intro-title-top">A Traditional of Trust
                                        </p>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">About us</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets2/img/slide/slide4.webp)">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="intro-body" style="align-items: end;">
                                        <h1 class="intro-title mb-4 ">HAPPINESS IS YOUR NATURE
                                            <span class="color-b">
                                        </h1>
                                        <h3 class="text-light">Bhagvan sri Ramanar
                                        </h3>
                                        <p class="intro-subtitle intro-price">
                                            <a href="#"><span class="price-a">About us</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div><!-- End Intro Section -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section class="section-services section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box-c   foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="bi bi-calendar4-week"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Buy</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c">
                                    Find the best properties for sale at the cheap price in thiruvannamalai.
                                </p>
                            </div>
                            <div class="card-footer-c">
                                <a href="#" class="link-c link-icon">Read more
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-box-c foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="bi bi-card-checklist"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h2 class="title-c">Sell</h2>
                                </div>
                            </div>
                            <div class="card-body-c">
                                <p class="content-c">
                                    Find the best properties for Buy at the cheap price in thiruvannamalai.
                                </p>
                            </div>
                            <div class="card-footer-c">
                                <a href="#" class="link-c link-icon">Read more
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Latest Properties Section ======= -->
        <section class="section-property section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Properties</h2>
                            </div>
                            <div class="title-link">
                                <a href="property-grid.html">All Property
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="property-carousel" class="swiper">
                    <div class="swiper-wrapper">
                        <?php
                        include 'admin/db_connect.php';
                        $qry = $conn->query("SELECT * FROM  room_categories order by rand() ");
                        while ($row = $qry->fetch_assoc()) :
                        ?>
                            <div class="carousel-item-b swiper-slide">
                                <div class="card-box-a card-shadow">
                                    <div class="img-box-a">
                                        <img src="assets/img/<?php echo $row['cover_img'] ?>" alt="" class="img-a img-fluid">
                                    </div>
                                    <div class="card-overlay">
                                        <div class="card-overlay-a-content">
                                            <div class="card-header-a">
                                                <h2 class="card-title-a">
                                                    <a href="property-single.html"><?php echo $row['name'] ?>
                                                        <!-- <br /> South Bela Two -->
                                                    </a>
                                                </h2>
                                            </div>
                                            <div class="card-body-a">
                                                <div class="price-box d-flex">
                                                    <span class="price-a">price | <?php echo "₹" . number_format($row['price'], 2) ?></span>
                                                </div>
                                                <a href="property-single.html" class="link-a">Click here to view
                                                    <span class="bi bi-chevron-right"></span>
                                                </a>
                                            </div>
                                            <div class="card-footer-a">
                                                <ul class="card-info d-flex justify-content-around">
                                                    <li>
                                                        <h4 class="card-info-title">Area</h4>
                                                        <span>340m
                                                            <sup>2</sup>
                                                        </span>
                                                    </li>
                                                    <!-- <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>1</span>
                        </li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End carousel item -->
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="propery-carousel-pagination carousel-pagination"></div>

            </div>
        </section>
        <!-- End Latest Properties Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <section class="section-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="widget-a">
                        <div class="w-header-a">
                            <a class="navbar-brand text-brand" href="index.html">Radha <span class="color-b">Reality</span></a>
                        </div>
                        <div class="w-body-a">
                            <p class="w-text-a color-text-a">
                                We have been into the business for more than 20 years since our incorporation into this business we have emerged as the leading real estate and most trusted company in Thiruvanamalai.
                            </p>
                        </div>
                        <div class="w-footer-a">

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-1 section-md-t3">
                    <!-- <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div> -->
                </div>
                <div class="col-sm-12 col-md-5 section-md-t3">
                    <div class="w-body-a">
                        <h4 class="w-text-a color-text-a">
                            <b>Via Contact</b>
                        </h4>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <span class="color-text-a">Email:</span> contact@example.com
                            </li>
                            <li class="color-a">
                                <span class="color-text-a">Phone:</span> +54 356 945234
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="nav-footer">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">About</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Property</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="socials-a">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="bi bi-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="bi bi-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="bi bi-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright-footer">
                        <p class="copyright color-text-a">
                            &copy; Copyright
                            <span class="color-a">Radha Reality</span> All Rights Reserved.
                        </p>
                    </div>
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
                        Designed by <a href="#">jkglobalitsolutions</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets2/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets2/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets2/js/main.js"></script>
    <?php $conn->close() ?>
</body>

</html>