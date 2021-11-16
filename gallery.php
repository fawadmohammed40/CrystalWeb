<?php
include("conn.php");
$sql = 'SELECT * FROM table2;';

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<!-- dustech/about.html  13 Nov 2019 12:55:21 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title> Crystal</title>

    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
img {
  width: 100%;
}

.masonry {
	/*column-count: 4;*/
	column-count: 4;
	column-gap: 2px;
}

.masonry .mItem {
  display: inline-block;
  margin-bottom: 16px;
  width: 100%;
}

@media (max-width: 1199px) {
  .masonry {
    column-count: 3;
  }
}

@media (max-width: 991px) {
  .masonry {
    column-count: 2;
  }
}

@media (max-width: 767px) {
  .masonry {
    column-count: 1;
  }
}

    </style>

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="gear two">
                    <svg viewbox="0 0 100 100" fill="#131e4a">
                        <path d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z"></path>
                    </svg>
                </div>
                <div class="gear three">
                    <svg viewbox="0 0 100 100" fill="#fd5f17">
                        <path d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z"></path>
                    </svg>
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <nav class="navigation navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="index-2.html"><img src="assets/images/logo.png" alt></a> -->
                        <a class="navbar-brand" href="index-2.html">
                            <h3 style="color: #fd5f17">Crystal Electricals</h3>
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li>
                                <a href="gallery.php">Gallery</a>
                              </li>
                            <li>
                                <a href="Switchgears.html">Services</a>
                            </li>

                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->

                    <div class="search-contact">

                        <div class="contact">
                            <div class="call">
                                <i class="fi flaticon-call"></i>
                                <p style="color: #000;">Call us anytime</p>
                                <h5 style="color: #000;">+91 9823220797</h5>
                            </div>
                            <a href="#" class="theme-btn">Contact us</a>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->


        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2 style="color: #000;">Gallery</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->



        <div class="masonry" style="padding: 10px;" class="row mb-4" >
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <diV class="">
                        <div class="col-md-12 float-left">
                            <div class="mItem" style="margin: 2px;">
                                <img  src="<?php echo $row['attachment']; ?>" class="gallery__img" alt="Image 1">
                            </div>
                        </div>
                    </diV>
            <?php }
            } else {
                echo "No Data Available";
            }
            ?>
        </div>
    

        <!-- <div class="masonry">
  <div class="mItem">
    <img src="https://source.unsplash.com/random/300">
  </div>

  

</div> -->



  <!-- start site-footer -->
  <footer class="site-footer">
        <div class="upper-footer">
          <div class="container">
            <div class="row">
              <div class="col col-lg-3 col-md-3 col-sm-6">
                <div class="widget about-widget">
                  <div class="logo widget-title">
                    <h2 style="color: #fd5f17;">Crystal Electricals</h2>
                  </div>
                  <p></p>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-6">
                <div class="widget link-widget">
                  <div class="widget-title">
                    <h3>Links</h3>
                  </div>
                  <ul>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="Switchgears.html">Our services</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                  </ul>
                  <!-- <ul>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul> -->
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-6">
                <div class="widget contact-widget service-link-widget">
                  <div class="widget-title">
                    <h3>Our Address</h3>
                  </div>
                  <ul>
                    <li>
                      Crystal Enterprises  MIDC, Waluj,
                      Aurangabad.
                    </li>
                    <li><span>Phone:</span>+91 9823220797</li>
                    <li><span>Email:</span> contact@crystalelectricals.com</li>
                    <li><span>Office Time:</span> 10AM- 5PM</li>
                  </ul>
                </div>
              </div>
              <div class="col col-lg-3 col-md-3 col-sm-6">
                <div class="widget newsletter-widget">
                  <div class="widget-title">
                    <h3>Newsletter</h3>
                  </div>
                  <p>You will be notified when somthing new will be appear.</p>
                  <form>
                    <div class="input-1">
                      <input
                        type="email"
                        class="form-control"
                        placeholder="Email Address *"
                        required
                      />
                    </div>
                    <div class="submit clearfix">
                      <button type="submit"><i class="ti-email"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- end container -->
        </div>
        <div>
          <div class="lower-footer" style="margin-top: -50px">
            <div class="container">
              <div class="row">
                <div class="separator"></div>
                <div class="col col-xs-12">
                  <div class="extra-link">
                    <p>
                      <a
                        class="copyright text-md-center text-center"
                        target="_blank"
                        href="https://www.erstellen.tech"
                        target="_blank"
                        >Powered By Erstellen Tech</a
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>
</html>
