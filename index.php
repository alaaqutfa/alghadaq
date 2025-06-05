<?php
    include 'config/databaseconnect.php';
    $successSendMail = "";
    session_start();
    if (! isset($_SESSION['token'])) {
        $_SESSION['token'] = md5(uniqid(mt_rand(), true));
    }
    if (isset($_POST['sendMail'])) {
        // Get form data
        $data = [
            "name"    => filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            "email"   => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
            "subject" => filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
            "message" => filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        ];
        $name    = $data['name'];
        $email   = $data['email'];
        $message = $data['message'];
        // Set recipient email address
        $to = "soransalimmohammed@gmail.com";

        // Set email subject
        $subject = $data['subject'];

        // Construct email body
        $body = "Name: $name\n";
        $body .= "Email: $email\n\n";
        $body .= "Message:\n$message";

        // Set headers
        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            $successSendMail = "showSuccess";

        } else {
            $successSendMail = "showError";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ALGHADAQ - IT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    <!-- CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <style>
        <?php include "assets/css/style.css";
        ?>
    </style>

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@alghadaqit.tech">info@alghadaqit.tech</a>
                <i class="bi bi-phone-fill phone-icon"></i><a href="tel:+971581587300">+971 58 158 7300</a>
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <!-- <h1><a href="index.html">ALGHADAQ - IT</a></h1> -->
                <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <!-- <li class="m-2">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-translate"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="index-ar.php">العربية</a></li>
                            </ul>
                        </div>
                    </li> -->
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('assets/img/slide/slide-1.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Welcome to <span
                                        style="color: var(--pC2);">ALGHADAQ -
                                        IT</span></h2>
                                <p class="animate__animated animate__fadeInUp">
                                    ALGHADAQ is an innovative IT solutions company specializing in website development,
                                    software development, online shopping, and mobile application development.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('assets/img/slide/slide-2.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown"><span
                                        style="color: var(--pC2);">ALGHADAQ - IT</span>
                                </h2>
                                <p class="animate__animated animate__fadeInUp">
                                    Providing cloud data services and electronic marketing interfaces for organizations
                                    in addition to
                                    accounting olutions and protecting electronic security in a professional manner that
                                    ensures smooth
                                    and harmonious work among the organization’s members.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('assets/img/slide/slide-3.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown"><span
                                        style="color: var(--pC2);">ALGHADAQ - IT</span>
                                </h2>
                                <p class="animate__animated animate__fadeInUp">
                                    Let us help you develop and grow your business and make it outstanding
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="col-lg-6 video-box">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                        <div class="section-title">
                            <h2>About Us</h2>
                            <p>ALGHADAQ - IT is an innovative IT Solutions company specializing in website development,
                                software
                                development, Product Design, and Application development.
                                Providing cloud data services and electronic marketing interfaces for organizations in
                                addition to
                                accounting solutions and protecting electronic security in a professional manner that
                                ensures smooth
                                and harmonious work among the organization’s members.
                            </p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Our Goal</a></h4>
                            <p class="description">Our goal is to help companies achieve their goals by leveraging the
                                latest technologies and providing effective solutions.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= About Lists Section ======= -->
        <section class="about-lists">
            <div class="container">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up">
                        <span>01</span>
                        <h4>Customer Centricity</h4>
                        <p>To improve quality, control costs and provide our IT services and solutions with maximum
                            focus on customer comfort supported by continuous communication to provide maximum customer
                            happiness.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                        <span>02</span>
                        <h4>Business Ethics and Transparency</h4>
                        <p>To be honest, fair, transparent and open in all our deals with investors.
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                        <span>03</span>
                        <h4>Respect</h4>
                        <p>To hold our customers, partners, colleagues, and stakeholders in great esteem, dignity, and
                            prestige</p>
                    </div>

                    <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
                        <span>04</span>
                        <h4>Innovation</h4>
                        <p>To continuously strive to be technologically innovative and achieve process excellence in
                            order to enable
                            our customers to harvest significant business advantages.</p>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Lists Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class='bx bx-cloud'></i></div>
                        <h4 class="title"><a href="">Hosting & VPS</a></h4>
                        <a class="btn btn-dark" href="#pricing">Order</a>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-bounding-box"></i></div>
                        <h4 class="title"><a href="">Android & IOS applications</a></h4>
                        <a class="btn btn-dark" href="pages/transactions.php?s=Android-IOS applications">Order</a>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-globe"></i></div>
                        <h4 class="title"><a href="">Web applications</a></h4>
                        <a class="btn btn-dark" href="pages/transactions.php?s=Web applications">Order</a>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-broadcast"></i></div>
                        <h4 class="title"><a href="">Cyber security</a></h4>
                        <a class="btn btn-dark" href="pages/transactions.php?s=Cyber security">Order</a>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Accounting programs</a></h4>
                        <a class="btn btn-dark" href="pages/transactions.php?s=Accounting programs">Order</a>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class='bx bxl-mongodb'></i></div>
                        <h4 class="title"><a href="">Web & UI/UX design</a></h4>
                        <a class="btn btn-dark" href="pages/transactions.php?s=Web - UI/UX design">Order</a>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class='bx bxs-leaf'></i></div>
                        <h4 class="title"><a href="">Graphic design</a></h4>
                        <a class="btn btn-dark" href="pages/transactions.php?s=Graphic design">Order</a>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class='bx bxs-party'></i></div>
                        <h4 class="title"><a href="">Social media</a></h4>
                        <a class="btn btn-dark" href="pages/transactions.php?s=Social media">Order</a>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon"><i class='bx bx-slideshow'></i></div>
                        <h4 class="title"><a href="">Digital marketing</a></h4>
                        <a class="btn btn-dark" href="pages/transactions.php?s=Digital marketing">Order</a>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">
                <div class="section-title">
                    <h2>Hosting Price</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>
                <div class="row no-gutters">

                    <div class="col-lg-3 box" data-aos="fade-right">
                        <h3>Single</h3>
                        <h4>$8.3<span>per month</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Standard Performance</li>
                            <li><i class="bx bx-check"></i> 1 Website</li>
                            <li><i class="bx bx-check"></i> 50 GB SSD Storage</li>
                            <li><i class="bx bx-check"></i> Weekly Backups</li>
                            <li><i class="bx bx-check"></i> 1 Email Account</li>
                            <li><i class="bx bx-check"></i> Unlimited Free SSL</li>
                            <li><i class="bx bx-check"></i> Unlimited Bandwidth</li>
                            <li><i class="bx bx-check"></i> 24/7 Customer Support</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Free CDN</span></li>
                            <li class="na"><i class="bx bx-x"></i> <span>Dedicated IP Address</span></li>
                        </ul>
                        <a href="pages/transactions.php?s=Hosting-VPS-Single-plan" class="get-started-btn">Get
                            Started</a>
                    </div>

                    <div class="col-lg-3 box featured" data-aos="fade-up">
                        <h3>Premium</h3>
                        <h4>$12.5<span>per month</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Standard Performance</li>
                            <li><i class="bx bx-check"></i> 100 Website</li>
                            <li><i class="bx bx-check"></i> 100 GB SSD Storage</li>
                            <li><i class="bx bx-check"></i> Weekly Backups</li>
                            <li><i class="bx bx-check"></i> Free Email</li>
                            <li><i class="bx bx-check"></i> Unlimited Free SSL</li>
                            <li><i class="bx bx-check"></i> Unlimited Bandwidth</li>
                            <li><i class="bx bx-check"></i> 24/7 Customer Support</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Free CDN</span></li>
                            <li class="na"><i class="bx bx-x"></i> <span>Dedicated IP Address</span></li>
                        </ul>
                        <a href="pages/transactions.php?s=Hosting-VPS-Premium-plan" class="get-started-btn">Get
                            Started</a>
                    </div>

                    <div class="col-lg-3 box" data-aos="fade-left">
                        <h3>Business</h3>
                        <h4>$16.6<span>per month</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Standard Performance</li>
                            <li><i class="bx bx-check"></i> 100 Website</li>
                            <li><i class="bx bx-check"></i> 200 GB SSD Storage</li>
                            <li><i class="bx bx-check"></i> Daily Backups</li>
                            <li><i class="bx bx-check"></i> Free Email</li>
                            <li><i class="bx bx-check"></i> Unlimited Free SSL</li>
                            <li><i class="bx bx-check"></i> Unlimited Bandwidth</li>
                            <li><i class="bx bx-check"></i> 24/7 Customer Support</li>
                            <li><i class="bx bx-check"></i> Free CDN</li>
                            <li class="na"><i class="bx bx-x"></i> <span>Dedicated IP Address</span></li>
                        </ul>
                        <a href="pages/transactions.php?s=Hosting-VPS-Business-plan" class="get-started-btn">Get
                            Started</a>
                    </div>

                    <div class="col-lg-3 box" data-aos="fade-left">
                        <h3>Ultimate Plan</h3>
                        <h4>$26.6<span>per month</span></h4>
                        <ul>
                            <li><i class="bx bx-check"></i> Standard Performance</li>
                            <li><i class="bx bx-check"></i> 300 Website</li>
                            <li><i class="bx bx-check"></i> 200 GB SSD Storage</li>
                            <li><i class="bx bx-check"></i> Daily Backups</li>
                            <li><i class="bx bx-check"></i> Free Email</li>
                            <li><i class="bx bx-check"></i> Unlimited Free SSL</li>
                            <li><i class="bx bx-check"></i> Unlimited Bandwidth</li>
                            <li><i class="bx bx-check"></i> 24/7 Customer Support</li>
                            <li><i class="bx bx-check"></i> Free CDN</li>
                            <li><i class="bx bx-check"></i> Dedicated IP Address</li>
                        </ul>
                        <a href="pages/transactions.php?s=Hosting-VPS-Ultimate-plan" class="get-started-btn">Get
                            Started</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Pricing Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/Aljazeera-mockup.png" class="img-fluid" alt="Aljazeera" />
                        <div class="portfolio-info">
                            <h4>Aljazeera Machinery</h4>
                            <a href="assets/img/portfolio/Aljazeera-mockup.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Aljazeera Machinery"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/Art-tech.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Art-tech</h4>
                            <a href="assets/img/portfolio/Art-tech.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Art-tech"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/Limitless-tech.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Limitless-tech</h4>
                            <a href="assets/img/portfolio/Limitless-tech.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Limitless-tech"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/shaheenecommerce.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Shaheen eCommerce</h4>
                            <a href="assets/img/portfolio/shaheenecommerce.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Shaheen eCommerce"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/syriansouq.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Syrian Souq eCommerce</h4>
                            <a href="assets/img/portfolio/syriansouq.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Syrian Souq eCommerce"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/watan.dev.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Watan Services</h4>
                            <a href="assets/img/portfolio/watan.dev.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Watan Services"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/watanecommerce.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Watan eCommerce</h4>
                            <a href="assets/img/portfolio/watanecommerce.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Watan eCommerce"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/world-gate.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>World Gate - Meical</h4>
                            <a href="assets/img/portfolio/world-gate.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="World Gate - Meical"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/shaheen.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Shaheen eCommerce App</h4>
                            <a href="assets/img/portfolio/shaheen.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Shaheen eCommerce App"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/watan.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Watan eCommerce App</h4>
                            <a href="assets/img/portfolio/watan.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Watan eCommerce App"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/watan-agent.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Watan Agent Services App</h4>
                            <a href="assets/img/portfolio/watan-agent.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Watan Agent Services App"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/watan-users.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Watan Users Services App</h4>
                            <a href="assets/img/portfolio/watan-users.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Watan Users Services App"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/watan-supplier.png" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Watan Supplier App</h4>
                            <a href="assets/img/portfolio/watan-supplier.png" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Watan Agent Services App"><i
                                    class="bx bx-plus"></i></a>
                            <a href="https://watan.website" target="_blank" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>

                <!-- <div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="content">
                            <h3 style="color: #007bff;">About Watan E-commerce</h3>
                            <p>Watan E-commerce is a comprehensive platform, part of Al-Ghadaq IT Company, dedicated to
                                offering integrated solutions for shopping and business management online. Aiming to be
                                the go-to destination for traders and consumers in the region.</p>

                            <h3 style="color: #007bff;">Watan.website</h3>
                            <p>The main platform, Watan.website, connects traders and consumers, allowing traders to
                                create accounts, browse, and order products. It provides a dedicated interface for
                                suppliers, enabling them to upload their products with all necessary details such as
                                images, descriptions, and prices.</p>

                            <h3 style="color: #007bff;">Watan Apps</h3>
                            <p>To enhance user experience, two dedicated apps have been developed:</p>
                          <ul>
    <li><strong>Watan Supplier (A):</strong> Designed for suppliers, offering advanced tools for product management, order tracking, data analysis, and effective payment management.
        <a href="https://watan.website/seller/login" target="_blank" class="btn btn-sm btn-outline-primary ml-2">Visit Supplier App
          <img src="assets/img/watanlogo.png" alt="Watan Logo" class="logo-img">
        </a>
    </li>
    <li><strong>Watan Consumer (C):</strong> Aimed at wholesale buyers, providing a comfortable and efficient shopping experience.
        <a href="https://watan.website" target="_blank" class="btn btn-sm btn-outline-success ml-2">Visit Consumer App
          <img src="assets/img/watanlogo.png" alt="Watan Logo" class="logo-img">
        </a>
    </li>
</ul>


                            <h3 style="color: #007bff;">Trusted Payment Methods</h3>
                            <p>Watan E-commerce offers a variety of secure and trusted payment methods along with
                                high-efficiency bank accounts to ensure smooth and safe transactions.</p>

                            <h3 style="color: #007bff;">Available Categories</h3>
                            <p>The website features a wide range of categories, including:</p>
                            <ul>
                                <li>Automobiles and Spare Parts</li>
                                <li>Electrical Appliances</li>
                                <li>Clothing</li>
                                <li>Food Products</li>
                                <li>Solar Energy Supplies</li>
                                <li>Accessories</li>
                                <li>Makeup</li>
                            </ul>

                            <h3 style="color: #007bff;">Continuous Development</h3>
                            <p>We are committed to providing the best possible experience through continuous updates and
                                development of the site and applications.</p>

                            <a href="https://watan.website" target="_blank" class="btn btn-primary mt-3">
                                <img src="assets/img/watanlogo.png" alt="Watan Logo" class="logo-img">
                                Visit Watan Website
                            </a>

                        </div>
                    </div>
                </div> -->

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact Us</h2>
                </div>
                <div class="row">

                    <div class="col-lg-6 d-flex" data-aos="fade-up">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>Abu Bakr Ahmed Obaid Bin Touq Al Marri Building - Deira Naif Area - Office No. A 5-406
                            </p>
                            <!-- <p>ملك أبو بكر أحمد عبيد بن طوق المري - ديرة نايف - مكتب رقم A 5-406</p> -->
                        </div>
                    </div>

                    <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-box">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@alghadaqit.tech<br>contact@alghadaqit.tech</p>
                        </div>
                    </div>

                    <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-box ">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 33 22 32 97 41<br>+971 58 158 7300,<br>+964 770 703 6719<br>+964 751 796 0618</p>
                        </div>
                    </div>

                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                        <form method="POST" role="form" class="php-email-form">
                            <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading                                                                                                                                                                                                             <?php if ($successSendMail != "") {echo " d-block";}?>">Loading
                                </div>
                                <div class="error-message                                                                                                                                                                                                                                     <?php if ($successSendMail == " showError") {echo "d-block";}
                                                                                                                                                                                                                                     ?>">Message was not sent, please try again</div>
                                <div class="sent-message                                                                                                                                                                                                                                 <?php if ($successSendMail == " showSuccess") {echo "d-block";}
                                                                                                                                                                                                                                 ?>">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button class="btn btn-success sendMailBtn" name="sendMail"
                                    type="submit">Send Message</button></div>
                            <div class="d-flex justify-content-center align-items-center pt-2">
                                <img src="assets/img/payment method/visa-master.png" alt="" />
                                <img src="assets/img/payment method/union.png" alt="" />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Contact Us Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>ALGHADAQ - IT</h3>
                        <p>
                            Abu Bakr Ahmed Obaid Bin Touq Al Marri Building <br>
                            Deira Naif Area <br>
                            Office No. A 5-406, UAE<br><br>
                            <strong>Phone:</strong> +971 58 158 7300<br>
                            <strong>Email:</strong> info@alghadaqit.tech<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="pages/conditions.php">Terms of service</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="pages/privacypolicy.php">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#services">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#services">Web Development</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#services">Product Management</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#services">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#services">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>ALGHADAQ - IT</span></strong>. All Rights Reserved
                <br />
                <a href="pages/privacypolicy.php" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
                <span>-</span>
                <a href="pages/conditions.php" target="_blank" rel="noopener noreferrer">Terms & Conditions</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script>
        <?php include "assets/js/main.js"; ?>
    </script>

</body>

</html>