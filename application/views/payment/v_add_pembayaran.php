<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>
  </head>
  <body>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <h4>TAMBAH DATA STUDIO</h4>
  </div>
  <div class="card-body">

  <form method="POST" action="<?=base_url('admin/studio/simpan') ?>">
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
</form>

  </div>
</div>

</div>
<!-- /.container-fluid -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
