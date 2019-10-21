<?php 

	include "koneksi.php";

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $semester = $_POST['semester'];
    $prodi = $_POST['prodi'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$foto);

	$query = "INSERT INTO mahasiswa VALUES ('','$nama','$nim','$tempat_tanggal_lahir','$alamat','$semester','$prodi','$foto')";

	$tambah = $db->prepare($query);
	$tambah->execute();

	header("location: index.php");

 ?>