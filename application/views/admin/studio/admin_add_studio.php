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

</head>
<body>
<!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="<?= base_url('/admin');?>" class="nav-link scrollto active"><i class="bx bx-home"></i><span>Home</span></a></li>
        <li><a href="<?= base_url('studio');?>" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Studio</span></a></li>
        <!-- <li><a href="/user/u_profile.php" class="nav-link scrollto"><i class="bx bx-user"></i><span>Your Profile</span></a></li> -->
        <li><a href="<?= base_url('logout');?>" class="nav-link scrollto"><i class="bx bx-exit"></i> <span>Logout</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->
    
     <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Final - Records</h1>
      <p>OnlineBooking <span class="typed" data-typed-items="Final - Records Studio"></span></p>
    </div>
  </section><!-- End Hero -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Add Studio</h2>
          <p>Insert New Studio</p>
        </div>
        <?php 
           echo form_open_multipart('studio/save');
           if (isset($error))
           echo '<p>'.$error.'</p>';
        ?>
  <div class="form-group">
    <label>Nama Studio</label>
    <input type="text" class="form-control" name="nama_studio" placeholder="Masukan nama studio" required>
  </div>
  <div class="form-group">
    <label>Tarif Sewa</label>
    <input type="number" class="form-control" name="tarif" placeholder="Masukan tarif sewa studio" required>
  </div>
  <div class="form-group">
    <label>Deskripsi</label>
    <textarea placeholder="jelaskan deskripsi studio" class="form-control" name="deskripsi" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="gambar">
  </div>
  <button type="submit" class="btn btn-primary">SIMPAN</button>
  <?php 
              echo form_close(); 
              if(isset($upload_data)):
        ?>
        <p> <?php echo $this->session->flashdata('upload_sukses');?><p>
        <?php 
         endif;
        ?>
  </div>
                </div>
    </section><!-- End Resume Section -->
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