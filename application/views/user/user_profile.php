<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
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
    
<main id="main">
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<header id="header" class="d-flex flex-column justify-content-center">

<nav id="navbar" class="navbar nav-menu">
  <ul>
    <li><a href="<?= base_url('/');?>" class="nav-link scrollto"><i class="bx bx-home"></i><span>Home</span></a></li>
    <li><a href="<?= base_url('logout'); ?>" class="nav-link scrollto"><i class="bx bx-exit"></i> <span>Logout</span></a></li>
  </ul>
</nav><!-- .nav-menu -->

</header><!-- End Header -->
<section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          </div>
      </div>
    </section><!-- End Portfolio Section -->
<!-- ======= About Section ======= -->
<section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">
 
    <div class="section-title">
        <h2><?= $user->username; ?></h2>
        <p>Your Profile</p>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url();?>/assets/user/avatar/<?php echo $user->avatar;?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <div class="portfolio-links">
                  <a href="<?php echo base_url();?>/assets/user/avatar/<?php echo $user->avatar;?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-search"></i></a>
                </div>
              </div>
            </div>
          </div>
      
      <div class="col-lg-8 pt-4 pt-lg-0 content">
        <div class="container" data-aos="fade-up">
        <section id="contact" class="contact">
  <div class="col-lg-8 mt-5 mt-lg-0">

  <form role="form" action="update_profile" method="post" enctype="multipart/form-data">
  <input value="<?= $user->id; ?>" type="hidden" name="id">
     <input value="<?= $user->avatar; ?>" type="hidden" name="old_avatar">
     <div class="row">
                <div class="col-md-6">
                <input type="text" class="form-control" name="username" value="<?= $user->username;?>" required>
                </div>
                <div class="col-md-6">
                <input class="form-control" value="<?= $user->email; ?>" type="email" name="email">
                </div>
              </div>
              <div class="col mt-5">
     <div class="custom-file">
         <input type="file" class="custom-file-input" id="customFile"
             name="new_avatar">
         <label class="custom-file-label" for="customFile">Pilih gambar</label>
     </div>
     <div class="text-center">
         <button type="submit" class="btn btn-primary my-4"
             name="update">Simpan</button>
     </div>
     </div>
     
 </form>

  </div>

</div>

</div>
    </div>
</section>
  </div>
  <?php foreach($posts as $post) : ?>
 		<div class="row py-3 align-items-center">
 			<div class="col-sm-3 text-center">

 				<?php if($user->avatar != null) : ?>
 				    <img src="/assets/user/avatar/<?= $user->avatar; ?>" alt="Rounded image" class="rounded shadow"
 					    width="120" height="120">
 				<?php else : ?>
 				    <img src="<?= base_url(); ?>avatar" alt="Rounded image" class="rounded shadow"
 					    width="120" height="120">
 				<?php endif; ?>
 				
 			</div>
 		    <div class="col-sm-9">
 				<p class="font-weight-bold">
 					<?= $user->username; ?>
                         <small class="text-muted"><?= $post->created_at; ?></small>
                         <span><a class="btn btn-danger btn-sm" href="delete_post/<?= $post->id; ?>">Hapus</a></span>
                         
 				</p>
 				<p><?= $post->content; ?></p>
 			</div>
 		</div>
 	<?php endforeach; ?>
</section>
<!-- End About Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Sweet Escape</h3>
      <p>Dream - Create - Future</p>
      <div class="social-links">
        <a href="#" class="github"><i class="bx bxl-github"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>SweetEscape - Group</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">SweetEsacpe - Group</a>
      </div>
    </div>
  </footer>


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