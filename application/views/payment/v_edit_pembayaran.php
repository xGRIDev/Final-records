
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
  <div class="card-header py-3">
  <h4>EDIT DATA STUDIO</h4>
  </div>
  <div class="card-body">

  <?php foreach($pembayaran as $u){ ?>
  <form method="POST" action="<?=base_url('pembayaran/update') ?>">
  <input type="hidden" name="id_bayar" value="<?php echo $u->id_bayar ?>">
  <div class="form-group">
    <label>Nomor Transaksi</label>
    <input type="text" class="form-control" name="id_transaksi" value="<?php echo $u->id_transaksi ?>" readOnly>
  </div>
  <div class="form-group">
    <label>Tipe Pembayaran</label>
    <input type="text" class="form-control"  value="<?php echo $u->tipe_bayar ?>" readOnly>
  </div>
 
  <div class="form-group">
    <label>Total Harga Sewa</label>
    <input type="text" class="form-control"  value="<?php echo $u->tarif ?>" readOnly>
  </div>
  <div class="form-group">
    <label>Nominal Transfer</label>
    <input type="text" class="form-control"  name="nominal_bayar" value="<?php echo $u->nominal_bayar ?>">
  </div>
  <div class="form-group">
    <label>Kekurangan</label>
    <?php $kurang=($u->tarif-$u->nominal_bayar); ?>
    <input type="text" class="form-control"  value="<?= $kurang ?>" readOnly>
  </div>

  <div class="form-group">
    <label>Bukti Transfer</label></br>
    <img src="<?php echo base_url();?>/assets/images/bukti_bayar/<?php echo $u->bukti_bayar ?>" class="img-fluid">
  </div>
  <div class="form-group">
    <label>Status Pembayaran</label>
    <select name="status_bayar" class="form-control">
      <option value="peninjauan">PENINJAUAN</option>
      <option value="terima">TERIMA</option>
      <option value="tolak">TOLAK</option>
</select>
<div class="form-group">
<div class="form-group">
    <label >Keterangan</label>
    <textarea class="form-control" name="keterangan" rows="3" placeholder="Masukan Keterangan tambahan jika perlu"><?= $u->keterangan ?></textarea>
  </div>
  </div>
  </div> 
  <button type="submit" class="btn btn-success">UPDATE</button>
  <a href="<?= base_url('admin/transaksi/edit/')?><?= trim($u->id_transaksi) ?>" class="btn btn-danger">RUBAH STATUS BOOKING</a>
  
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