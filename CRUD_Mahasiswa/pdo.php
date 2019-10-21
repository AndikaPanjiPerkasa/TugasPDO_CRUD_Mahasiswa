<?php 
	print_r(PDO::getAvailableDrivers());
 ?>
<br
<?

	try{

		// buat koneksi dengan database
		$koneksi = new PDO('mysql:host=localhost;dbname=crud',"root","");
		// set error mode
		$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// hapus koneksi
		$koneksi = null;
		
	}
	catch(PDOException $e){
		// tampilkan pesan kesalahan jika koneksi gagal
		print "Koneksi atau query bermasalah: ".$e->getMessage()."<br/>";
		die();
	}

 ?>