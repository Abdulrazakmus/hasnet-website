
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
    <!--<div class="loader-wrap">
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
    </div>
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
                                    <span>+255 777 01 99 01</span>
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
                                    <span><a href="mailto:info@hasnet.co.tz">info@hasnet.co.tz</a></span>
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
                                    <span>Taveta Street, Fuoni Road, Zanzibar - Tanzania</span>
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
            <img src="assets/img/contact-bg-left.png" alt="contact" class="position-absolute left-bottom">
            <img src="assets/img/contact-bg-right.png" alt="contact" class="position-absolute right-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="ct-section-title text-center">
                            <h2>Send Us Message!</h2>
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

         <!-- Footer -->
    <?php
    require_once("./footer.php");
    ?>