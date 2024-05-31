<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("./links.php"); ?>
    <title>Contact : Hasnet ICT Solution</title>
</head>
<body>

    <!-- Dark light switcher -->
    <button class="dark-light-switcher" id="theme-switch">
        <span class="light-sun"><i class="fa-solid fa-sun"></i></span>
        <span class="dark-moon"><i class="fa-solid fa-moon"></i></span>
    </button>

    <!-- Body overlay -->
    <div class="body-overlay"></div>

    <!-- Scrolltop button -->
    <button class="scrolltop-btn"><i class="fa-solid fa-angle-up"></i></button>

    <!-- Header -->
    <?php
        require_once("./header.php");
        require_once("./modal.php");
    ?>
    <!-- Header ends here -->

    <!-- Breadcrumb area start -->
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
    <!-- Breadcrumb area end -->

    <!-- Contact form -->
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
                <form id="contactForm" class="contact-us-form">
                    <input type="hidden" name="form_type" value="contact_form">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" placeholder="Enter name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" placeholder="Enter email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="phone">Phone</label>
                                        <input type="text" name="phone" id="phone" placeholder="Enter phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-field">
                                        <label for="subject">Subject</label>
                                        <input type="text" name="subject" id="subject" placeholder="Enter subject" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <label for="message">Message</label>
                                        <textarea name="message" id="message" placeholder="Write Message" rows="5" required></textarea>
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
    <!-- Contact form end -->

    <!-- Google Maps Embed -->
    <section class="google-maps-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63465.48000520644!2d39.195812937187114!3d-6.185253480970965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x185cda1a55555555%3A0xdd93c25065d2cb68!2sHASNET%20ICT%20SOLUTION%2C%20Taveta%20Zanzibar%2C%203302%2C%20Tanzania!3m2!1d-6.185340399999999!2d39.237012299999996!4m5!1s0x185cda1a55555555%3A0xdd93c25065d2cb68!2sHASNET%20ICT%20SOLUTION%2C%20Taveta%20Zanzibar%2C%203302%2C%20Tanzania!3m2!1d-6.185340399999999!2d39.237012299999996!5e0!3m2!1sen!2stz!4v1717154082733!5m2!1sen!2stz" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- End Google Maps Embed -->

    <!-- Footer -->
    <?php require_once("./footer.php"); ?>

    <!-- JavaScript for form submission and popup message -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Form data
            var formData = new FormData(this);

            // AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "send_email.php", true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    alert("Message sent successfully!");
                } else {
                    alert("Failed to send message.");
                }
            };
            xhr.onerror = function() {
                alert("An error occurred while sending the message.");
            };
            xhr.send(formData);
        });
    </script>
</body>
</html>
