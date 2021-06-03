
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
        <li><a href="<?= base_url('/'); ?>" class="nav-link scrollto"><i class="bx bx-home"></i><span>Home</span></a></li>
        <li><a href="<?= base_url(''); ?>booking" class="nav-link scrollto"><i class="bx bx-book-content"></i><span>My Booking</span></a></li>
        <li><a href="<?= base_url('profile'); ?>" class="nav-link scrollto"><i class="bx bx-user"></i><span>Your Profile</span></a></li>
        <li><a href="<?= base_url(); ?>/jadwal" class="nav-link scrollto"><i class="bx bx-calendar"></i> <span>Jadwal Studio</span></a></li>
        <li><a href="logout" class="nav-link scrollto"><i class="bx bx-exit"></i> <span>Logout</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->
  <body>

<section class="section"z id="about2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mobile-bottom-fix">
              
                <?php echo $this->session->flashdata('msg');?>

<div class="card">
  <div class="card-body">
   <?php  
   $data_booking=$this->session->userdata('data_booking');
   
   ?>
   <h5>NOMOR TRANSAKSI : <?= $data_booking['id_transaksi']; ?></h5>
   
   <hr>
    <?php 
           echo form_open_multipart('booking/upload');
           if (isset($error))
           echo '<p>'.$error.'</p>';
        ?>
         <div class="form-group">
    <label>NOMINAL TRANSFER</label>
    <input type="number" class="form-control" name="nominal_bayar" placeholder="Masukan nominal yang di bayarkan">
  </div>
        <select name="tipe_bayar">
          <option value="dp">DOWN PAYMENT</option>
          <option value="lunas">PELUNASAN</option>
        </select>
        <input type="file" name="bukti_bayar">
        <button type="submit" class="btn btn-success">KONFIRMASI PEMBAYARAN</button>
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

</div>
        </div>
    </section>

    
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