
<?php 
require_once("./links.php");
?>

<!--title-->
<title>Portfolio : Hasnet ICT Solution</title>
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

        <!--hero section start-->
        <section class="gh-hero-section overflow-hidden" data-background="assets/img/game-hosting/hero-bg-1.jpg" style="height:65vh;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6 align-self-center order-2 order-lg-1">
                        <div class="gh-hero-left mt-5">
                            <h1 class="display-3 fw-bold gh-heading mb-4"> Transforming     <br> Visions into Reality</h1>
                            <ul class="gh-hero-list gh-heading">
                                <li><span class="me-3"><i class="fa-solid fa-check"></i></span>Customer Satisfaction Focus</li>
                                <li><span class="me-3"><i class="fa-solid fa-check"></i></span>Adaptability and Learning</li>
                                <li><span class="me-3"><i class="fa-solid fa-check"></i></span>Efficient Problem-Solving</li>
                                <li><span class="me-3"><i class="fa-solid fa-check"></i></span>Clear Communication</li>
                            </ul>
                            <div class="gh-hero-btns d-flex align-items-center flex-wrap mt-5">
                                <!-- <a href="#start" class="template-btn gh-primary-btn">Get</a> -->

                                 <!-- Get Quote Button -->
                          
 <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <b>Get Quote</b>
                              
                            </button>

                            <!-- Get Quote Button -->



                                <!-- <a href="features.php" class="template-btn gh-outline-btn">Say Hello</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 order-1 order-lg-2">
                        <div class="gh-hero-right position-relative mb-60 mb-lg-0">

                            <img src="assets/img/game-hosting/hero.png" alt="not found" class="img-fluid">

                            <div class="gh-hero-box">
                                <img src="assets/img/logo-white-2.png" alt="not found" class="img-fluid">
                                <p class="mt-2 mb-0">"Turning Ideas into Tech Realities, One Innovation at a Time" <a href="#" class="text-white fw-bold"></a></p>
                                <div class="gh-hero-box-border"></div>
                            </div>
                            <span class="gh-hero-box-circle"></span>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--hero section end-->

        

                  


  <!-- Add this section where you want to display the skill sliders -->
<section class="skills-section pt-90 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-title text-center">
                    <h2>Our Skills</h2>
                    <p>Our crew is a family of different expertise from variety of fields, mainly science.

</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <!-- Skill 1 -->
            <div class="col-md-6 mb-4">
                <h4>Engineering</h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 0%; animation: progress-animation-1 2s forwards; background-color: #ff6347;">95%</div>
                </div>
            </div>
            <!-- Skill 2 -->
            <div class="col-md-6 mb-4">
                <h4>Programming</h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0%; animation: progress-animation-2 2s forwards; background-color: #27235f;">85%</div>
                </div>
            </div>
            <!-- Skill 3 -->
            <div class="col-md-6 mb-4">
                <h4>Graphic Designing</h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0%; animation: progress-animation-3 2s forwards; background-color: #666666;">80%</div>
                </div>
            </div>
            <!-- Skill 4 -->
            <div class="col-md-6 mb-4">
                <h4>Electrical</h4>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%; animation: progress-animation-4 2s forwards; background-color: #ffa07a;">70%</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inline CSS -->
<style>
    /* Add this CSS to your HTML */
    @keyframes progress-animation-1 {
        from {
            width: 0%;
        }
        to {
            width: 95%;
        }
    }

    @keyframes progress-animation-2 {
        from {
            width: 0%;
        }
        to {
            width: 85%;
        }
    }

    @keyframes progress-animation-3 {
        from {
            width: 0%;
        }
        to {
            width: 80%;
        }
    }

    @keyframes progress-animation-4 {
        from {
            width: 0%;
        }
        to {
            width: 70%;
        }
    }
</style>



 <!--faq section start-->
 <section class="ds-faq pb-120 ds-bg mt-10">
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
                                        <p class="mb-0">We specialize in comprehensive ICT solutions, including website design, database system development, domain registration & hosting, digital marketing, graphic design and printing, CCTV supply & installation, networking, ICT consultancy & training. With a focus on innovation, we turn ideas into reality.</p>
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
                                        <p class="mb-0">To provide a affordable and reliable services in all classes
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
                                            with our honored customers.</p>
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
                                        <p class="mb-0"> <b>Our Vision </b>"is to become the leading ICT Company in
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
                                        <p class="mb-0">Our Company structure is made up of General Manager (GM) along with Assistant (GM), followed by Operation Manager (OM) and Finance Manager (FM). <br>
                                            And there are three main operational departments; Engineering, Software and Printing Department. Our Team is made up of Engineers, Technicians (IT and Electrical), Programmers and Graphic Designers.</p>
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







    
 <!-- Footer -->
 <?php
    require_once("./footer.php");
    ?>