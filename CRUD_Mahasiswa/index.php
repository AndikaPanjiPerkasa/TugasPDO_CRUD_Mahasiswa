<?php 
  
  include "koneksi.php";

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
      <a class="navbar-brand ml-2">Kelompok 1 dan Kelompok 2</a>
      <form class="form-inline">
        <a class="mr-2"><?php echo date('d-m-Y'); ?></a>
      </form>
    </nav>
    <h2 class="text-center mt-5">DATA MAHASISWA</h2>
    <div class="col-lg-10 ml-5">
      <a href="form_tambah.php" class="btn btn-primary ml-2">Tambah</a>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-11 mb-5 mt-3">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Nim</th>
              <th scope="col">TTL</th>
              <th scope="col">Alamat</th>
              <th scope="col">Semester</th>
              <th scope="col">Prodi</th>
              <th scope="col">Foto</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          
          <?php 

            $query = "SELECT * FROM mahasiswa";
            $data = $db->prepare($query);
            $data->execute();

            $no = 1;
            while($tampil = $data->fetch(PDO::FETCH_LAZY)){

           ?>

          <tbody>
            <tr>
              <th scope="row"><?php echo $no++; ?></th>
              <td><?php echo $tampil->nama; ?></td>
              <td><?php echo $tampil->nim; ?></td>
              <td><?php echo $tampil->tempat_tanggal_lahir; ?></td>
              <td><?php echo $tampil->alamat; ?></td>
              <td><?php echo $tampil->semester; ?></td>
              <td><?php echo $tampil->prodi; ?></td>
              <td><img src="images/<?php echo $tampil->foto; ?>" width="27" height="27" alt=""></td>
              <td>
                <a href="form_ubah.php?id=<?php echo $tampil->id ?>" class="btn btn-success mr-2">Ubah</a>
                <a onclick="return confirm('HAPUS DATA INI !?')" href="hapus.php?id=<?php echo $tampil->id ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        <?php } ?>
        </table>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>