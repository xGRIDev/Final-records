
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
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Payment</h1>
      <p>OnlineBooking <span class="typed" data-typed-items="Final - Records Studio"></span></p>
    </div>
  </section><!-- End Hero -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
      <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h4 mb-2 text-gray-800">DATA PEMBAYARAN TRANSAKSI </h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">

  </div>
  <div class="card-body">
    <div >
      <table class="table table-bordered table-responsive" id="dataTable">
        <thead>
          <tr>
            <th>No</th>
            <th>ID TRANSAKSI</th>
            <th>Tipe Bayar</th>
            <th>Nominal</th>
            <th>Status Bayar</th>
            
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
    
        <tbody>
        <?php 
		$no = 1;
		foreach($pembayaran as $u){ 
		?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $u->id_transaksi ?></td>
            <td><?= $u->tipe_bayar ?></td>
            <td><?= $u->nominal_bayar ?></td>
            <td><?= $u->status_bayar ?></td>
            
            <td><?= $u->keterangan ?></td>
            <td>
            <a href="<?= base_url('pembayaran/edit/') ?><?= $u->id_bayar?>" class="btn btn-success btn-circle btn-sm">
                    <i class="fas fa-edit">Edit</i>
                  </a>
                  <span><a class="btn btn-danger btn-sm" href="<?= base_url('pembayaran/delete/') ?><?= $u->id_bayar?>">Hapus</a></span>
            </td>
          </tr>
          <?php } ?>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- Begin Page Content -->
      </div>
    </section>

</div>
</section><script src="<?= base_url(); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/typed.js/typed.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery-3.6.0.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/main.js"></script>
  <script>
  $('.btn-danger').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
  title: 'Delete This Content ?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value){
  document.location.href = href;
}
})
  })
    $('#btn').on('click', function(){
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
});

  </script>
</body>

</html>