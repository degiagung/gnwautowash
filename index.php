<?php
include "config/koneksi.php";
?>
<?php
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>GNW AUTO WASH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./images/gnw/gnwlogo.jpg" rel="icon">
  <link href="./images/gnw/gnwlogo.jpg" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./assets3/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="./assets3/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="./assets3/vendor/aos/aos.css" rel="stylesheet">
  <link href="./assets3/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="./assets3/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="./assets3/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="./images/gnw/gnwlogo.jpg" alt="">
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li><a href="#gallery">Galeri</a></li>
            <li><a href="#pricing">Paket Harga</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li><a href="#contact">Kritik dan Saran</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="./images/gnw/10.jpg" alt="" data-aos="fade-in">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-start">
          <div class="col-lg-8">
            <h2>Selamat Datang di GNW AUTO WASH</h2>
            <p>Gnw Auto Wash adalah layanan cuci mobil dengan pelayanan terbaik dan telah beroperasi sejak lama. Dimulai dengan kawasan Cimahi , kini sedang berkembang ke berbagai wilayah lain. Segera Booking untuk cuci mobil anda.</p>
            <a href="#about" class="btn-get-started">Pendaftaran</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>About Us<br></span>
        <h2>About Us<br></h2>
        <p>Selamat Datang di GNW AUTO WASH </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="./images/gnw/6.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>tujuan utama Anda untuk layanan cuci mobil terbaik!</h3>
            <p class="fst-italic">
              Kami menawarkan pencucian mobil yang cepat, efisien, dan menyenangkan untuk anda
            </p>
            <h3>VISI</h3>
            <p class="fst-italic">
              Kami menawarkan pencucian mobil yang cepat, efisien, dan menyenangkan untuk anda
            </p>
            <h3>MISI</h3>
            <p class="fst-italic">
              Kami menawarkan pencucian mobil yang cepat, efisien, dan menyenangkan untuk anda
            </p>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Cards Section -->
    <section id="cards" class="cards section">

      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="100">
            <span>01</span>
            <h4>KERJA TIM</h4>
            <p>Kami bekerja sama sebagai tim untuk membangun pengalaman dan perusahaan cuci mobil yang lebih baik. Kami bertanggung jawab satu sama lain; kita melakukan apa yang kita katakan akan kita lakukan.</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="200">
            <span>02</span>
            <h4>INTEGRITAS</h4>
            <p>Kami BERJALAN dengan integritas dalam segala hal yang kami lakukan dengan melakukan hal yang benar saat tidak ada orang yang melihat.</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="300">
            <span>03</span>
            <h4>PEDULI</h4>
            <p>Kami peduli terhadap rekan satu tim kami, pelanggan kami, dan komunitas kami. Kami berempati, sopan, dan peduli dalam semua interaksi kami.</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="400">
            <span>04</span>
            <h4>SENYUMAN</h4>
            <p>Kami bekerja keras dan bermain keras. Di GO Car Wash kami menyukai apa yang kami lakukan dan bersenang-senang melakukannya.</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="400">
            <span>05</span>
            <h4>CONTNUES IMPROVEMENT</h4>
            <p>Kami adalah pembelajar. Kami berusaha menjadi lebih baik dari hari ke hari. Kami tidak pernah berpuas diri.</p>
          </div><!-- End Card Item -->
        </div>

      </div>

    </section><!-- /Cards Section -->

   
    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="./images/gnw/1.jpg"><img src="./images/gnw/1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="./images/gnw/2.webp"><img src="./images/gnw/2.webp" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="./images/gnw/3.jpg"><img src="./images/gnw/3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="./images/gnw/4.jpg"><img src="./images/gnw/4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="./images/gnw/5.jpg"><img src="./images/gnw/5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="./images/gnw/6.jpg"><img src="./images/gnw/6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="./images/gnw/7.jpg"><img src="./images/gnw/7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="./images/gnw/8.jpg"><img src="./images/gnw/8.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="./images/gnw/9.jpg"><img src="./images/gnw/9.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="./images/gnw/10.jpg"><img src="./images/gnw/10.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->
<!-- /Portfolio Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Pricing</span>
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-4 g-lg-0">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4 featured" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <?php
      date_default_timezone_set('Asia/Jakarta');
      $tgl_pendaftaran = date("Y-m-d");
      $queryy = mysql_query("SELECT no_antrian FROM pendaftaran WHERE tgl_pendaftaran = '$tgl_pendaftaran'");
      $htg = mysql_num_rows($queryy);

      $next = $htg + 1;

      $no_antrian = $tgl_pendaftaran . '/' . $next;

      $hitung = mysql_query("SELECT max(id_customer) as id_terakhir from customer");
      $cari = mysql_fetch_array($hitung);
      $id_lanjut = $cari['id_terakhir'] + 1;

    ?>
   
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Kontak</span>
        <h2>Kontak</h2>
        <p>Untuk mengetahui informasi lebih lanjut, silahkan hubungi kontak berikut.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jl. Nanjung No.72, Nanjung, Kec. Margaasih, Kabupaten Bandung, Jawa Barat 40217</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>0822-2888-4990</p>
            </div>
          </div><!-- End Info Item -->


        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Jl.%20Nanjung%20No.72+(gnw%20auto%20wash)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative">

    <center>

        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6 offset-md-4">
              <div class="footer-about">
                <a href="index.html" class="logo sitename"><center><img src="./images/gnw/gnwlogo.jpg" style="max-width:200px"></center></a>
                <div class="footer-contact pt-3">
                  <p> Jl. Nanjung No.72, Nanjung, Kec. Margaasih,</p>
                  <p> Kabupaten Bandung, Jawa Barat 40217</p>
                  <p class="mt-3"><strong>Handphone:</strong> <span>0822-2888-4990</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    
                  <a href="https://www.instagram.com/gnw_autowash?igsh=dDdqbmg3czY5aWRs"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.tiktok.com/@gnwautowash?_t=8n6FPIFziJs&_r=1"><i class="bi bi-tiktok"></i></a>
                </div>
              </div>
            </div>
    
            
    
          </div>
        </div>
    </center>

    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="./assets3/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets3/vendor/php-email-form/validate.js"></script>
  <script src="./assets3/vendor/aos/aos.js"></script>
  <script src="./assets3/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="./assets3/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="./assets3/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="./assets3/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="./assets3/js/main.js"></script>

</body>

</html>