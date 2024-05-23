
<?php 
require_once("./links.php");
?>

<!--title-->
<title>Contact : Hasnet ICT Solution</title>
</head>

<body>

   
    <!--dark light switcher-->
    <button class="dark-light-switcher" id="theme-switch">
        <span class="light-sun"><i class="fa-solid fa-sun"></i></span>
        <span class="dark-moon"><i class="fa-solid fa-moon"></i></span>
    </button>

    <!--body overlay -->
    <div class="body-overlay"></div>

    <!--scrolltop button -->
    <button class="scrolltop-btn"><i class="fa-solid fa-angle-up"></i></button>

    <!-- preloader start -->
    <!-- <div class="loader-wrap">
        <div class="preloader">
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="H" class="letters-loading">H</span>
                        <span data-text-preloader="A" class="letters-loading">A</span>
                        <span data-text-preloader="S" class="letters-loading">S</span>
                        <span data-text-preloader="N" class="letters-loading">N</span>
                        <span data-text-preloader="E" class="letters-loading">E</span>
                        <span data-text-preloader="T" class="letters-loading">T</span>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
    <!-- preloader end -->

   <!-- Header -->
   <?php
require_once("./header.php");
require_once("./modal.php");
   ?>
   <!-- Header ends here -->
    
    
    
                                                <!-- ALL MENUS ENDS HERE! -->
    
        <!--breadcrumb area start-->
        <section class="hero-style-1 contact-hero bg-white">
            <div class="hero-area overflow-hidden position-relative zindex-1 bg-primary-gradient pt-120">
                <img src="assets/img/shapes/circle.svg" alt="circle shape" class="circle-shape position-absolute">
                <img src="assets/img/shapes/contact-hero-left.png" alt="circle" class="left-bottom position-absolute">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero1-content-wrap">
                                <h1 class="display-font mt-4">Contact us,<br> Feel free to contact</h1>
                                <p class="mt-4">Easily accessible customer service is crucial in today's 24-hour, online business environment Hostim's experienced team Members.</p>
                                <a href="#" class="template-btn primary-btn rounded-pill mt-4"><span class="me-2"><i class="fa-solid fa-comments"></i></span>Live Chat</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-right">
                                <img src="assets/img/0001.svg" alt="hero image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hm-contact-info promo-area position-relative">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="hm-ct-info-wrapper rounded">
                                <span class="icon-wrapper rounded-circle d-inline-flex align-items-center justify-content-center">
                                  <i class="fa-solid fa-phone"></i>
                              </span>
                                <div class="info-content mt-4">
                                    <h4>Hotline</h4>
                                    <span>+255 777 019 901</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="hm-ct-info-wrapper rounded">
                                <span class="icon-wrapper rounded-circle d-inline-flex align-items-center justify-content-center">
                                  <i class="fa-solid fa-at"></i>
                              </span>
                                <div class="info-content mt-4">
                                    <h4>Email Us</h4>
                                    <span>info@hasnet.co.tz</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-10">
                            <div class="hm-ct-info-wrapper rounded">
                                <span class="icon-wrapper rounded-circle d-inline-flex align-items-center justify-content-center">
                                  <i class="fa-solid fa-house"></i>
                              </span>
                                <div class="info-content mt-4">
                                    <h4>Address</h4>
                                    <span>Fuoni road, taveta street - zanzibar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb area end-->

        <!--contact form -->
        <section class="hm-contact-area position-relative pt-60 pb-120 overflow-hidden bg-white zindex-1">
            <img src="assets/img/contact-bg-left.png" alt="bg" class="position-absolute left-bottom">
            <img src="assets/img/contact-bg-right.png" alt="bg" class="position-absolute right-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="ct-section-title text-center">
                            <h2>We're Ready To Help You Send Us Message.</h2>
                        </div>
                    </div>
                </div>
                <div class="hm-contact-form mt-5" id="contact">
                    <div class="col-12 pb-3 message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <form action="#" method="POST" id="contactForm" class="contact-us-form">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="input-field">
                                            <label for="name">Name</label>
                                            <input type="text" class="" name="name" id="name" placeholder="Enter name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field">
                                            <label for="email">Email</label>
                                            <input type="email" class="" name="email" id="email" placeholder="Enter email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="" name="phone" id="phone" placeholder="Enter phone" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-field">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="" name="subject" id="subject" placeholder="Enter subject" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <label for="message">Message</label>
                                            <textarea placeholder="Write Message" rows="5" name="message" id="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-btn text-center mt-4">
                            <button type="submit" class="template-btn primary-btn border-0 rounded-pill">Send Message<i class="fa-solid fa-chevron-right ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!--contact form end -->

         <!-- Footer Area -->
    <footer class="footer pt-100">
        <div class="footer-top pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget footer-widget-1">
                            <a href="index.php" class="footer-logo"><img src="assets/img/logo-white-2.png" class="logo"
                                    alt="logo"></a>
                            <p class="text-white mt-30">We are specialized in ICT solution that relate to Website
                                design, Database system development, Domain registration & Hosting, Digital marketing,
                                Graphic design and Printing, CCTV Supply & Installation, Hardware maintenance,
                                Networking, ICT Consultancy & Training. We also develop innovative ideas and make them
                                happen.</p>
                            <div class="footer-social mt-5">
                                <h5 class="ft-subtitle text-white position-relative d-inline-block">Follow us on
                                </h5>
                                <ul class="social-nav mt-3">
                                    <li><a href="#"
                                            class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"
                                            class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"
                                            class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"
                                            class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white"><i
                                                class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"
                                                    class="rounded-circle overflow-hidden position-relative d-flex align-items-center justify-content-center text-white"><i
                                                        class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-widget footer-widget-2 mt-2">
                            <h5 class="text-white position-relative mb-5 widget-title">Quick Links</h5>
                            <ul class="footer-nav">
                                <li><a href="index.php">Home</a></li>
                                <!-- <li><a href="about.php">About</a></li> -->
                                <li><a href="gallery.php">Portfolio</a></li>
                                <li><a href="#">Buy Product</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-widget footer-widget-3 mt-2">
                            <h5 class="text-white position-relative mb-5 widget-title">Services</h5>
                            <ul class="footer-nav">
                                <li><a href="web-design-hosting-and-digital-marketing.php">Web Design, Hosting & Digital Marketing</a></li>
                                <li><a href="networking-and-digital-security.php">Networking & Digital Security</a></li>
                                <li><a href="graphic-design-and-publish-printing.php">Graphic Design & Publish Printing</a></li>
                                <li><a href="ict-hardware-supply-and-maintanance.php">ICT Hardware Supply, Installation & Maintanance</a></li>
                     

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="footer-widget footer-sb-widget mt-2">
                            <h5 class="text-white position-relative mb-5 widget-title">Get In Touch</h5>
                            <form action="#" class="footer-sb-form position-relative">
                                <input type="email" placeholder="Type Your Mail">
                                <button type="submit" class="template-btn primary-btn btn-small">Subscribe</button>
                            </form>
                            <div class="ft-payment-method mt-40">
                                <h5 class="text-white position-relative ft-subtitle d-inline-block">We Accepted</h5>
                                <ul class="payment-list d-flex align-items-center mt-3">
                                    <li class="d-inline-flex align-items-center justify-content-center"><img
                                            src="assets/img/visa.png" alt="visa" class="img-fluid"></li>
                                    <li class="d-inline-flex align-items-center justify-content-center"><img
                                            src="assets/img/mastercard.png" alt="mastercard" class="img-fluid"></li>
                                    <li class="d-inline-flex align-items-center justify-content-center"><img
                                            src="assets/img/payoneer.png" alt="payoneer" class="img-fluid"></li>
                                    <li class="d-inline-flex align-items-center justify-content-center"><img
                                            src="assets/img/paypal.png" alt="paypal" class="img-fluid"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright-txt text-white">
                            <p class="mb-0">Copyright 2024 Hasnet ICT Solution . All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright-links mt-2 mt-md-0 text-start text-md-end">
                            <a href="#">Terms & Conditions</a>
                            <a href="#" class="ml-20">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- Footer Area End -->



    </div>
    <!-- main content wrapper ends -->


    <!--build:js-->
    <script src="assets/js/vendors/jquery.min.js"></script>
    <script src="assets/js/vendors/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <script src="assets/js/vendors/easing.min.js"></script>
    <script src="assets/js/vendors/swiper.min.js"></script>
    <script src="assets/js/vendors/massonry.min.js"></script>
    <script src="assets/js/vendors/bootstrap-slider.js"></script>
    <script src="assets/js/vendors/magnific-popup.js"></script>
    <script src="assets/js/vendors/waypoints.js"></script>
    <script src="assets/js/vendors/counterup.js"></script>
    <script src="assets/js/vendors/isotop.pkgd.min.js"></script>
    <script src="assets/js/vendors/countdown.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>


<!-- Mirrored from hostim-html.themetags.com/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Oct 2022 06:24:54 GMT -->
</html>