<?php 

	include "koneksi.php";

    If(isset($_POST['simpan'])){
    $id=$_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $semester = $_POST['semester'];
    $prodi = $_POST['prodi'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$foto);

	$query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', tempat_tanggal_lahir='$tempat_tanggal_lahir', alamat='$alamat', semester='$semester', prodi='$prodi', foto='$foto' WHERE id='$id'";
    if(empty($foto)){
        $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', tempat_tanggal_lahir='$tempat_tanggal_lahir', alamat='$alamat', semester='$semester', prodi='$prodi' WHERE id='$id'";
    }

	$ubah = $db->prepare($query);
	$ubah->execute();

	header("location: index.php");
}

 ?>