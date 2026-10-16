        <?php
            include_once ('elements/header.php')
        ?>

         <!-- Breadcrumb Section Start -->
        <section class="breadcrumb-wrapper bg-cover fix" style="background-image: url(assets/img/inner-page/breadcroumb.jpg);">
            <div class="shape-1 float-bob-y">
                <img src="assets/img/inner-page/shape-1.png" alt="img">
            </div>
            <div class="shape-2 float-bob-x">
                <img src="assets/img/inner-page/shape-2.png" alt="img">
            </div>
            <div class="container">
                <div class="page-heading">
                    <ul class="breadcrumb-list wow fadeInUp">
                        <li>Home</li>
                        <li>//</li>
                        <li>Contact Us</li>
                    </ul>
                    <h1 class="breadcrumb-title text-anim">Contact Us</h1>
                </div>
            </div>
        </section>

        
        <!-- Contact Section Start -->
        <section class="contact-info-section section-padding fix">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-info-box">
                            <div class="shape-1">
                                <img src="assets/img/inner-page/contact-shape.png" alt="img">
                            </div>
                            <div class="contact-top">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h3>Mail us 24/7</h3>
                            </div>
                            <p>
                                <a href="mailto:agron@gmail.com">agron@gmail.com</a>
                            </p>
                            <p>
                                <a href="supportagron@gmail.com">supportagron@gmail.com</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="contact-info-box">
                            <div class="shape-1">
                                <img src="assets/img/inner-page/contact-shape.png" alt="img">
                            </div>
                            <div class="contact-top">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <h3>Call Us Anytime</h3>
                            </div>
                            <p>
                                <a href="tel:(+55)7320618278">Phone : (+55) 732 - 061 - 8278</a>
                            </p>
                            <p>
                                <a href="tel:+69009494094">Mobile : (+01) 647 - 448 - 3065</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="contact-info-box">
                            <div class="shape-1">
                                <img src="assets/img/inner-page/contact-shape.png" alt="img">
                            </div>
                            <div class="contact-top">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h3>Our Location</h3>
                            </div>
                            <p>
                                4821 Ride Top, Anch St, Alaska <br> 997998, USA main city.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section Start --> 
        <section class="contact-section section-bg fix">
            <div class="shape-1 float-bob-x">
                <img src="assets/img/home-1/contact-shape.png" alt="img">
            </div>
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-6">
                            <div class="contact-content">
                                <div class="section-title mb-0">
                                    <span class="wow fadeInUp"><img src="assets/img/sub-title.svg" alt="img">Contact With Us</span>
                                    <h2>Contact Us for Organic <br> and Natural Products</h2>
                                </div>
                                <form action="contact.php" id="contact-form" class="contact-form-box">
                                    <div class="row g-4 align-items-center justify-content-center">
                                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Enter email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email2" placeholder="Enter name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                            <div class="form-clt">
                                                <input type="text" name="phone" id="phone" placeholder="Your name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <input type="text" name="subject" id="subject" placeholder="Phone number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <input type="text" name="subject" id="subject2" placeholder="Your subject">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8s">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Write a message..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                            <div class="contact-button">
                                                <button type="submit" class="theme-btn">
                                                Send Your Message
                                                    <i class="far fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-image">
                                <img src="assets/img/inner-page/contact-image.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Contact Map Section Start -->
        <div class="map-section-contact">
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>


        <!-- Gallery Section Start -->
        <div class="gallery-section-4 section-padding fix pt-0 section-bg">
            <div class="swiper gallery-slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="gallery-image-4">
                            <img src="assets/img/home-4/gallery/gallery-01.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image-4">
                            <img src="assets/img/home-4/gallery/gallery-02.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image-4">
                            <img src="assets/img/home-4/gallery/gallery-03.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image-4">
                            <img src="assets/img/home-4/gallery/gallery-04.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image-4">
                            <img src="assets/img/home-4/gallery/gallery-05.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image-4">
                            <img src="assets/img/home-4/gallery/gallery-06.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
            include_once ('elements/footer.php')
        ?>