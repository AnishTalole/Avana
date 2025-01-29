<?php
define("BASE_URL", "http://localhost/Avana/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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

        <!-- Types of Care Section -->
        <div class="care-types-section text-center mt-5 pt-5">
            <span class="section-subtitle">Our Service List</span>
            <h2 class="section-title">Types Of Care</h2>
            
            <div class="care-slider position-relative mt-5">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="care-card">
                                <div class="care-image">
                                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-wEChZFtYHtLByGwV6HLWcBq2BDnfmi.png" alt="Assisted Living" class="img-fluid">
                                    <span class="slide-number">01</span>
                                </div>
                                <div class="care-content">
                                    <h3>Assisted Living</h3>
                                    <p>We are committed to provide quality care</p>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="care-card">
                                <div class="care-image">
                                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-wEChZFtYHtLByGwV6HLWcBq2BDnfmi.png" alt="Skilled Nursing" class="img-fluid">
                                    <span class="slide-number">02</span>
                                </div>
                                <div class="care-content">
                                    <h3>Skilled Nursing</h3>
                                    <p>We are committed to provide quality care</p>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="care-card">
                                <div class="care-image">
                                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-wEChZFtYHtLByGwV6HLWcBq2BDnfmi.png" alt="Senior Citizen" class="img-fluid">
                                    <span class="slide-number">03</span>
                                </div>
                                <div class="care-content">
                                    <h3>Senior Citizen</h3>
                                    <p>We are committed to provide quality care</p>
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
    </div>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/index.js"></script> 

</body>
</html>