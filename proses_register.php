<?php
	include('koneksi.php');
	$Username		=	$_POST['Username'];
	$Password		=	$_POST['Password'];
	$Email			=	$_POST['Email'];
	$NamaLengkap	=	$_POST['NamaLengkap'];
	$Alamat			=	$_POST['Alamat'];
	
	$sql = mysqli_query($koneksi, "INSERT INTO user(Username, Password, Email, NamaLengkap, Alamat) VALUES('$Username', '$Password', '$Email', '$NamaLengkap', '$Alamat')") or die(mysqli_error($koneksi)); //GANTI
				
				if($sql) //jika data berhasil ditambahkan, maka halaman yang akan terbuka adalah halaman login
				{
					echo '<script>alert("Berhasil melakukan registrasi."); document.location="login.php";</script>'; //GANTI
				}
				else //jika tidak berhasi ditambahkan ke database, maka halaman yang akan terbuka adalah halaman register
				{
					echo '<script>alert("Gagal melakukan proses registrasi"); document.location="register.php";</script>'; //GANTI
				}
?>	