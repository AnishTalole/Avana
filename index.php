<?php
define("BASE_URL", "http://localhost/Avana/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="styles/styles.css">

    <title>Avana</title>
</head>
<body>

<section class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-flex flex-wrap gap-4" id="mobile-topbar">
                        <span><i class="fas fa-phone me-2"></i>Phone: +440-98-5298</span>
                        <span><i class="fas fa-envelope me-2"></i>Email: info@example.com</span>
                        <span><i class="fas fa-clock me-2"></i>Opening Hours: 08:00am to 06:00pm</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social-icons text-end">
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg odhomz-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/avana-logo.png" alt="Avana Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Elements</a></li>
                </ul>
                <button class="btn btn-appointment">Book An Appointment</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row min-vh-80 align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h1>Live Like Your<br>Own Home</h1>
                        <p>Lorem ipsum dolor sit tempor molestie amet consectetur adipiscing<br>mollis laoreet quisque cubilia facilisi imperdiet</p>
                        <button class="btn btn-learn-more">Learn More</button>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="play-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="senior-care-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 position-relative">
                <div class="image-container">
                    <img src="assets/img/senior-care.jpg" alt="Senior Care" class="img-fluid rounded">
                    <button class="play-button">
                        <i class="fas fa-play"></i>
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="content-wrapper ps-lg-4 mt-4 mt-lg-0">
                    <span class="welcome-text">Welcome To Best Senior Care Center</span>
                    <h1 class="main-heading">We Make A Difference In Senior Lives</h1>
                    <p class="description">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered ligula lacus eget in some form, by injected humour or randomised
                    </p>
                    <ul class="feature-list">
                        <li>Nsectetur cing elit</li>
                        <li>Suspe ndisse suscit sagittis leo</li>
                        <li>If you are going to use pasage</li>
                        <li>Generators on the to repeat</li>
                        <li>Suspe ndisse suscit sagittis leo</li>
                    </ul>
                    <div class="contact-card">
                        <div class="phone-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h3>Clarify your queries call us now</h3>
                        <div class="phone-number">666 888 0000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section py-5">
    <div class="container">
        <!-- Service Cards -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="service-card">
                    <div class="card-accent"></div>
                    <div class="service-icon">
                        <img src="/path-to-resident-icon.svg" alt="Resident Care Icon">
                    </div>
                    <h3>Resident Care</h3>
                    <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <div class="card-accent"></div>
                    <div class="service-icon">
                        <img src="/path-to-hospice-icon.svg" alt="Hospice Care Icon">
                    </div>
                    <h3>Hospice Care</h3>
                    <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-card">
                    <div class="card-accent"></div>
                    <div class="service-icon">
                        <img src="/path-to-staff-icon.svg" alt="Caring Staff Icon">
                    </div>
                    <h3>Caring Staff</h3>
                    <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="types-of-care py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="service-subtitle">Our Service List</span>
            <h2 class="service-title">Types Of Care</h2>
        </div>

        <div class="care-slider position-relative">
            <div class="swiper-container swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="care-card">
                            <div class="care-image">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-WzK5iyA1LTlVQVzgefs09cl1nNeM9E.png" alt="Assisted Living Care" class="img-fluid">
                                <span class="slide-number">01</span>
                            </div>
                            <div class="care-content">
                                <h3>Assisted Living</h3>
                                <p>We are committed to providing quality care.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="care-card">
                            <div class="care-image">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-WzK5iyA1LTlVQVzgefs09cl1nNeM9E.png" alt="Skilled Nursing Care" class="img-fluid">
                                <span class="slide-number">02</span>
                            </div>
                            <div class="care-content">
                                <h3>Skilled Nursing</h3>
                                <p>We are committed to providing quality care.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="care-card">
                            <div class="care-image">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-WzK5iyA1LTlVQVzgefs09cl1nNeM9E.png" alt="Senior Citizen Care" class="img-fluid">
                                <span class="slide-number">03</span>
                            </div>
                            <div class="care-content">
                                <h3>Senior Citizen</h3>
                                <p>We are committed to providing quality care.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 (New) -->
                    <div class="swiper-slide">
                        <div class="care-card">
                            <div class="care-image">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-WzK5iyA1LTlVQVzgefs09cl1nNeM9E.png" alt="Memory Care" class="img-fluid">
                                <span class="slide-number">04</span>
                            </div>
                            <div class="care-content">
                                <h3>Memory Care</h3>
                                <p>Providing specialized support for memory-related conditions.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 5 (New) -->
                    <div class="swiper-slide">
                        <div class="care-card">
                            <div class="care-image">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-WzK5iyA1LTlVQVzgefs09cl1nNeM9E.png" alt="Respite Care" class="img-fluid">
                                <span class="slide-number">05</span>
                            </div>
                            <div class="care-content">
                                <h3>Respite Care</h3>
                                <p>Short-term care to provide relief for family caregivers.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 6 (New) -->
                    <div class="swiper-slide">
                        <div class="care-card">
                            <div class="care-image">
                                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-WzK5iyA1LTlVQVzgefs09cl1nNeM9E.png" alt="Hospice Care" class="img-fluid">
                                <span class="slide-number">06</span>
                            </div>
                            <div class="care-content">
                                <h3>Hospice Care</h3>
                                <p>Providing compassionate end-of-life care with dignity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="slider-nav prev">
                <i class="fas fa-arrow-left"></i>
            </button>
            <button class="slider-nav next">
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>



<section class="events-section">
    <div class="row g-0">
        <!-- Left Image Section -->
        <div class="col-lg-6">
            <div class="events-image">
                <img src="assets/img/events-section-img.jpg" alt="Senior Care" class="img-fluid w-100 h-100 object-fit-cover">
            </div>
        </div>

        <!-- Right Content Section -->
        <div class="col-lg-6">
            <div class="events-content">
                <!-- Event Card 1 -->
                <div class="event-card d-flex align-items-center gap-4 mb-4">
                    <div class="event-thumbnail">
                        <img src="/placeholder-event1.jpg" alt="Event 1" class="rounded-circle">
                    </div>
                    <div class="event-details">
                        <div class="event-date">Sat Dec 21</div>
                        <h3 class="event-title">Inspiration For The World</h3>
                        <p class="event-description">
                            We are calling all Super heroes to run, walk, push, pedal, hand cycle, swim or tow in this fantastic, all-inclusive family event!
                        </p>
                    </div>
                </div>

                <!-- Event Card 2 -->
                <div class="event-card d-flex align-items-center gap-4">
                    <div class="event-thumbnail">
                        <img src="/placeholder-event2.jpg" alt="Event 2" class="rounded-circle">
                    </div>
                    <div class="event-details">
                        <div class="event-date">Sat Dec 21</div>
                        <h3 class="event-title">Meat Shots For Hungry</h3>
                        <p class="event-description">
                            We are calling all Super heroes to run, walk, push, pedal, hand cycle, swim or tow in this fantastic, all-inclusive family event!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="gallery-section py-5">
    <!-- Image Gallery Carousel -->
    <div id="careGallery" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-p9zJuQyVMQJhR4RdBUKT2jQmsCka1g.png" class="d-block w-100" alt="Senior Care Moment 1">
            </div>
            <div class="carousel-item">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-p9zJuQyVMQJhR4RdBUKT2jQmsCka1g.png" class="d-block w-100" alt="Senior Care Moment 2">
            </div>
            <div class="carousel-item">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-p9zJuQyVMQJhR4RdBUKT2jQmsCka1g.png" class="d-block w-100" alt="Senior Care Moment 3">
            </div>
            <div class="carousel-item">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-p9zJuQyVMQJhR4RdBUKT2jQmsCka1g.png" class="d-block w-100" alt="Senior Care Moment 4">
            </div>
            <div class="carousel-item">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-p9zJuQyVMQJhR4RdBUKT2jQmsCka1g.png" class="d-block w-100" alt="Senior Care Moment 5">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#careGallery" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#careGallery" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Partners Logo Section -->
    <div class="partners-section container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
                <div class="partner-logo">
                    <img src="/path-to-sumit-logo.svg" alt="Sumit Logo" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
                <div class="partner-logo">
                    <img src="/path-to-mountain-logo.svg" alt="Mountain Logo" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
                <div class="partner-logo">
                    <img src="/path-to-circle-logo.svg" alt="Circle Logo" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
                <div class="partner-logo">
                    <img src="/path-to-identity-logo.svg" alt="Identity Logo" class="img-fluid">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
                <div class="partner-logo">
                    <img src="/path-to-globe-logo.svg" alt="Globe Logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="footer-main py-5">
        <div class="container">
            <div class="row">
                <!-- Company Info -->
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="footer-company">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-YdLpSyivWNNuxfQ7bfebVPxZUXH22l.png" alt="ODHomz Logo" class="footer-logo mb-3">
                        <p class="footer-address">
                            203, Envato Labs, Behind Alis Steet,<br>
                            Melbourne along the information close<br>
                            the loop on focusing
                        </p>
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Explore Links -->
                <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                    <h3 class="footer-title">Explore</h3>
                    <ul class="footer-links">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Latest News</a></li>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Types of Cares</a></li>
                        <li><a href="#">FAQ's</a></li>
                    </ul>
                </div>

                <!-- Types of Cares -->
                <div class="col-6 col-lg-2 mb-4 mb-lg-0">
                    <h3 class="footer-title">Types of Cares</h3>
                    <ul class="footer-links">
                        <li><a href="#">Senior Citizen</a></li>
                        <li><a href="#">Residential Care</a></li>
                        <li><a href="#">Assisted Living</a></li>
                        <li><a href="#">Skilled Nursing</a></li>
                        <li><a href="#">Personal Care</a></li>
                    </ul>
                </div>

                <!-- Latest News -->
                <div class="col-lg-5">
                    <h3 class="footer-title">Latest News</h3>
                    <div class="news-items">
                        <!-- News Item 1 -->
                        <div class="news-item d-flex align-items-center gap-3 mb-3">
                            <div class="news-thumb">
                                <img src="/path-to-news-image1.jpg" alt="News Thumbnail" class="rounded-circle">
                            </div>
                            <div class="news-content">
                                <h4><a href="#">How To Protect Seniors From Falls</a></h4>
                                <span class="news-date">June 5, 2021</span>
                            </div>
                        </div>
                        <!-- News Item 2 -->
                        <div class="news-item d-flex align-items-center gap-3">
                            <div class="news-thumb">
                                <img src="/path-to-news-image2.jpg" alt="News Thumbnail" class="rounded-circle">
                            </div>
                            <div class="news-content">
                                <h4><a href="#">Additional Services will Help Senior</a></h4>
                                <span class="news-date">June 5, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-md-0">
                    <div class="contact-info d-flex flex-wrap gap-4">
                        <span><i class="fas fa-map-marker-alt me-2"></i>121 King Street, Melbourne</span>
                        <span><i class="fas fa-phone me-2"></i>Tel: +440-88-5298</span>
                        <span><i class="fas fa-envelope me-2"></i>info@example.com</span>
                    </div>
                </div>
                <div class="col-md-4 text-md-end">
                    <div class="copyright">© 2022 ThemeMascot. All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/index.js"></script> 

</body>
</html>