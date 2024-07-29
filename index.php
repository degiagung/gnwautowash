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
            <li><a href="#tracking">Tracking</a></li>
            <li><a href="#pricing">Paket Harga</a></li>
            <li><a href="#contact">Informasi Car Wash</a></li>
            <!-- <li><a href="#contact">Kritik dan Saran</a></li> -->
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

      <div class="container" data-aos="fade-up">
        <div class="row justify-content-start">
          <div class="col-lg-8">
            <h2>Selamat Datang di GNW AUTO WASH</h2>
            <p>Gnw Auto Wash adalah layanan cuci mobil dengan pelayanan terbaik dan telah beroperasi sejak lama. Dimulai dengan kawasan Cimahi , kini sedang berkembang ke berbagai wilayah lain. Segera Booking untuk cuci mobil anda.</p>
            <a href="admin/index.php?p=antrian" class="btn-get-started">Pendaftaran</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Tentang Kami<br></span>
        <h2>Tentang Kami<br></h2>
        <p>Selamat Datang di GNW AUTO WASH </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up">
            <img src="./images/gnw/6.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up">
            <h3>Visi Misi Perusahaan!</h3>
            <p class="fst-italic">
              Perusahaan GNW Autowash memiliki Visi dan Misi yang dapat meningkatkan motivasi karyawan
              dalam bekerja serta mewujudkan tujuan dari perusahaan
            </p>
            <h3>VISI</h3>
            <p class="fst-italic">
              Menyediakan pilihan utama dan terdepan dalam 
              Menyediakan pelayanan jasa cuci yang terbauk dan nyaman bagi pelanggan
            </p>
            <h3>MISI</h3>
            <p class="fst-italic">
              <ol>
                    <li>Menyediakan jasa cuci dengan kualitas terbaik dilingkungan tanpa mengkhawatirkan kebersihan mobil.</li>
                    <li>Menyediakan fasilitas dan layanan yang memenuhi standar kualitas terbaik.</li>
                    <li>Menciptakan suasana yang terpercaya dan mendukung bagi pelanggan.</li>
               </ol> 
            </p>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Cards Section -->
    <section id="cards" class="cards section">

      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up">
            <span>01</span>
            <h4>KERJA TIM</h4>
            <p>Kami bekerja sama sebagai tim untuk membangun pengalaman dan perusahaan cuci mobil yang lebih baik. Kami bertanggung jawab satu sama lain; kita melakukan apa yang kita katakan akan kita lakukan.</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up">
            <span>02</span>
            <h4>INTEGRITAS</h4>
            <p>Kami BERJALAN dengan integritas dalam segala hal yang kami lakukan dengan melakukan hal yang benar saat tidak ada orang yang melihat.</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up">
            <span>03</span>
            <h4>PEDULI</h4>
            <p>Kami peduli terhadap rekan satu tim kami, pelanggan kami, dan komunitas kami. Kami berempati, sopan, dan peduli dalam semua interaksi kami.</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up">
            <span>04</span>
            <h4>SENYUMAN</h4>
            <p>Kami bekerja keras dan bermain keras. Di GO Car Wash kami menyukai apa yang kami lakukan dan bersenang-senang melakukannya.</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up">
            <span>05</span>
            <h4>CONTINUES IMPROVEMENT</h4>
            <p>Kami adalah pembelajar. Kami berusaha menjadi lebih baik dari hari ke hari. Kami tidak pernah berpuas diri.</p>
          </div><!-- End Card Item -->
        </div>

      </div>

    </section><!-- /Cards Section -->
    
    <section id="tracking" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Tracking</span>
        <h2>Tracking</h2>
        <center>
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <input type="text" class="form-control" id="plat_nomor" name="plat_nomor" placeholder="Plat Nomor Anda (D123MA)" required="" style="text-align:center;border:#ddd 3px solid;">
            </div>
            <div class="col-md-2">
              <button type="submit" class="form-control" style="background:#fabd0b;color:#fff;" onclick="tracking()">Cari</button>
            </div>
          </div>
        </center>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up">
              
                <div class="col-md-12" id="divprogress" style="display:none;">
                    <div class="card" style="border: 8px solid #f9d018;">
                        <div class="card-header" >
                            <strong class="card-title"><center>PROGRES PENCUCIAN</center></strong>
                        </div>
                        <div class="card-body" align="center">
                        <h2 id="tidaktersedia"><b>Data tidak ditemukan</b></h2>
                        <table class="table">
                            <thead style="text-align: center;">
                                <tr>
                                  <b>
                                  <th id="daftarpng">
                                      <img style="max-width:10%;" src="../admin/images/x.png"><br>
                                  </th>
                                  <th style="width:10%;">
                                      <div class="row" style="margin-bottom:0%;">

                                          <img style="max-width:30%;margin-left:10%;" src="../admin/images/arrow.png"><br>
                                          <img style="max-width:30%;" src="../admin/images/arrow.png"><br>
                                          <img style="max-width:30%;" src="../admin/images/arrow.png"><br>
                                      </div>
                                  </th>
                                  <th id="cucipng">
                                      <img style="max-width:10%;" src="../admin/images/x.png"><br>
                                  </th>
                                  <th style="width:10%;">
                                      <div class="row" style="margin-bottom:0%;">

                                          <img style="max-width:30%;margin-left:10%;" src="../admin/images/arrow.png"><br>
                                          <img style="max-width:30%;" src="../admin/images/arrow.png"><br>
                                          <img style="max-width:30%;" src="../admin/images/arrow.png"><br>
                                      </div>
                                  </th>
                                  <th id="selesaipng">
                                      <img style="max-width:10%;" src="../admin/images/x.png"><br>
                                  </th>
                                  </b>
                              </tr>
                              <tr>
                                  <th>Dalam Antrian</th>
                                  <th></th>
                                  <th>Pencucian</th>
                                  <th></th>
                                  <th id="statusinfo"></th>
                              </tr>
                                    
                            </thead>
                        </table>
                            
                        </div>
                    </div>
                </div>
                <span ><center>
            </div>
          </div><!-- End Info Item -->
          

        </div>

      </div>

    </section>
    
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Paket Harga</span>
        <h2>Paket Harga</h2>
        <b style="color:red;"><p>SETIAP 10X PENCUCIAN MENDAPATKAN GRATIS 1X PENCUCIAN</p></b>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-4 g-lg-0">

          <div class="col-lg-3" data-aos="zoom-in">
            <div class="pricing-item">
              <h3>Reguler Medium</h3>
              <h4><sup>Rp.</sup>60.000</h4>
              <!-- <h4><sup>Rp.</sup>60.000<span> / month</span></h4> -->

              <h3>Reguler Large</h3>
              <h4><sup>Rp.</sup>70.000</h4>
              <!-- <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul> -->
              <!-- <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div> -->
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3" data-aos="zoom-in">
            <div class="pricing-item">
              <h3>Wash&Sealent Medium</h3>
              <h4><sup>Rp.</sup>85.000</h4>
              <!-- <h4><sup>Rp.</sup>60.000<span> / month</span></h4> -->

              <h3>Wash&Sealent Large</h3>
              <h4><sup>Rp.</sup>95.000</h4>
              <!-- <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul> -->
              <!-- <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div> -->
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3 featured" data-aos="zoom-in">
            <div class="pricing-item">
              <h3>Wash + Jamur Kaca Medium</h3>
              <h4><sup>Rp.</sup>100.000</h4>
              <!-- <h4><sup>Rp.</sup>60.000<span> / month</span></h4> -->

              <h3>Wash + Jamur Kaca Large</h3>
              <h4><sup>Rp.</sup>200.000</h4>
              <!-- <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul> -->
              <!-- <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div> -->
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3" data-aos="zoom-in">
            <div class="pricing-item">
              <h3>Wash & Wax All type</h3>
              <h4><sup>Rp.</sup>100.000</h4>
              <!-- <h4><sup>Rp.</sup>60.000<span> / month</span></h4> -->

              <!-- <ul>
                <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul> -->
              <!-- <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div> -->
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
        <span>Informasi</span>
        <h2>Informasi</h2>
        <p>Untuk mengetahui informasi lebih lanjut, silahkan hubungi kontak berikut.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up">
              <i class="bi bi-clock"></i>
              <h3>Jadwal Yang tersedia</h3>
                <span ><center>
                  <?php  
                    if(date('m') =='01'){$bulan = 'Januari';};
                    if(date('m') =='02'){$bulan = 'Februari';};
                    if(date('m') =='03'){$bulan = 'Maret';};
                    if(date('m') =='04'){$bulan = 'April';};
                    if(date('m') =='05'){$bulan = 'Mei';};
                    if(date('m') =='06'){$bulan = 'Juni';};
                    if(date('m') =='07'){$bulan = 'Juli';};
                    if(date('m') =='08'){$bulan = 'Agustus';};
                    if(date('m') =='09'){$bulan = 'September';};
                    if(date('m') =='10'){$bulan = 'Oktober';};
                    if(date('m') =='11'){$bulan = 'November';};
                    if(date('m') =='12'){$bulan = 'Desember';};
                    echo date('d').' '.$bulan.' '.date('Y');
                  ?></center>
                </span><br>
                <table class="table">
                      <thead>
                          <tr>
                              
                                      <?php
                                      
                                          date_default_timezone_set('Asia/Jakarta');
                                          $result2 = mysql_query("
                                                          select 
                                                              TIME_FORMAT(jam,'%H:%i') as jam 
                                                          from
                                                              jam_operasional a
                                                              left join (select jam_pendaftaran,COUNT(*) jml from pendaftaran where tgl_pendaftaran = CURRENT_DATE AND status != 'Batal' GROUP BY jam_pendaftaran) b ON b.jam_pendaftaran = a.jam and b.jml <= 3
                                                          where 
                                                              jam >= now()"
                                                      );

                                          if(mysql_num_rows($result2) >= 1){
                                            while ($row2 = mysql_fetch_array($result2)) {

                                                  echo '<th style="background:#f9d018;font-weight:bold;text-align:center;border:3px solid #fff;">'.$row2['jam'].'</th>';
                                            }

                                          }else{
                                                  echo '<th style="background:#f9d018;font-weight:bold;text-align:center;">Jadwal tidak tersedia</th>';
                                          }

                                      ?>
                                      
                          </tr>
                      </thead>
                </table>
            </div>
          </div><!-- End Info Item -->
          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Jl. Nanjung No.72, Nanjung, Kec. Margaasih, Kabupaten Bandung, Jawa Barat 40217</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>0822-2888-4990</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up">
              <i class="bi bi-clock"></i>
              <h3>Jam Operasional</h3>
              <p>Senin - Minggu <span>08:00 - 20:00</span></p>
            </div>
          </div><!-- End Info Item -->


        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up">
            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Jl.%20Nanjung%20No.72+(gnw%20auto%20wash)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="pages/proses_saran.php" method="post" data-aos="fade-up">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" id="pesan" name="pesan" placeholder="Isi Pesan Anda" required="" ></textarea>
                </div>

                <div class="col-md-6">
                  <input type="number" class="form-control" id="email" name="kebersihan" placeholder="Nilai Point Kebersihan" min="0" max="100" required="">
                </div>

                <div class="col-md-6">
                  <input type="number" class="form-control" id="email" name="keramahan" placeholder="Nilai Point Keramahan" min="0" max="100" required="">
                </div>

                <div class="col-md-6">
                  <input type="number" class="form-control" id="email" name="ketelitian" placeholder="Nilai Point Ketelitian" min="0" max="100" required="">
                </div>

                <div class="col-md-12 text-center">

                  <button type="submit" class="form-control" style="background:#fabd0b;color:#fff;">Send Message</button>
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
  <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
  
  <!-- Main JS File -->
  <script src="./assets3/js/main.js"></script>
  
<script>
			let counter = 0 ;
			setInterval(() => {
				jml = counter++ 
				if(jml == 1000){
					counter = 0 ;
					document.location='index.php';
				}
			}, 1000);

      function tracking() {
        let plat = $("#plat_nomor").val();
        // $("#daftarpng").empty();
        // $("#cucipng").empty();
        // $("#selesaipng").empty();
        $("#daftarpng").html('<img style="max-width:30%;" src="../admin/images/x.png"><br>');
        $("#cucipng").html('<img style="max-width:30%;" src="../admin/images/x.png"><br>');
        $("#selesaipng").html('<img style="max-width:30%;" src="../admin/images/x.png"><br>');
        $("#statusinfo").html('Selesai');
        $.ajax({
          url: "/admin/controller/jsondatacontroller.php",
          type:'post',
          data:{
            'plat'  : plat,
            'class' : 'tracking'
          },
          dataType: "JSON",
          success: function (data, status)
          {
            $("#divprogress").show();
            $("#tidaktersedia").show();
            if (data) {
                $("#tidaktersedia").hide();
                if(data['status'] == 'Pendaftaran'){
                  $("#daftarpng").html('<img style="max-width:30%;" src="../admin/images/daftar.png"><br>');
                }else if(data['status'] == 'Dalam Pengerjaan'){
                  $("#daftarpng").html('<img style="max-width:30%;" src="../admin/images/daftar.png"><br>');
                  $("#cucipng").html('<img style="max-width:30%;" src="../admin/images/pencucian.png"><br>');
                }else if(data['status'] == 'Batal'){
                  $("#daftarpng").html('<img style="max-width:30%;" src="../admin/images/daftar.png"><br>');
                  $("#cucipng").html('<img style="max-width:30%;" src="../admin/images/pencucian.png"><br>');
                  $("#selesaipng").html('<img style="max-width:30%;" src="../admin/images/canceled.png"><br>');
                  $("#statusinfo").html('Dibatalkan');
                }else if(data['status'] == 'Selesai' || data['status'] == 'Lunas'){
                  $("#daftarpng").html('<img style="max-width:30%;" src="../admin/images/daftar.png"><br>');
                  $("#cucipng").html('<img style="max-width:30%;" src="../admin/images/pencucian.png"><br>');
                  $("#selesaipng").html('<img style="max-width:30%;" src="../admin/images/finish.png"><br>');
                  $("#statusinfo").html('Selesai');
                }
              
            }
          },
          });

      }
</script>
</body>

</html>