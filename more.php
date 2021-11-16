<?php
include("conn.php");
$sql = 'SELECT * FROM table1;';

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

    <title> Crystal </title>

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

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="gear two">
                    <svg viewbox="0 0 100 100" fill="#131e4a">
                        <path d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z">
                        </path>
                    </svg>
                </div>
                <div class="gear three">
                    <svg viewbox="0 0 100 100" fill="#fd5f17">
                        <path d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z">
                        </path>
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
                        <h1 style="padding-top: 10px; padding-left: 12px; color: #fd5f17; font-style: bold;">Crystal
                            Electrical</h1>

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
                                <p style="color: black;">Call us anytime</p>
                                <h5 style="color: black;">+91 9823220797</h5>
                            </div>
                            <a href="contact.html" class="theme-btn">Contact us</a>
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
                        <h2 style="color:black">More Services</h2>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start service-single-section -->
        <section class="service-single-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-9 col-md-push-3">
                        <div class="service-single-content">




                            <div class="container mt-10">

                                <div class="container ">
                                    <div class="row">
                                    <?php
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <div class="col-md-5" style="border: solid 5px #f2f7fd; margin:0 3px 3px 3px">
                                            <div class=" text-center">
                                                <img style="padding:10px 0 0 0 ; float-left" src="<?php echo $row['attachment']; ?>" height="200px" width="300px" alt>
                                                <p style="padding: 10px 0 0 0; color:navy; font-size:medium; font-weight:bold"> <?php echo $row['content1']; ?></p>
                                                <div style="padding: 0 20px 0 20px;overflow: auto ; height: 110px;">
                                                <p style="text-align: justify;"><?php echo $row['content2']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }
                                        } else {
                                            echo "No Data Available";
                                        }
                                            ?>
                                        <!-- <div class="col-md-5 ">
                                        <div class="service-single-slider text-center">
                                                <img src="assets/images/electricinstallation.jpg" height="40%" width="70%" alt>
                                                <p style="padding: 10px 0 0 0; color:#fd5f17; font-size:medium; font-weight:bold">Service 2</p>
                                            <div style="padding: 0 20px 0 20px;">
                                                <p class="serv">Lorem, ipsum dolor sit amet conscm;kancklsnakcaskcsakmectetur adipisicing elit. Iusto, consequuntur!</p>
                                                </div>
                                            </div>
                                           
                                        </div> -->
                                      
                                    </div>
                                </div>
                                <!-- <div class="col-md-12">
                                    <center>
                                        <div class="col-md-6">
                                        <?php
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                            <div class="panel-group" id="accordion8" role="tablist" aria-multiselectable="true">
                                               

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingOne8">

                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#accordion8" href="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                                                                        <?php echo $row['content1']; ?>

                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne8">
                                                                <div class="panel-body">
                                                                    <p><img src="<?php echo $row['attachment']; ?>" /></p>
                                                                </div>
                                                                <div class="panel-body">
                                                                    <p><?php echo $row['content2']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                            </div>
                                            <?php }
                                        } else {
                                            echo "No Data Available";
                                        }
                                            ?>
                                        </div>
                                    </center>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3 col-md-pull-9">
                        <div class="service-sidebar">
                            <div class="widget service-list-widget">
                                <ul>
                                    <li><a href="Switchgears.html">HT-LT Work Switchgears</a></li>
                                    <li><a href="Instrument_transformer.html">Instrument Transformers</a></li>
                                    <li><a href="solar-energy.html">Solar Energy</a></li>
                                    <li><a href="installation.html">Electrical Equipment Installation</a></li>
                                    <li><a href="outsourcing.html">Outsourcing Services</a></li>
                                    <li><a href="control_panel.html">Control Panel Work</a></li>

                                </ul>
                            </div>
                            <div class="widget download-widget">
                                <ul>
                                    <li><a href="more.php">More Services</a></li>
                                </ul>
                            </div>
                            <div class="widget contact-widget">
                                <div>
                                    <h5>We are Industrial experts Team</h5>
                                    <a href="contact.html">Contact with us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end service-single-section -->



        <!-- start cta-section -->
        <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-5 col-md-6">
                        <div class="cta-text">
                            <h3>Lets Get in Touch!</h3>
                            <p>We believe in actions rather than words. Let us work for you and stand upto our promises!
                            </p>
                        </div>
                    </div>
                    <div class="col col-lg-6 col-lg-offset-1 col-md-6">
                        <div class="contact-info">
                            <div>
                                <i class="fi flaticon-call"></i>
                                <h4>Call us</h4>
                                <p>+91 9823220797</p>
                            </div>
                            <div>
                                <i class="fi flaticon-contact"></i>
                                <h4>Email us</h4>
                                <p>contact@crystalelectricals.in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta-section -->


        <!-- start site-footer -->
        <footer class="site-footer">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="assets/images/Crystal Electrical and Enterpriseslogo.png" alt>
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
                                    <li><a href="service-single.html">Our services</a></li>
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
                                    <li>Crystal Electrical and Enterprises Worldwide Pvt Limited P 355/1 Wadgaon
                                        Kolhati, Tessgaon road, Bajaj Nagar Parisar, MIDC, Waluj, Aurangabad. </li>
                                    <li><span>Phone:</span>+91 9823220797</li>
                                    <li><span>Email:</span> contact@crystalelectricals.in</li>
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
                                        <input type="email" class="form-control" placeholder="Email Address *" required>
                                    </div>
                                    <div class="submit clearfix">
                                        <button type="submit"><i class="ti-email"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div>
                <div class="lower-footer" style="margin-top: -50px;">
                    <div class="container">
                        <div class="row">
                            <div class="separator"></div>
                            <div class="col col-xs-12">
                                <div class="extra-link">
                                    <p>
                                        <a class="copyright text-md-center text-center" target="_blank" href="https://www.erstellen.tech" target="_blank">Powered By Erstellen
                                            Tech</a>
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

<!-- dustech/about.html  13 Nov 2019 12:55:21 GMT -->

</html>