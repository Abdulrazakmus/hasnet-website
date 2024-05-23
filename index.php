<?php
require_once("./links.php");
?>

<!--title-->
<title>Home : Hasnet ICT solutions</title>
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





    <style>
    /* Custom styles for responsive carousel height */
    @media (max-width: 576px) {
        #carouselExampleDark {
            height: 90vh; /* Adjust height for mobile phones */
        }
    }

    @media (min-width: 1200px) {
        #carouselExampleDark {
            height: 50vh; /* Adjust height for large screens */
        }
    }

    /* Styles for carousel overlay and caption */
    .carousel-item {
        position: relative;
    }

    .carousel-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
    }

    .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
        padding: 20px;
        border-radius: 10px;
        color: #000; /* Black text */
    }
</style>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" style="height: 0%;">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <div class="carousel-overlay">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center text-white">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <img src="/assets/img/home-slider/bg-01.jpg" class="d-block w-100" alt="First slide">
        </div>

        <div class="carousel-item" data-bs-interval="2000">
            <div class="carousel-overlay">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center text-white">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <img src="/assets/img/home-slider/bg-02.jpg" class="d-block w-100" alt="Second slide">
        </div>

        <div class="carousel-item">
            <div class="carousel-overlay">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center text-white">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            <img src="/assets/img/home-slider/bg-03.jpg" class="d-block w-100" alt="Third slide">
        </div>
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button> -->
    <!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->
</div>


<!-- Our Services -->
<section class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">

                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6 mb-3">
                        <a href="web-design-hosting-and-digital-marketing.php" class="text-decoration-none">
                            <div class="promo-item bg-white rounded primary-shadow shadow">
                                <div class="promo-top d-flex align-items-center">
                                    <div class="fa fa-database"></div>
                                    <h5 class="ms-3 mb-0">Web Design, Hosting & Digital Marketing</h5>
                                </div>
                                <ul class="text-muted ms-4 mb-0">
                                    <li><a href="custom-web-design.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Custom web design</a></li>
                                    <li><a href="web-hosting-solutions.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Web hosting solutions</a></li>
                                    <li><a href="digital-marketing-strategies.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Digital marketing strategies</a></li>
                                </ul>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-3">
                        <a href="networking-and-digital-security.php" class="text-decoration-none">
                            <div class="promo-item bg-white rounded primary-shadow shadow">
                                <div class="promo-top d-flex align-items-center">
                                    <div class="fa fa-wifi"></div>
                                    <h5 class="ms-3 mb-0">Networking & Digital Security</h5>
                                </div>
                                <ul class="text-muted ms-4 mb-0">
                                    <li><a href="network-setup-optimization.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Network setup and optimization</a></li>
                                    <li><a href="digital-security-solutions.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Digital security solutions</a></li>
                                    <li><a href="firewall-implementation.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Firewall implementation</a></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-3">
                        <a href="graphic-design-and-publish-printing.php" class="text-decoration-none">
                            <div class="promo-item bg-white rounded primary-shadow shadow">
                                <div class="promo-top d-flex align-items-center">
                                    <div class="fa fa-image"></div>
                                    <h5 class="ms-3 mb-0">Graphic Design & Publish Printing</h5>
                                </div>
                                <ul class="text-muted ms-4 mb-0">
                                    <li><a href="logo-branding-design.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Logo and branding design</a></li>
                                    <li><a href="brochure-flyer-printing.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Brochure and flyer printing</a></li>
                                    <li><a href="graphic-design-services.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Graphic design services</a></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3">
                        <a href="ict-hardware-supply-and-maintenance.php" class="text-decoration-none">
                            <div class="promo-item bg-white rounded primary-shadow shadow">
                                <div class="promo-top d-flex align-items-center">
                                    <div class="fa fa-cogs"></div>
                                    <h5 class="ms-3 mb-0">ICT Hardware Supply, Installation & Maintenance</h5>
                                </div>
                                <ul class="text-muted ms-4 mb-0">
                                    <li><a href="hardware-procurement.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Hardware procurement</a></li>
                                    <li><a href="installation-services.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Installation services</a></li>
                                    <li><a href="maintenance-and-support.php" class="text-decoration-none"><i class="fa fa-caret-right me-2"></i>Maintenance and support</a></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





    <!--Why Choosing Us-->
    <section class="pricing-tab-section light-bg pb-120  position-relative zindex-1 overflow-hidden" style="padding-top: 250px;">
        <img src="assets/img/shapes/line-red-top.png" alt="line shape" class="position-absolute right-top d-none d-lg-block">
        <img src="assets/img/shapes/line-red.svg" alt="line shape" class="position-absolute left-bottom">
        <div class="container">


            <div class="money-back-area text-center bg-white rounded-10 mt-4 position-relative zindex-1 overflow-hidden">
                <img src="assets/img/shapes/mb-circle-left.png" class="position-absolute left-top" alt="circle">
                <img src="assets/img/shapes/mb-circle-right.png" class="position-absolute right-bottom" alt="circle" id="#get-started">
                <h3>Why Choosing Us?</h3>
                <p> Check out the 3 reasons ...</p>
                <ul class="money-back_ft-list d-flex align-items-center justify-content-start justify-content-md-center mt-30">
                    <li><i class="fa-solid fa-check-square"></i><span class="ms-2">We know what we
                            do</span></li>
                    <li><i class="fa-solid fa-check-square"></i><span class="ms-2">Affordable cost
                            at higher standard</span></li>
                    <li><i class="fa-solid fa-check-square"></i><span class="ms-2">Confidentiality
                            and uniqness</span></li>
                </ul>
            </div>
        </div>
    </section>
</section>
    <!--Why Choosing Us end-->



    <!--hero section end-->



    <!--migrate hosting start-->
    <section class="migrate-hosting bg-primary-gradient position-relative zindex-1">
        <img src="assets/img/shapes/migrate-shape-1.svg" alt="circle" class="position-absolute left-bottom soft-light">
        <img src="assets/img/shapes/plus-rounded.svg" alt="plus" class="position-absolute rounded-plus">
        <img src="assets/img/shapes/migrate-frame.svg" alt="frame" class="position-absolute migrate-frame">
        <img src="assets/img/shapes/line-wave.svg" alt="frame" class="position-absolute line-wave soft-light">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-6 order-2 order-lg-1">
                    <div class="migrate-content">
                        <h2 class="mb-4">Your Satisfaction Is Our Success</h2>
                        <p class="mb-50">Our team of experts is committed to providing reliable and innovative solutions that help your business succeed. <br> <br>
                            Trust us to deliver the latest technology solutions and equipment,
                            so you can focus on growing your business.
                        </p>
                        <div class="migrate-btns">
                            <a href="contact.php" class="template-btn outline-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <div class="migrate-feature-img mb-5 mb-lg-0">
                        <img src="assets/img/migrate.png" alt="migrate" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--migrate hosting end-->

    <!--faq section start-->
    <section class="ds-faq pb-120 ds-bg mt-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <h2 class="mb-3">Get ready to be inspired! </h2>
                        <p>
                            We invite you to explore our compelling mission and vision statements, Our Objectives,
                            Our Organograph plus What we do and discover the exciting range of activities and services we currently offer.
                            Take a closer look and see how we're making a positive impact in our community!</p>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="d-flex align-items-center justify-content-center ds-faq-controls">
                    <ul class="nav nav-tabs border-0 ds-faq-controls justify-content-center">

                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#faq_could_hosting"><i class="fa-solid fa-tasks"></i><span class="ms-3">What We Do?</span></button></li>

                        <li><button data-bs-toggle="tab" data-bs-target="#faq_shared_hosting"><i class="fa-solid fa-bullseye"></i><span class="ms-3">Our Mission</span></button></li>

                        <li><button data-bs-toggle="tab" data-bs-target="#faq_vps_hosting"><i class="fa-solid fa-eye"></i><span class="ms-3">Our Vision</span></button></li>

                        <li><button data-bs-toggle="tab" data-bs-target="#faq_wp_hosting"><i class="fa-solid fa-object-group"></i><span class="ms-3">Our
                                    Objectives</span></button></li>

                        <li><button data-bs-toggle="tab" data-bs-target="#faq_could_hosting-admin"><i class="fa-solid fa-users"></i><span class="ms-3">Our Organograph</span></button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content mt-30 position-relative zindex-1">

                    <!-- ==================================== WHAT WE DO===========================================================-->

                    <div class="tab-pane fade show active" id="faq_could_hosting">
                        <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_4">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_14" data-bs-toggle="collapse">Technology is what we believe
                                    </a>
                                </div>
                                <div class="accordion-collapse collapse show" id="sh_14" data-bs-parent="#accordion_4">
                                    <div class="accordion-body">
                                        <p class="mb-0">Our Company structure is made up of CEO, followed by CFO, COO and Secretary <br>
                                            And there are four main operational departments, Programmers (Web Designers & System Developers),
                                            Technicians (IT, Electronics & Electrical), Graphic Designers, and Innovation Hub.
                                            All this departments are under the supervision of COO.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ==============================WHAT WE DO END===================================================== -->

                    <div class="tab-pane fade " id="faq_shared_hosting">
                        <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_1">
                            <div class="accordion-item">

                                <!-- ==========================================OUR MISSION======================================================= -->

                                <div class="accordion-header">
                                    <a href="#sh_1" data-bs-toggle="collapse">Mission Number One </a>
                                </div>
                                <div class="accordion-collapse collapse show" id="sh_1" data-bs-parent="#accordion_1">
                                    <div class="accordion-body">
                                        <p class="mb-0">To provide better, effective, reliable, and affordable services
                                            on Websites & Database Systems development, Domain Registration & Hosting,
                                            Digital Marketing,
                                            Graphic Design & Printing,
                                            CCTV Cameras Supply & Installation, Computerized Maintenance, Networking,
                                            ICT Consultancy & Training.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_2" data-bs-toggle="collapse" class="collapsed">Mission Number Two
                                    </a>
                                </div>
                                <div class="accordion-collapse collapse" id="sh_2" data-bs-parent="#accordion_1">
                                    <div class="accordion-body">
                                        <p class="mb-0">To enhance innovation in our community, and help our Country
                                            solving the socio-economic challenges through technology, by establishing
                                            the Innovation Hub, which will handle and grow up the ideas into an
                                            effectiveness.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_3" data-bs-toggle="collapse" class="collapsed">Mission Number Three
                                    </a>
                                </div>
                                <div class="accordion-collapse collapse" id="sh_3" data-bs-parent="#accordion_1">
                                    <div class="accordion-body">
                                        <p class="mb-0">To build long term relationships with our customers/clients and
                                            provide exceptional customer services by pursuing services through care,
                                            innovation and advanced technology.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_4" data-bs-toggle="collapse" class="collapsed">Mission Number Four
                                    </a>
                                </div>
                                <div class="accordion-collapse collapse" id="sh_4" data-bs-parent="#accordion_1">
                                    <div class="accordion-body">
                                        <p class="mb-0">To create opportunities to the young generation who are in eager
                                            on technological revolution.</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- ==============================OUR MISSION END==================================== -->


                    <!-- =============================OUR OBJECTIVES=======================================  -->
                    <div class="tab-pane fade" id="faq_wp_hosting">
                        <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_2">

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_9" data-bs-toggle="collapse">Objective Number One</a>
                                </div>
                                <div class="accordion-collapse collapse show" id="sh_9" data-bs-parent="#accordion_2">
                                    <div class="accordion-body">
                                        <p class="mb-0">To provide quality services that exceeds the expectations of
                                            esteemed customers.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_10" data-bs-toggle="collapse" class="collapsed">Objective Number Two
                                    </a>
                                </div>
                                <div class="accordion-collapse collapse" id="sh_10" data-bs-parent="#accordion_2">
                                    <div class="accordion-body">
                                        <p class="mb-0">To provide a cheaper and reliable services in all classes
                                            regarding lower or upper class.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_11" data-bs-toggle="collapse" class="collapsed">Objective Number Three
                                    </a>
                                </div>
                                <div class="accordion-collapse collapse" id="sh_11" data-bs-parent="#accordion_2">
                                    <div class="accordion-body">
                                        <p class="mb-0">To make sure we are there any time, when our customers need us.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_12" data-bs-toggle="collapse" class="collapsed">Objective Number Four
                                    </a>
                                </div>
                                <div class="accordion-collapse collapse" id="sh_12" data-bs-parent="#accordion_2">
                                    <div class="accordion-body">
                                        <p class="mb-0">Ensuring super quality services that will maintain our relation
                                            with our honored customers is provided.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_13" data-bs-toggle="collapse" class="collapsed">Objective Number Five
                                    </a>
                                </div>
                                <div class="accordion-collapse collapse" id="sh_13" data-bs-parent="#accordion_2">
                                    <div class="accordion-body">
                                        <p class="mb-0">Maintaining truth and preserve the customer’s security and
                                            privacy.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_14" data-bs-toggle="collapse" class="collapsed">Objective Number Six
                                    </a>
                                </div>
                                <div class="accordion-collapse collapse" id="sh_14" data-bs-parent="#accordion_2">
                                    <div class="accordion-body">
                                        <p class="mb-0">Bringing the societies together by motivating them through
                                            innovation, and provide consultancy on issues of technology, this will help
                                            the Company being closer to the societies and result a positive outcomes to
                                            our Country.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- =============================OUR OBJECTIVES END============================================================ -->

                    <!-- ============================OUR VISION=====================================================================-->

                    <div class="tab-pane fade" id="faq_vps_hosting">
                        <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_3">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_12" data-bs-toggle="collapse">Our Vision</a>
                                </div>
                                <div class="accordion-collapse collapse show" id="sh_12" data-bs-parent="#accordion_3">
                                    <div class="accordion-body">
                                        <p class="mb-0"> <b>Our Vision</b>"is to become the leading ICT Company in
                                            Zanzibar and
                                            then opening more branches in Tanzania Mainland, which provides the better,
                                            affordable and efficient ICT services, which satisfy the clients’ needs".
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ===============================OUR VISION ENDS========================================================== -->



                    <!-- ==================================================ORGANOGRAPH============================ -->
                    <div class="tab-pane fade" id="faq_could_hosting-admin">
                        <div class="accordion hm2-accordion rounded-2 deep-shadow bg-white" id="accordion_4">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#sh_14" data-bs-toggle="collapse">Our Organograph
                                    </a>
                                </div>
                                <div class="accordion-collapse collapse show" id="sh_14" data-bs-parent="#accordion_4">
                                    <div class="accordion-body">
                                        <p class="mb-0">We are specialized in ICT solution that relate to Website
                                            design,
                                            Database system development, Domain registration & Hosting, Digital
                                            marketing,
                                            Graphic design and Printing, CCTV Supply & Installation,
                                            Hardware maintenance, Networking, ICT Consultancy & Training.
                                            We also develop innovative ideas and make them happen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ==================================================ORGANOGRAPH END============================ -->


                </div>

            </div>
        </div>
    </section>
    <!--faq section end-->


    <!--recent works start-->
<section class="gh-server ptb-120 gh-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="gh-section-title text-center">
                    <div class="section-title text-center">
                        <h2 class="mb-3">Recent Works</h2>
                        <p>We are proud of who we are, but we are nothing without our Customers <br> It is always our pleasure doing business with you!.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gh-game-server mt-5">
            <div class="gh-filter-top mb-40 d-flex align-items-center justify-content-center justify-content-lg-between flex-wrap">
            </div>

            <div class="row g-3 gh-filter-items" style="overflow-x: auto; white-space: nowrap;">


                <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                    <div class="gh-single-game position-relative overflow-hidden rounded-2" style="max-width: 150px;">
                        <img src="assets/img/game-hosting/Hyatt.jpg" alt="not found" class="img-fluid rounded-2" style="width: 100%; height: auto;">
                        <div class="gh-single-game-content text-center position-absolute">
                            <h6 class="text-white mb-0">Hyatt</h6>
                            <span class="text-white d-block">CCTV Camera </span>
                            <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                        </div>
                    </div>
                </div>
                <!-- Add more recent works items here -->
                <div class="col-xl-3 col-lg-4 col-md-6 es_sports sims ea_original">
                    <div class="gh-single-game position-relative overflow-hidden rounded-2" style="max-width: 150px;">
                        <img src="assets/img/game-hosting/ZAA.jpg" alt="not found" class="img-fluid rounded-2" style="width: 100%; height: auto;">
                        <div class="gh-single-game-content text-center position-absolute">
                            <h6 class="text-white mb-0">Zanzibar Airport Authority</h6>
                            <span class="text-white d-block">Access Control</span>
                            <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                        </div>
                    </div>
                </div>
                <!-- Add more recent works items here -->
                <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                    <div class="gh-single-game position-relative overflow-hidden rounded-2" style="max-width: 150px;">
                        <img src="assets/img/game-hosting/Hyatt.jpg" alt="not found" class="img-fluid rounded-2" style="width: 100%; height: auto;">
                        <div class="gh-single-game-content text-center position-absolute">
                            <h6 class="text-white mb-0">Hyatt</h6>
                            <span class="text-white d-block">CCTV Camera </span>
                            <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</section>
<!--recent works end-->



    <!--recent works start-->
    <section class="gh-server ptb-120 gh-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="gh-section-title text-center">
                        <div class="section-title text-center">
                            <h2 class="mb-3">Recent Works</h2>
                            <p>We are proud of who we are, but we are nothing without our Customers <br> It
                                is always our pleasure doing business with you!.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gh-game-server mt-5">
                <div class="gh-filter-top mb-40 d-flex align-items-center justify-content-center justify-content-lg-between flex-wrap">


                </div>
                <div class="row g-3 gh-filter-items">
                    <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                        <div class="gh-single-game position-relative overflow-hidden rounded-2">
                            <img src="assets/img/game-hosting/Hyatt.jpg" alt="not found" class="img-fluid rounded-2">

                            <div class="gh-single-game-content text-center position-absolute">
                                <h6 class="text-white mb-0">Hyatt</h6>
                                <span class="text-white d-block">CCTV Camera </span>
                                <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 es_sports sims ea_original">
                        <div class="gh-single-game position-relative overflow-hidden rounded-2">
                            <img src="assets/img/game-hosting/ZAA.jpg" alt="not found" class="img-fluid rounded-2">

                            <div class="gh-single-game-content text-center position-absolute">
                                <h6 class="text-white mb-0">Zanzibar Airport Authority</h6>
                                <span class="text-white d-block">Access Control</span>
                                <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                        <div class="gh-single-game position-relative overflow-hidden rounded-2">
                            <img src="assets/img/game-hosting/Zafayco.jpg" alt="not found" class="img-fluid rounded-2">

                            <div class="gh-single-game-content text-center position-absolute">
                                <h6 class="text-white mb-0">ZAFAYCO</h6>
                                <span class="text-white d-block">Website & Printing</span>
                                <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 es_sports">
                        <div class="gh-single-game position-relative overflow-hidden rounded-2">
                            <img src="assets/img/game-hosting/fun beach.jpg" alt="not found" class="img-fluid rounded-2">

                            <div class="gh-single-game-content text-center position-absolute">
                                <h6 class="text-white mb-0">Fun Beach Hotel</h6>
                                <span class="text-white d-block">CCTV Camera Installation</span>
                                <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                        <div class="gh-single-game position-relative overflow-hidden rounded-2">
                            <img src="assets/img/game-hosting/Golden Tulip.jpg" alt="not found" class="img-fluid rounded-2">

                            <div class="gh-single-game-content text-center position-absolute">
                                <h6 class="text-white mb-0">Golden Tulip</h6>
                                <span class="text-white d-block">CCTV Camera</span>
                                <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 es_sports ea_original">
                        <div class="gh-single-game position-relative overflow-hidden rounded-2">
                            <img src="assets/img/game-hosting/Kena Beach.jpg" alt="not found" class="img-fluid rounded-2">

                            <div class="gh-single-game-content text-center position-absolute">
                                <h6 class="text-white mb-0">Kena Beach Hotel</h6>
                                <span class="text-white d-block">CCTV Camera</span>
                                <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 sims">
                        <div class="gh-single-game position-relative overflow-hidden rounded-2">
                            <img src="assets/img/game-hosting/Vivid Dream.jpg" alt="not found" class="img-fluid rounded-2">

                            <div class="gh-single-game-content text-center position-absolute">
                                <h6 class="text-white mb-0">Vivid Dream School</h6>
                                <span class="text-white d-block">Graphic Design & Printing</span>
                                <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 sims es_sports">
                        <div class="gh-single-game position-relative overflow-hidden rounded-2">
                            <img src="assets/img/game-hosting/Vogor.jpg" alt="not found" class="img-fluid rounded-2">

                            <div class="gh-single-game-content text-center position-absolute">
                                <h6 class="text-white mb-0">Vigor</h6>
                                <span class="text-white d-block">ict services</span>
                                <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--recent works end-->


    <!--feedback section start-->
    <section class="feedback-section mt-5 bg-primary-gradient pt-120 position-relative overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="feedbackt-top text-center">
                        <h2>Testimonials</h2>
                        <p>We truly cannot say enough about the level of customer service that hasnet Ict Solution
                            provides <br>
                            it's always a great experience, with very personable and helpful support.</p>
                    </div>
                </div>
            </div>
            <div class="feedback-wrapper mt-30">
                <div class="row g-4 feedback-massonry">

                    <div class="col-lg-4 col-md-6">
                        <div class="feedback-single bg-white rounded-2 position-relative">
                            <img src="assets/img/shapes/quote-icon.svg" alt="quote" class="position-absolute quote-icon">
                            <div class="feedback-top d-flex align-items-center">
                                <img src="assets/img/client-1.png" alt="client" class="img-fluid rounded-circle flex-shrink-0">
                                <div class="feedback-top-content ms-3">
                                    <h5>Edi Moyo</h5>
                                    <img src="assets/img/two-star.svg" alt="3 star" class="img-fluid">
                                </div>
                            </div>
                            <p class="feedback-comment mt-30 mb-30">"If I was supposed to give you a test for customer
                                care competence, you have won it already!."</p>
                            <img src="assets/img/brands/stamps.png" alt="not found" class="img-fluid">
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6">
                        <div class="feedback-single bg-white rounded-2 position-relative">
                            <img src="assets/img/shapes/quote-icon.svg" alt="quote" class="position-absolute quote-icon">
                            <div class="feedback-top d-flex align-items-center">
                                <img src="assets/img/client-1.png" alt="client" class="img-fluid rounded-circle flex-shrink-0">
                                <div class="feedback-top-content ms-3">
                                    <h5>Olve Paul</h5>
                                    <img src="assets/img/two-star.svg" alt="3 star" class="img-fluid">
                                </div>
                            </div>
                            <p class="feedback-comment mt-30 mb-30">"Professionalism, Quality, Responsiveness, Value
                                HASNET ICT SOLUTION are very reliable and absolutely supportive.
                                I worked with them for a while and I can assure anyone who want their service to look for them.

                                They are very accessible all the time, their response, quality of service, reasonable prices, delivery of spares they are top."</p>
                            <img src="assets/img/brands/stamps.png" alt="not found" class="img-fluid">
                        </div>
                    </div>



                    <div class="col-lg-4 col-md-6">
                        <div class="feedback-single bg-white rounded-2 position-relative">
                            <img src="assets/img/shapes/quote-icon.svg" alt="quote" class="position-absolute quote-icon">
                            <div class="feedback-top d-flex align-items-center">
                                <img src="assets/img/client-1.png" alt="client" class="img-fluid rounded-circle flex-shrink-0">
                                <div class="feedback-top-content ms-3">
                                    <h5>Abdi Soud</h5>
                                    <img src="assets/img/two-star.svg" alt="3 star" class="img-fluid">
                                </div>
                            </div>
                            <p class="feedback-comment mt-30 mb-30">"If I were to choose the future technology Company
                                in Zanzibar, you guys have transformed the course!"</p>
                            <img src="assets/img/brands/stamps.png" alt="not found" class="img-fluid">
                        </div>
                    </div>

                    

                  
                    
                   
                    
                   
                    
                </div>
            </div>
        </div>

    </section>
    <!--feedback section end-->

    <?php
    require_once("./footer.php");
    ?>