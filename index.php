<?php
include("conn.php");
$sql = 'SELECT content1 FROM table3 ORDER BY idtable3 DESC LIMIT 1;';

$result = mysqli_query($conn, $sql);

?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="irstheme" />

    <title>Crystal</title>

    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.css" rel="stylesheet" />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/slick-theme.css" rel="stylesheet" />
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet" />
    <link href="assets/css/owl.transitions.css" rel="stylesheet" />
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    

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
              <path
                d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z"
              ></path>
            </svg>
          </div>
          <div class="gear three">
            <svg viewbox="0 0 100 100" fill="#fd5f17">
              <path
                d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z"
              ></path>
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
            </div>
            <!-- end of nav-collapse -->

            <div class="search-contact">
              <div class="contact">
                <div  class="call">
                  <i class="fi flaticon-call"></i>
                  <p style="color: #000">Call us anytime</p>
                  <h5 style="color: #000">+91 9823220797</h5>
                </div>
                <a href="#" class="theme-btn">Contact us</a>
              </div>
            </div>
          </div>
          <!-- end of container -->
        </nav>
        <!-- <div class="header-top d-none d-lg-block">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-contact ">
              <marquee><?php
                                            $res = mysqli_fetch_array($result, MYSQLI_NUM);
                                            echo $res[0];
                                            ?></marquee>
            </div>
          </div>
        </div>
      </div>
    </div> -->
      </header>
      <!-- end of header -->
 
      <!-- start of hero -->
      <section class="hero-slider hero-style-1">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div
                class="slide-inner slide-bg-image"
                data-background="assets/images/slider/sliderss2.jpg"
              >
                <div class="container">
                  <!-- <div>
                                <img class="biglogo" src="assets/images/Crystal Enterpriseslogo.png">
                                </div> -->
                  <div data-swiper-parallax="300" class="slide-title">
                    <h2>Always at your service!</h2>
                  </div>
                  <div data-swiper-parallax="400" class="slide-text">
                    <p style="color: #000">
                      <span style="color: #fd5f17"
                        >Crystal Electrical & Enterprises
                      </span>
                      has been servicing with full reliabilty and utmost
                      responsibility taking care of the clients requirements in
                      depth.
                    </p>
                  </div>
                  <div class="clearfix"></div>
                  <div data-swiper-parallax="500" class="slide-btns">
                    <a href="service-single.html" class="theme-btn"
                      >Our services</a
                    >
                    <a href="about.html" class="theme-btn-s2">More about us</a>
                  </div>
                </div>
              </div>
              <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->

            <div class="swiper-slide">
              <div
                class="slide-inner slide-bg-image"
                data-background="assets/images/slider/sliders1.jpg"
              >
                <div class="container">
                  <div data-swiper-parallax="300" class="slide-title">
                    <h2>Our services will set a benchmark!</h2>
                  </div>
                  <div data-swiper-parallax="400" class="slide-text">
                    <p style="color: #000">
                      We work with a vision to avail comfort to our clients
                      through our services making sure our clients are satisfied
                      to the heart's content!
                    </p>
                  </div>
                  <div class="clearfix"></div>
                  <div data-swiper-parallax="500" class="slide-btns">
                    <a href="#" class="theme-btn">Our services</a>
                    <a href="#" class="theme-btn-s2">More about us</a>
                  </div>
                </div>
              </div>
              <!-- end slide-inner -->
            </div>
            <!-- end swiper-slide -->
          </div>
          <!-- end swiper-wrapper -->

          <!-- swipper controls -->
          <div class="swiper-pagination"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </section>
      <!-- end of hero slider -->

      <!-- start about-us-section -->
      <section class="about-us-section section-padding">
        <div class="container">
          <div class="row">
            <div class="col col-md-6">
              <div class="section-title">
                <span>About us</span>
                <h2>
                  Providing you the best overall services is our priority!
                </h2>
              </div>
              <div class="details">
                <p>
                  Crystal Electrical and Enterprises is a firm which specializes
                  in broad range of services.
                  <b>We do all electrical work and maintenance. </b>
                </p>
                <h4>We specialize in:</h4>
                <div class="clearfix">
                  <ul>
                    <li><i class="ti-check"></i>HT-LT Work Switchgears</li>
                    <li><i class="ti-check"></i> Instrument Transformers</li>
                  </ul>
                  <ul>
                    <li><i class="ti-check"></i> Solar Energy</li>
                    <li>
                      <i class="ti-check"></i> Electrical Equipment Installation
                    </li>
                  </ul>
                  <ul>
                    <li><i class="ti-check"></i> Outsourcing Services</li>
                    <li><i class="ti-check"></i> Control Panel Work</li>
                  </ul>
                  <ul>
                    <li><i class="ti-check"></i> Fixing of High Must towers</li>
                    <li><i class="ti-check"></i> Electrification Work</li>
                  </ul>
                  <!-- <ul>
                                    <li><i class="ti-check"></i> All Electrical Work and Maintenance </li>
                                </ul> -->
                </div>
                <div class="btns">
                  <a href="Switchgears.html" class="theme-btn">Our Services</a>
                  <a href="contact.html" class="theme-btn-s3">Contact with us</a>
                </div>
              </div>
            </div>
            <div class="col col-md-6">
              <div class="right-col">
                <div class="img-holder">
                  <img src="assets/images/abtcollage.png" alt />
                </div>
                <!-- <div class="video-holder">
                                <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="hero-video-btn video-btn"  data-type="iframe" tabindex="0"><i class="fi flaticon-play-button"></i>Watch our intro video</a> 
                            </div> -->
              </div>
            </div>
          </div>
        </div>
        <!-- end container -->
      </section>
      <!-- end about-us-section -->

      <!-- start service-section -->
      <section class="service-section section-padding">
        <div class="container">
          <div class="row">
            <div class="col col-md-6">
              <div class="section-title-s2">
                <span>Our Services</span>
                <h2>Delivering services upto the mark!!</h2>
              </div>
            </div>
            <div class="col col-md-6">
              <div class="title-text">
                <p>
                  We at Crystal Electrical and Enterprises provide wide range of
                  services to our clients and provide them all services under
                  one roof. Crystal Enterprises is a one stop solution to all
                  electrical requirements.
                </p>
              </div>
            </div>
          </div>

          
          <div class="row">
            <div class="col col-xs-12">
              <div class="service-grids clearfix">
                <div class="grid">
                  <h4>
                    <i class="ti-layout-list-thumb-alt"></i
                    ><a href="Switchgears.html">HT-LT Work Switchgears</a>
                  </h4>
                  <p>
                    We are one of the best service providers of HT & LT
                    Switchgear that are used in electronic as well as electrical
                    industries.
                  </p>
                  <a href="Switchgears.html" class="read-more"
                    >Read More <i class="fi flaticon-next"></i
                  ></a>
                </div>

                <div class="grid">
                  <h4>
                    <i class="ti-layout-list-thumb-alt"></i
                    ><a href="Instrument_transformer.html">Instrument Transformers</a>
                  </h4>
                  <p>
                    We provides a full fleet service to
                    assess, secure and maintain high voltage instrument
                    transformers at high performance.
                  </p>
                  <a href="Instrument_transformer.html" class="read-more"
                    >Read More <i class="fi flaticon-next"></i
                  ></a>
                </div>
                <div class="grid">
                  <h4>
                    <i class="ti-layout-list-thumb-alt"></i
                    ><a href="solar-energy.html"> Solar Energy</a>
                  </h4>
                  <p>
                    We are specialists in solar battery solutions, solar system maintenance, servicing and repairs.
                  </p>
                  <a href="solar-energy.html" class="read-more"
                    >Read More <i class="fi flaticon-next"></i
                  ></a>
                </div>
                <div class="grid">
                  <h4>
                    <i class="ti-layout-list-thumb-alt"></i>
                    <a href="installation.html"
                      >Equipment Installation</a
                    >
                  </h4>
                  <p>
                    We carry out all the electrical equipment installation work flawlessly and efficiently as per clients need.
                  </p>
                  <a href="installation.html" class="read-more"
                    >Read More <i class="fi flaticon-next"></i
                  ></a>
                </div>
                <div class="grid">
                  <h4>
                    <i class="ti-layout-list-thumb-alt"></i>
                    <a href="outsourcing.html">Outsourcing Services</a>
                  </h4>
                  <p>
                    We outsource services and our experienced team can meet your needs and give you the right output.
                  </p>
                  <a href="outsourcing.html" class="read-more"
                    >Read More <i class="fi flaticon-next"></i
                  ></a>
                </div>
                <div class="grid">
                  <h4>
                    <i class="ti-layout-list-thumb-alt"></i
                    ><a href="control_panel.html">Control Panel Work</a>
                  </h4>
                  <p>
                    We take care of control panels at homes and offices and maintains it well to avoid short circuits and other hazards.
                  </p>
                  <a href="control_panel.html" class="read-more"
                    >Read More <i class="fi flaticon-next"></i
                  ></a>
                </div>
              </div>
              <div class="view-all">
                <p>
                    <i class="ti-control-play"></i>
                   Check out our
                  <a href="more.php">more services.</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end service-section -->

      <!-- start fun-fact-section -->
      <section class="fun-fact-section" style="margin-top: -40px">
        <div class="container">
          <div class="row">
            <div class="col col-xs-12">
              <div class="fun-fact-grids clearfix">
                <div class="grid">
                  <div class="info">
                    <i class="fi flaticon-worker"></i>
                    <h3><span class="odometer" data-count="50">00</span></h3>
                    <p>Employed</p>
                  </div>
                </div>
                <div class="grid">
                  <div class="info">
                    <i class="fi flaticon-engineer"></i>
                    <h3><span class="odometer" data-count="10">00</span></h3>
                    <p>Project Completed</p>
                  </div>
                </div>
                <div class="grid">
                  <div class="info">
                    <i class="fi flaticon-trophy"></i>
                    <h3><span class="odometer" data-count="0">00</span>+</h3>
                    <p>Award Won</p>
                  </div>
                </div>
                <div class="grid">
                  <div class="info">
                    <i class="fi flaticon-like-1"></i>
                    <h3><span class="odometer" data-count="100">00</span>%</h3>
                    <p>Satisfied customers</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
     

      <section class="featured-project-section section-padding">
        <div class="container">
          <div class="row">
            <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
              <div class="section-title-s5">
                <span>Featured Projects</span>
                <h2>Explore What We've Done</h2>
                <p>
                  We have ample of experience in electrical service and management work and have been successfully serving clients from different cities and areas.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="content-area">
          <div class="project-grids clearfix">
            <div class="grid">
              <div class="overlay">
                <span class="count">01.</span>
                <h3>Genus Power Infrastructures Ltd.</h3>
                <p>
                
3 phase Meter Replacement work under 
Aurangabad Jalgaon Dhule Zone
                </p>
              </div>
            </div>
            <div class="grid">
              <div class="overlay">
                <span class="count">02.</span>
                <h3>Maharashtra State Electricity Distribution Co. Ltd.</h3>
                <p>
                Joint kit LT providing 
Faulty meter replacement 
Under Aurangabad zone
                </p>
                <!-- <a href="#" class="theme-btn">Read More</a> -->
              </div>
            </div>
            <div class="grid">
              <div class="overlay">
                <span class="count">03.</span>
                <h3>Maharashtra State Electricity Transmission Company Ltd</h3>
                <p>
                Maharashtra State Electricity Transmission Company Ltd
                </p>
                <!-- <a href="#" class="theme-btn">Read More</a> -->
              </div>
            </div>
            <div class="grid">
              <div class="overlay">
                <span class="count">04.</span>
                <h3>M/s. Aadsons Engineering ,MIDC  Waluj</h3>
                <p>
                We carried out the Maintenance work.
                </p>
                <!-- <a href="#" class="theme-btn">Read More</a> -->
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- start team-section -->

      <!-- end team-section -->

      <!-- start quote-section -->
      <section class="quote-section" style="margin-top: 40px">
        <div class="content-area clearfix">
          <div class="left-col">
            <h2>"Our Motto - Win your trust"</h2>
            <div class="details">
              <p>
                We at Crystal Enterprises make sure to provide competent and
                best in class services to our clients and make sure we bring
                smiles at their face and satisfaction in hearts. Our prime motto
                is to serve our clients promptly and build a long lasting
                professional relationship on the basis of trust and reliance.
              </p>
              <div class="clearfix">
                <ul>
                  <li>
                    <i class="ti-check"></i> We always keep clients before self.
                  </li>
                  <li>
                    <i class="ti-check"></i> Client satisfaction is our
                    benchmark.
                  </li>
                </ul>
                <ul>
                  <li>
                    <i class="ti-check"></i> One stop solution for all your
                    requirements.
                  </li>
                  <li>
                    <i class="ti-check"></i> Prompt response and service is our
                    strength.
                  </li>
                </ul>
              </div>
              <div class="btns">
                <a href="#" class="theme-btn">Our Services</a>
                <a href="#" class="theme-btn-s3">Contact with us</a>
              </div>
            </div>
          </div>
          <div class="right-col">
            <div class="quote-area">
              <h3>Request A Quote</h3>
              <p>Give us an oportunity to serve you!</p>
              <form
                method="post"
                class="contact-validation-active"
                id="contact-quote-form"
              >
                <div>
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    placeholder="Name*"
                  />
                </div>
                <div>
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Email*"
                  />
                </div>
                <div>
                  <input
                    type="text"
                    class="form-control"
                    name="phone"
                    id="phone"
                    placeholder="Phone*"
                  />
                </div>
                <div>
                  <textarea
                    class="form-control"
                    name="note"
                    id="note"
                    placeholder="Case Description..."
                  ></textarea>
                </div>
                <div class="submit-area">
                  <button type="submit" class="theme-btn">Get a quote</button>
                  <div id="loader">
                    <i class="ti-reload"></i>
                  </div>
                </div>
                <div class="clearfix error-handling-messages">
                  <div id="success">Thank you</div>
                  <div id="error">
                    Error occurred while sending email. Please try again later.
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- end quote-section -->

      <!-- start cta-section -->
      <section class="cta-section">
        <div class="container">
          <div class="row">
            <div class="col col-lg-5 col-md-6">
              <div class="cta-text">
                <h3>Lets Get in Touch!</h3>
                <p>
                  We believe in actions rather than words. Let us work for you
                  and stand upto our promises!
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
        </div>
        <!-- end container -->
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
    <script src="https://use.fontawesome.com/5a86d23abe.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
  </body>

  <!-- dustech/  13 Nov 2019 12:54:40 GMT -->
</html>
