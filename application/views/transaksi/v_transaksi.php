
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
   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Transaction</h1>
      <p>transaction - page <span class="typed" data-typed-items="Final - Records"></span></p>
    </div>
  </section><!-- End Hero -->

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
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Data Transaksi - Tanggal <?= date('d-m-Y') ?></h6>
  </div>
  <div class="card-body">
    <div >
      <table class="table table-bordered table-responsive" id="dataTable">
        <thead>
          <tr>
            <th>No</th>
            <th>ID TRANSAKSI</th>
            <th>Nama Studio</th>
            <th>Jam Sewa</th>
            <th>Nama Member</th>
            <th>Tarif</th>
            <th>Status Pemesanan</th>
            <th>Status Bayar</th>
            <th>Aksi</th>
          
          </tr>
        </thead>
    
        <tbody>
        <?php 
		$no = 1;
		foreach($transaksi as $u){ 
		?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $u->id_transaksi ?></td>
            <td><?= $u->nama_studio ?></td>
            <td><?= $u->jam ?></td>
            <td><?= $u->id_member ?></td>
            <td><?= $u->tarif ?></td>
            <td>
        <?php if($u->status_sewa=="booking") { ?>  
          <span class="badge badge-primary"><?php echo $u->status_sewa ?></span>
        <?php } ?>
        <?php if($u->status_sewa=="selesai") { ?>  
          <span class="badge badge-success"><?php echo $u->status_sewa ?></span>
        <?php } ?>
        <?php if($u->status_sewa=="batal") { ?>  
          <span class="badge badge-danger"><?php echo $u->status_sewa ?></span>
      
        <?php } ?>
      </td>
      <td>
        <?php if($u->status_bayar=="peninjauan") { ?>  
          <span class="badge badge-warning" style="color: black;"><?php echo $u->status_bayar ?></span>
        <?php } ?>
        <?php if($u->status_bayar=="tolak") { ?>  
          <span class="badge badge-danger"><?php echo $u->status_bayar ?></span>
        <?php } ?>
        <?php if($u->status_bayar=="terima") { ?>  
          <span class="badge badge-success"><?php echo $u->status_bayar ?></span>
        <?php } ?>
        
      </td>
            <td>
            <a href="<?= base_url('transaksi/edit/')?><?= trim($u->id_transaksi) ?>" class="btn btn-success btn-circle btn-sm">
                    <i class="fas fa-edit">Edit</i>
                  </a>
         
              <a href="<?= base_url('transaksi/delete/') ?><?= trim($u->id_transaksi)?>" class="btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash">Delete</i>
                  </a>
            </td>
          </tr>
          <?php } ?>
      </table>
    </div>
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