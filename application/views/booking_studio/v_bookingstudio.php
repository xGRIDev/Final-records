<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets/img/xing.png" rel="icon">
  <link href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: MyResume - v4.1.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>


  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

  <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="<?= base_url('/');?>" class="nav-link scrollto active"><i class="bx bx-home"></i><span>Home</span></a></li>
        <!-- <li><a href="/user/u_profile.php" class="nav-link scrollto"><i class="bx bx-user"></i><span>Your Profile</span></a></li> -->
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Timeline</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
        <li><a href="<?= base_url('logout'); ?>" class="nav-link scrollto"><i class="bx bx-exit"></i> <span>Logout</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->


  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1> </h1>
      <p>OnlineBooking <span class="typed" data-typed-items="Final - Records Studio"></span></p>
    </div>
    </section>
     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                   
                        <h5>FORMULIR PEMESANAN STUDIO MUSIK</h5>
                    </div>
                    <form method="post" action="<?=base_url('booking/booking_save') ?>">
                    
                    <div class="form-group">
    <label>Nomor Transaksi</label>
    <input type="text" class="form-control" placeholder="Masukan nama lengkap" name="id_transaksi" readOnly value="<?php echo $no_invoice;?>">
  </div>
                    <div class="form-group">
    <label for="email">Nama lengkap</label>
    <input type="text" class="form-control" placeholder="Masukan nama lengkap" name="id"  value="<?php echo $this->session->userdata("id"); ?>">
  </div>

  <div class="form-group">
    <label for="email">Tanggal</label>
    <input type="date" class="form-control" name="tanggal" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" required>
  </div>

  <div class="form-group">
    <label for="email">Pilih Jam :</label>
    <select class="form-control"  name="id_jam">
            <?php 

            foreach($jam as $row)
            { 
              echo '<option value="'.$row->id_jam.'">'.$row->jam.'</option>';
            
            }
            ?>
            </select>
  </div>
 
  <div class="form-group">
    <label for="email">Pilih Studio :</label>
    <select class="form-control"  name="id_studio">
            <?php 

            foreach($booking as $row)
            { 
              echo '<option value="'.$row->id_studio.'">'.$row->nama_studio.'-'.$row->tarif.'</option>';
            }
            ?>
            </select>
  </div>
 

  <button type="submit" class="btn btn-danger btn-block">PROSES BOOKING</button>
</form> 
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


      </div>
    </section><!-- End Contact Section -->

  
    <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="<?= base_url(); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/typed.js/typed.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/main.js"></script>
  
</body>

</html>