<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>UCB</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('/')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{url('/')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{url('/')}}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{url('/')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{url('/')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{url('/')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">UCB</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#services">SERVICES</a></li>
          <li><a href="{{url('/')}}/notice">Notice</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#portfolio">Galery</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#team">Team</a></li>
          {{-- <li class="menu-has-children"><a href="">More</a>
            <ul>
              <li><a class="linkNotClickable">Research</a></li>
              <li><a class="linkNotClickable">Publication</a></li>
              <!-- <li><a class="linkNotClickable">Database</a></li> -->
            </ul>
          </li> --}}
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->










  {{-- SECTION:START --}}
  @yield('main')
  {{-- SECTION:STOP --}}

















    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>UCB, Bhagalpur-812007,Bihar</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:0641-2501382">0641-2501382</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@bioinfotmbu.org">info@bioinfotmbu.org</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>UCB</h3>
            <p>Get a touch with us to know our service.</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/')}}" class="class="back-to-top"">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/')}}/#about"/>About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/')}}/#services"/>Services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/')}}/#portfolio"/>Galery</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/')}}/notice"/>Notice</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              UCB <br>
              Beside Botanical Garden<br>
              In front of P.G Department of Physics <br>
              T.N.B College<br>
              <strong>Phone:</strong> 0641-2501382<br>
              <strong>Email:</strong> info@bioinfotmbu.org<br>
            </p>

            <div class="social-links">
              <a class="linkNotClickable" class="twitter"><i class="fa fa-twitter"></i></a>
              <a class="linkNotClickable" class="facebook"><i class="fa fa-facebook"></i></a>
              <a class="linkNotClickable" class="instagram"><i class="fa fa-instagram"></i></a>
              <a class="linkNotClickable" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a class="linkNotClickable" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>
<!-- 
          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div> -->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>UCB</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://gangaservices.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://gangaservices.com/buy/?theme=UCB
        -->
        Designed by <a href="https://gangaservices.com/" target="_blank">GangaServices Software Solution</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{url('/')}}/lib/jquery/jquery.min.js"></script>
  <script src="{{url('/')}}/lib/jquery/jquery-migrate.min.js"></script>
  <script src="{{url('/')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('/')}}/lib/easing/easing.min.js"></script>
  <script src="{{url('/')}}/lib/superfish/hoverIntent.js"></script>
  <script src="{{url('/')}}/lib/superfish/superfish.min.js"></script>
  <script src="{{url('/')}}/lib/wow/wow.min.js"></script>
  <script src="{{url('/')}}/lib/waypoints/waypoints.min.js"></script>
  <script src="{{url('/')}}/lib/counterup/counterup.min.js"></script>
  <script src="{{url('/')}}/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{url('/')}}/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="{{url('/')}}/lib/lightbox/js/lightbox.min.js"></script>
  <script src="{{url('/')}}/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('js/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>
</html>
