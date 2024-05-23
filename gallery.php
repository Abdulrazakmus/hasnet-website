
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
        <section class="gh-hero-section overflow-hidden gh-section-overlay" data-background="assets/img/game-hosting/hero-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center order-2 order-lg-1">
                        <div class="gh-hero-left">
                            <h1 class="display-3 fw-bold gh-heading mb-4"> Transforming     <br> Visions into Reality</h1>
                            <ul class="gh-hero-list gh-heading">
                                <li><span class="me-3"><i class="fa-solid fa-check"></i></span>Customer Satisfaction Focus</li>
                                <li><span class="me-3"><i class="fa-solid fa-check"></i></span>Adaptability and Learning</li>
                                <li><span class="me-3"><i class="fa-solid fa-check"></i></span>Efficient Problem-Solving</li>
                                <li><span class="me-3"><i class="fa-solid fa-check"></i></span>Clear Communication</li>
                            </ul>
                            <div class="gh-hero-btns d-flex align-items-center flex-wrap mt-5">
                                <a href="#start" class="template-btn gh-primary-btn">Get Started</a>
                                <a href="features.php" class="template-btn gh-outline-btn">What do I Get?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="gh-hero-right position-relative mb-60 mb-lg-0">
                            <img src="assets/img/game-hosting/hero.png" alt="not found" class="img-fluid">
                            <div class="gh-hero-box">
                                <img src="assets/img/logo-white-2.png" alt="not found" class="img-fluid">
                                <p class="mt-2 mb-0">"Turning Ideas into Tech Realities, One Innovation at a Time" <a href="#" class="text-white fw-bold"></a></p>
                                <div class="gh-hero-box-border"></div>
                            </div>
                            <span class="gh-hero-box-circle"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--game server start-->
        <section class="gh-server ptb-120 gh-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="gh-section-title text-center">
                            <h2 id="start" class="mb-3 gh-heading">Among Our Clients</h2>
                            <p class="gh-text mb-0">Efficiently redefine high-quality potentialities rather than innovative ideas. accurate infomediaries with high-payoff technology.</p>
                        </div>
                    </div>
                </div>
                <div class="gh-game-server mt-5">
                    <!-- <div class="gh-filter-top mb-40 d-flex align-items-center justify-content-center justify-content-lg-between flex-wrap">
                        <div class="gh-filter-controls button-group filter-button-group text-center text-lg-start">
                            <button data-filter="*" class="active">All<sup>100+</sup></button>
                            <button data-filter=".es_sports">Private Sectors<sup>50+</sup></button>
                            <button data-filter=".star_wars">Government Sectors<sup>20+</sup></button>
                            <button data-filter=".sims">NGO's<sup>10+</sup></button>
                        </div>
                        <div class="gh-filter-search">
                            <form>
                                <button type="submit" class="me-2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                <input type="text" placeholder="Search...">
                            </form>
                        </div>
                    </div> -->

                    <div class="row g-3 gh-filter-items">

                        <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/fun beach.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="https://fun-zanzibar.com/" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/Vivid Dream.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="https://vividdreamschools.or.tz/" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/jafferji.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="https://www.jafferjibeachretreat.com/" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/Zpra.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="https://www.zpra.go.tz/" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/Dnata.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="https://www.dnata.com/en" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-4 col-md-6 es_sports sims ea_original">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/Golden Tulip.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="https://www.goldentulip.com/en-us/our-hotels/?sr=SEAGOOGLEGTEN&gclsrc=aw.ds&gad_source=1&kClkId=240220092207634714&kVsId=240220092207637915&gclid=CjwKCAiAuNGuBhAkEiwAGId4al1YXj9N2QJCpkdfVZFYQwRFu0hZctfoAR17eXVdPX0uX8QkG0LjWhoCV1oQAvD_BwE" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/ZAA.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="https://www.zaa.go.tz/" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 es_sports">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/Zafayco.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="https://zafayco.or.tz/" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 star_wars ea_original">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/Kena Beach.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="https://www.kenazanzibar.com/" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 es_sports ea_original">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/Hyatt.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="https://www.hyatt.com/en-US/hotel/tanzania/park-hyatt-zanzibar/znzph?&src=bbm_sem_bbm_search_google_eame_rooms_brand_eng_Tanzania_Zanzibar_Park%20Hyatt_ZNZPH_Park%20Hyatt%20Zanzibar_hyatt%20zanzibar&mckv=s-dc_pcrid_690742552041_mtid_5297kx13790&gad_source=1&gclid=CjwKCAiAuNGuBhAkEiwAGId4apJhvGwKJ-WOoO0Ndu5BWCjFp6IlLw79WkDKsJzfvbQ5xslOWk0X_hoC8vYQAvD_BwE&gclsrc=aw.ds" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 sims">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/Vogor.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="#" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 sims es_sports">
                            <div class="gh-single-game position-relative overflow-hidden rounded-2">
                                <img src="assets/img/game-hosting/halotel.jpg" alt="not found" class="img-fluid rounded-2">
                                
                                <div class="gh-single-game-content text-center position-absolute">
                                    <h6 class="text-white mb-0">Loading Details...</h6>
                                    <a href="https://halotel.co.tz/" class="template-btn gh-primary-btn mt-3 btn-small">Explore More</a>
                                </div>
                            </div>
                        </div>
                       
                        
                       
                    </div>
                    <div class="gh-load-more-btn text-center mt-60">
                        <a href="#" class="template-btn gh-primary-btn"><span class="me-2"><i class="fa-solid fa-spinner"></i></span>Load More</a>
                    </div>
                </div>
            </div>
        </section>
        <!--game server end-->

    
 <!-- Footer -->
 <?php
    require_once("./footer.php");
    ?>