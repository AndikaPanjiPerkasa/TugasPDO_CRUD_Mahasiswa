<?php 
  
  include "koneksi.php";

  $id = $_GET['id'];

  $query = "SELECT * FROM mahasiswa WHERE id='$id'";

  $data = $db->prepare($query);
  $data->execute();

  $tampil = $data->fetch(PDO::FETCH_LAZY)

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a class="navbar-brand ml-2">Kelompok 2</a>
      <form class="form-inline">
        <a class="mr-2"><?php echo date('d-m-Y'); ?></a>
      </form>
    </nav>
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a href="index.php" class="btn btn-info mt-2 ml-2">Kembali</a>
    </nav>
    <h2 class="text-center mt-4">UBAH DATA MAHASISWA</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8 mt-4 mb-5">
        <form action="ubah.php" method="post" enctype="multipart/form-data">
        	<input type="hidden" name="id" value="<?php echo $tampil->id ?>">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" pattern="[A-Za-z ]+" name="nama" class="form-control" required value="<?php echo $tampil->nama ?>">
          </div>
          <div class="form-group">
            <label>Nim</label>
            <input type="text" name="nim" class="form-control" required value="<?php echo $tampil->nim ?>">
          </div>
          <div class="form-group">
            <label>Tempat Tanggal Lahir</label>
            <input type="text" name="tempat_tanggal_lahir" class="form-control" required value="<?php echo $tampil->tempat_tanggal_lahir ?>">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" required value="<?php echo $tampil->alamat ?>">
          </div>
          <div class="form-group">
            <label>Semester</label>
            <input type="text" class="form-control" name="semester" required value="<?php echo $tampil->semester ?>">
          </div>
          <div class="form-group">
            <label>Prodi</label>
            <input type="text" class="form-control" name="prodi" required value="<?php echo $tampil->prodi ?>">
          </div>
          <div class="form-group">
            <label>Foto</label><br>
            <input type="file" class="form-control" name="foto"><br>
            <img src="images/<?php echo $tampil['foto']; ?>" width="100" height="100" alt="">
            <!-- <input type="file" class="form-control" name="foto" required value="<?php echo $tampil->foto ?>"> -->
          </div>
          <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>