
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
        <li><a href="<?= base_url('/admin');?>" class="nav-link scrollto active"><i class="bx bx-home"></i><span>Home</span></a></li>
        <li><a href="<?= base_url('studio');?>" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Studio</span></a></li>
        <li><a href="<?= base_url('logout'); ?>" class="nav-link scrollto"><i class="bx bx-exit"></i> <span>Logout</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->


  </header><!-- End Header -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<?php foreach($transaksi as $u){ ?>
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Data Transaksi : Nomor Transaksi - <?php echo $u->id_transaksi ?></h6>
  </div>
  <div class="card-body">

  
  <form method="POST" action="<?=base_url('admin/transaksi/update') ?>">
  <input type="hidden" name="id_transaksi" value="<?php echo $u->id_transaksi ?>">
  <div class="form-group">
    <label>ID TRANSAKSI</label>
    <input type="text" class="form-control" name="id_transaksi" value="<?php echo $u->id_transaksi ?>" readOnly>
  </div>
  <div class="form-group">
    <label>Tanggal</label>
    <input type="date" class="form-control" name="tanggal" value="<?php echo $u->tanggal ?>" readOnly>
  </div>
  <div class="form-group">
    <label>Nama Member</label>
    <input type="text" class="form-control" name="id_member" value="<?php echo $u->nama_member ?>" readOnly>
  </div>
  <div class="form-group">
    <label>Jam Sewa</label>
    <input type="text" class="form-control" name="id_jam" value="<?php echo $u->jam ?>" readOnly>
  </div>
  <div class="form-group">
    <label>Studio</label>
    <input type="text" class="form-control" name="id_studio" value="<?php echo $u->nama_studio ?>" readOnly>
  </div>
  <div class="card">
  <div class="card-body">
    <h4>TARIF STUDIO Rp. <?php echo $u->tarif ?></h4>
  </div>
</div>
  <hr>
  <div class="form-group">
    <div div class="alert alert-danger" role="alert">
      Sebelum melakukan perubahan status sewa, silahkan verifikasi status pembayaran dan pastikan member melakukan DP/pelunasan
    </div>
  </div>
  <div class="form-group">
  <a href="<?php echo base_url('pembayaran/edit/') ?><?php echo $u->id_bayar ?>" class="btn btn-danger btn-icon-split btn-sm pull-right btn-block">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">CEK PEMBAYARAN</span>
                  </a>
  </div>
  <?php if($u->status_bayar=="peninjauan") { echo ""; } else { ?>
  <div class="form-group">
    <label>Status Sewa</label>
    <select name="status_sewa" class="form-control">
      <option value="booking">BOOKING</option>
      <option value="selesai">SELESAI</option>
      <option value="batal">BATAL</option>
</select>
  </div>
  <button type="submit" class="btn btn-success">UPDATE</button>
  <?php  } ?>
  
  
</form>
<?php } ?>
  </div>
</div>

</div>
<!-- /.container-fluid -->

      </div>
    </section>


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