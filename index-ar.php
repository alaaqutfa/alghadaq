<?php
include 'config/databaseconnect.php';
$successSendMail = "";
session_start();
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = md5(uniqid(mt_rand(), true));
}
if (isset($_POST['sendMail'])) {
    // Get form data
    $data = [
        "name" => filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        "email" => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
        "subject" => filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        "message" => filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
    ];
    $name = $data['name'];
    $email = $data['email'];
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
<html lang="ar">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>شركة الغدق لتكنولوجيا المعلومات</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <style>
    <?php include "assets/css/style.css";?>
    *  {
      text-align: right;
    }
    .section-title h2 ,h4.title,.title a,h3{
      text-align: center !important;
    }
    .about .section-title p {
      text-align: right;
    }
    .portfolio-info h4 {
      text-align: left;
    }
    .team .member h4,
    .team .member span,
    .team .member div,
    .box h3,
    .box h4 ,
    .box h4 span ,
    .info-box p
    {
      text-align: center !important;
      
    }
  </style>

</head>

<body dir="rtl">

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center" dir="ltr">
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
        <a href="#"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
            <li class="m-2">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-translate"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">العربية</a></li>
                <li><a class="dropdown-item" href="index.php">English</a></li>
              </ul>
            </div>
          </li>
          <li><a class="nav-link scrollto active" href="#hero">الصفحة الرئيسية</a></li>
          <li><a class="nav-link scrollto" href="#about">حولنا</a></li>
          <li><a class="nav-link scrollto" href="#services">الخدمات</a></li>
          <li><a class="nav-link scrollto" href="#team">أعضاء الفريق</a></li>
          <li><a class="nav-link scrollto" href="#contact">الأتصال بنا</a></li>
          <li><a class="nav-link scrollto" href="https://watan.website/">@watan.website </a></li>

          
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
                <h2 class="animate__animated animate__fadeInDown">مرحبا بكم في <span style="color: var(--pC2);">شركة الغدق لتكنولوجيا المعلومات</span></h2>
                <p class="animate__animated animate__fadeInUp">
                  الغدق هي شركة مبتكرة لحلول تكنولوجيا المعلومات متخصصة في تطوير مواقع الويب، وتطوير البرمجيات، والتسوق الألكتروني، وتطوير التطبيقات الموبايل.
                </p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide-2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><span style="color: var(--pC2);">شركة الغدق لتكنولوجيا المعلومات</span>
                </h2>
                <p class="animate__animated animate__fadeInUp">
                  توفير خدمات التخزين السحابي وواجهات التسويق الإلكتروني للمؤسسات بالإضافة إلى ذلك
                  الحلول المحاسبية و الأمن الإلكتروني بطريقة احترافية تضمن السلاسة
                  والعمل المتناغم بين أعضاء المنظمة.
                </p>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide-3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><span style="color: var(--pC2);">شركة الغدق لتكنولوجيا المعلومات</span>
                </h2>
                <p class="animate__animated animate__fadeInUp">
                  دعنا نساعدك على تطوير وتنمية أعمالك وجعلها متميزة 
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
              <h2>حولنا</h2>
              <p>
              شركة الغدق لتكنولوجيا المعلومات هي شركة مبتكرة لحلول تكنولوجيا المعلومات متخصصة في تطوير مواقع الويب والبرمجيات
              التطوير وتصميم المنتجات وتطوير التطبيقات.
              توفير خدمات البيانات السحابية وواجهات التسويق الإلكتروني للمؤسسات بالإضافة إلى ذلك
              الحلول المحاسبية وحماية الأمن الإلكتروني بطريقة احترافية تضمن السلاسة
              والعمل المتناغم بين أعضاء المنظمة.
              </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">هدفنا</a></h4>
              <p class="description">هدفنا هو مساعدة الشركات على تحقيق أهدافها من خلال الاستفادة من أحدث التقنيات وتقديم حلول فعالة.</p>
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
            <h4>مركزية العملاء</h4>
            <p>لتحسين الجودة و ضبط التكاليف وتقديم خدمات وحلول تكنولوجيا المعلومات لدينا مع أقصى قدر من التركيز على راحة العملاء مدعومًا بالتواصل المستمر لتوفير أقصى درجات السعادة للعملاء.</p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>02</span>
            <h4>أخلاقيات العمل</h4>
            <p>أن نكون صادقين عادلين وشفافين ومنفتحين في جميع صفقاتنا مع المستثمرين.
            </p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>03</span>
            <h4>الأحترام</h4>
            <p>أن نحظى بعملائنا وشركائنا وزملائنا وأصحاب المصلحة بتقدير وكرامة وهيبة كبيرة</p>
          </div>

          <div class="col-lg-3 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>04</span>
            <h4>ابتكار</h4>
            <p>نسعى باستمرار إلى أن نكون مبتكرين من الناحية التكنولوجية ونحقق التميز في العمليات من أجل تمكين عملائنا من الحصول على مزايا تجارية متميزة.</p>
          </div>

        </div>

      </div>
    </section>
    <!-- End About Lists Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>خدماتنا</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class='bx bx-cloud'></i></div>
            <h4 class="title"><a href="">الأستضافة & السيرفرات</a></h4>
            <a class="btn btn-dark" href="#pricing">اطلب الأن</a>
            <!-- <a class="btn btn-dark" href="pages/transactions-ar.php?s=Hosting-VPS">اطلب الأن</a> -->
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-bounding-box"></i></div>
            <h4 class="title"><a href="">تطبيقات Android & IOS</a></h4>
            <a class="btn btn-dark" href="pages/transactions-ar.php?s=Android-IOS applications">اطلب الأن</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-globe"></i></div>
            <h4 class="title"><a href="">مواقع أنترنت</a></h4>
            <a class="btn btn-dark" href="pages/transactions-ar.php?s=Web applications">اطلب الأن</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-broadcast"></i></div>
            <h4 class="title"><a href="">الأمن الألكتروني</a></h4>
            <a class="btn btn-dark" href="pages/transactions-ar.php?s=Cyber security">اطلب الأن</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">برامج المحاسبة</a></h4>
            <a class="btn btn-dark" href="pages/transactions-ar.php?s=Accounting programs">اطلب الأن</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class='bx bxl-mongodb'></i></div>
            <h4 class="title"><a href="">تصميم مواقع & UI/UX</a></h4>
            <a class="btn btn-dark" href="pages/transactions-ar.php?s=Web - UI/UX design">اطلب الأن</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class='bx bxs-leaf'></i></div>
            <h4 class="title"><a href="">التصميم</a></h4>
            <a class="btn btn-dark" href="pages/transactions-ar.php?s=Graphic design">اطلب الأن</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class='bx bxs-party'></i></div>
            <h4 class="title"><a href="">أدارة وسائل التواصل الأجتماعي</a></h4>
            <a class="btn btn-dark" href="pages/transactions-ar.php?s=Social media">اطلب الأن</a>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class='bx bx-slideshow'></i></div>
            <h4 class="title"><a href="">التسويق الألكتروني</a></h4>
            <a class="btn btn-dark" href="pages/transactions-ar.php?s=Digital marketing">اطلب الأن</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">
        <div class="section-title">
          <h2>أسعار الأستضافة</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
        <div class="row no-gutters">

          <div class="col-lg-3 box" data-aos="fade-right">
            <h3>Single</h3>
            <h4>$8.3<span>في الشهر</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> الأداء القياسي</li>
              <li><i class="bx bx-check"></i> 1 موقع</li>
              <li><i class="bx bx-check"></i> 50 GB SSD Storage</li>
              <li><i class="bx bx-check"></i> Weekly Backups</li>
              <li><i class="bx bx-check"></i> 1 Email Account</li>
              <li><i class="bx bx-check"></i> غير محدود مجاناً SSL</li>
              <li><i class="bx bx-check"></i> غير محدود Bandwidth</li>
              <li><i class="bx bx-check"></i> 24/7 دعم العملاء</li>
              <li class="na"><i class="bx bx-x"></i> <span>مجاناً CDN</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>عنوان IP مخصص</span></li>
            </ul>
            <a href="pages/transactions-ar.php?s=Hosting-VPS-Single-plan" class="get-started-btn">اشترك الأن</a>
          </div>

          <div class="col-lg-3 box featured" data-aos="fade-up">
            <h3>Premium</h3>
            <h4>$12.5<span>في الشهر</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> الأداء القياسي</li>
              <li><i class="bx bx-check"></i> 100 موقع</li>
              <li><i class="bx bx-check"></i> 100 GB SSD Storage</li>
              <li><i class="bx bx-check"></i> Weekly Backups</li>
              <li><i class="bx bx-check"></i> بريد الكتروني مجاني</li>
              <li><i class="bx bx-check"></i> غير محدود مجاناً SSL</li>
              <li><i class="bx bx-check"></i> غير محدود Bandwidth</li>
              <li><i class="bx bx-check"></i> 24/7 دعم العملاء</li>
              <li class="na"><i class="bx bx-x"></i> <span>مجاناً CDN</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>عنوان IP مخصص</span></li>
            </ul>
            <a href="pages/transactions-ar.php?s=Hosting-VPS-Premium-plan" class="get-started-btn">اشترك الأن</a>
          </div>

          <div class="col-lg-3 box" data-aos="fade-left">
            <h3>Business</h3>
            <h4>$16.6<span>في الشهر</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> الأداء القياسي</li>
              <li><i class="bx bx-check"></i> 100 موقع</li>
              <li><i class="bx bx-check"></i> 200 GB SSD Storage</li>
              <li><i class="bx bx-check"></i> نسخ احتياطي يومي</li>
              <li><i class="bx bx-check"></i> بريد الكتروني مجاني</li>
              <li><i class="bx bx-check"></i> غير محدود مجاناً SSL</li>
              <li><i class="bx bx-check"></i> غير محدود Bandwidth</li>
              <li><i class="bx bx-check"></i> 24/7 دعم العملاء</li>
              <li><i class="bx bx-check"></i> مجاناً CDN</li>
              <li class="na"><i class="bx bx-x"></i> <span>عنوان IP مخصص</span></li>
            </ul>
            <a href="pages/transactions-ar.php?s=Hosting-VPS-Business-plan" class="get-started-btn">اشترك الأن</a>
          </div>

          <div class="col-lg-3 box" data-aos="fade-left">
            <h3>Ultimate Plan</h3>
            <h4>$26.6<span>في الشهر</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> الأداء القياسي</li>
              <li><i class="bx bx-check"></i> 300 موقع</li>
              <li><i class="bx bx-check"></i> 200 GB SSD Storage</li>
              <li><i class="bx bx-check"></i> نسخ احتياطي يومي</li>
              <li><i class="bx bx-check"></i> بريد الكتروني مجاني</li>
              <li><i class="bx bx-check"></i> غير محدود مجاناً SSL</li>
              <li><i class="bx bx-check"></i> غير محدود Bandwidth</li>
              <li><i class="bx bx-check"></i> 24/7 دعم العملاء</li>
              <li><i class="bx bx-check"></i> مجاناً CDN</li>
              <li><i class="bx bx-check"></i> عنوان IP مخصص</li>
            </ul>
            <a href="pages/transactions-ar.php?s=Hosting-VPS-Ultimate-plan" class="get-started-btn">اشترك الأن</a>
          </div>

        </div>
      </div>
    </section>
    <!-- End Pricing Section -->

    <!-- ======= Portfolio Section ======= -->
   <!-- ======= قسم الأعمال ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2 style="color: #007bff;">الأعمال</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="assets/img/portfolio/1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4 style="color: #28a745;">تجار وطن</h4>
                    <a href="assets/img/portfolio/1.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="تجار وطن"><i class="bx bx-plus"></i></a>
                    <a href="https://watan.dev" target="_blank" class="details-link" title="تفاصيل أكثر"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="assets/img/portfolio/2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4 style="color: #28a745;">وطن للتجارة الإلكترونية</h4>
                    <a href="assets/img/portfolio/2.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="وطن للتجارة الإلكترونية"><i
                            class="bx bx-plus"></i></a>
                    <a href="https://watan.website" target="_blank" class="details-link" title="تفاصيل أكثر"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="assets/img/portfolio/3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4 style="color: #28a745;">خدمات وطن</h4>
                    <a href="assets/img/portfolio/3.jpg" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" title="خدمات وطن"><i class="bx bx-plus"></i></a>
                    <a href="https://watan.website" target="_blank" class="details-link" title="تفاصيل أكثر"><i
                            class="bx bx-link"></i></a>
                </div>
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="content">
                    <h3 style="color: #007bff;">عن وطن للتجارة الإلكترونية</h3>
                    <p>وطن للتجارة الإلكترونية هو منصة شاملة، جزء من شركة الغدق لتكنولوجيا المعلومات، مكرسة لتقديم حلول متكاملة للتسوق وإدارة الأعمال عبر الإنترنت، وتهدف إلى أن تكون الوجهة المفضلة للتجار والمستهلكين في المنطقة.</p>

                    <h3 style="color: #007bff;">Watan.website</h3>
                    <p>المنصة الرئيسية، Watan.website، تربط بين التجار والمستهلكين، مما يسمح للتجار بإنشاء حسابات، وتصفح وطلب المنتجات. يوفر الموقع واجهة مخصصة للموردين تمكنهم من تحميل منتجاتهم بكافة التفاصيل اللازمة مثل الصور، الأوصاف، والأسعار.</p>

                    <h3 style="color: #007bff;">تطبيقات وطن</h3>
                    <p>لتعزيز تجربة المستخدم، تم تطوير تطبيقين مخصصين:</p>
                   <ul>
    <li><strong>تطبيق وطن للموردين (A):</strong> مصمم للموردين، يوفر أدوات متقدمة لإدارة المنتجات، تتبع الطلبات، تحليل البيانات، وإدارة المدفوعات بفعالية.
        <a href="https://watan.website/seller/login" target="_blank" class="btn btn-sm btn-outline-primary ml-2">زيارة تطبيق الموردين</a>
    </li>
    <li><strong>تطبيق وطن للمستهلكين (C):</strong> مخصص للمشترين بالجملة، ويوفر تجربة تسوق مريحة وفعالة.
        <a href="https://watan.website" target="_blank" class="btn btn-sm btn-outline-success ml-2">زيارة تطبيق المستهلكين</a>
    </li>
</ul>


                    <h3 style="color: #007bff;">وسائل الدفع الموثوقة</h3>
                    <p>يوفر وطن للتجارة الإلكترونية مجموعة متنوعة من وسائل الدفع الآمنة والموثوقة بالإضافة إلى حسابات بنكية ذات كفاءة عالية لضمان سلاسة وأمان عمليات الدفع.</p>

                    <h3 style="color: #007bff;">الفئات المتاحة</h3>
                    <p>يقدم الموقع مجموعة واسعة من الفئات التي تشمل:</p>
                    <ul>
                        <li>السيارات وقطع الغيار</li>
                        <li>الأجهزة الكهربائية</li>
                        <li>الألبسة</li>
                        <li>المنتجات الغذائية</li>
                        <li>مستلزمات الطاقة الشمسية</li>
                        <li>الإكسسوارات</li>
                        <li>مستحضرات التجميل</li>
                    </ul>

                    <h3 style="color: #007bff;">التطوير المستمر</h3>
                    <p>نحن ملتزمون بتقديم أفضل تجربة ممكنة من خلال التحديث المستمر وتطوير الموقع والتطبيقات.</p>

                    <a href="https://watan.website" target="_blank" class="btn btn-primary mt-3">
                        <img src="assets/img/watanlogo.png" alt="شعار وطن" class="logo-img">
                        زيارة موقع وطن
                    </a>

                </div>
            </div>
        </div>

    </div>
</section><!-- نهاية قسم الأعمال -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>تواصل معنا</h2>
        </div>
        <div class="row">

          <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>عنواننا</h3>
              <p>ملك أبو بكر أحمد عبيد بن طوق المري - ديرة نايف - مكتب رقم A 5-406</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>ارسل لنا عبر البريد الإلكتروني</h3>
              <p>info@alghadaqit.tech<br>contact@alghadaqit.tech</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>اتصل بنا</h3>
              <p dir="ltr">+1 33 22 32 97 41<br>+971 58 158 7300,<br>+964 770 703 6719<br>+964 751 796 0618</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form method="POST" role="form" class="php-email-form">
              <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="اسمك" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="ايميلك" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="رسالتك" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading <?php if ($successSendMail != "") {echo "d-block";}?>">جاري التحميل</div>
                <div class="error-message <?php if ($successSendMail == "showError") {echo "d-block";}?>">لم يتم إرسال الرسالة، يرجى المحاولة مرة أخرى</div>
                <div class="sent-message <?php if ($successSendMail == "showSuccess") {echo "d-block";}?>">تم ارسال رسالتك. شكرًا لك!</div>
              </div>
              <div class="text-center"><button class="btn btn-success sendMailBtn" name="sendMail" type="submit">ارسال</button></div>
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
            <h3>شركة الغدق لتكنولوجيا المعلومات</h3>
            <p>
              ملك أبو بكر أحمد عبيد بن طوق المري - ديرة نايف -
              <br>
              مكتب رقم A 5-406, الأمارات العربية المتحدة<br><br>
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
            <h4>روابط مفيدة</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">الصفحة الرئيسية</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">حولنا</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">خدماتنا</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pages/conditions.php">شروط الخدمة</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pages/privacypolicy.php">سياسة الخصوصية</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="اشتراك">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; حقوق النشر <strong><span>شركة الغدق لتكنولوجيا المعلومات</span></strong>. كل الحقوق محفوظة
        <br />
        <a href="pages/privacypolicy.php" target="_blank" rel="noopener noreferrer">سياسة الخصوصية</a>
        <span>-</span>
        <a href="pages/conditions.php" target="_blank" rel="noopener noreferrer">الشروط & الاحكام</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
    <?php include "assets/js/main.js";?>
  </script>

</body>

</html>