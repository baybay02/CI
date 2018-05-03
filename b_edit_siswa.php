<?php
include "connection.php";
$NIS = $_GET['NIS'];
$Nama = $_POST['Nama'];
$Tmp_Lahir = $_POST['Tmp_Lahir'];
$Tgl_Lahir = $_POST['Tgl_Lahir'];
$Gender = $_POST['Gender'];
$Alamat = $_POST['Alamat'];
$Thn_Masuk = $_POST['Thn_Masuk'];
$query = "SELECT * FROM siswa WHERE NIS='".$NIS."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		$query = "UPDATE siswa SET Nama='".$Nama."', Tmp_Lahir='".$Tmp_Lahir."', Tgl_Lahir='".$Tgl_Lahir."', Gender='".$Gender."', Alamat='".$Alamat."', Thn_Masuk='".$Thn_Masuk."' WHERE NIS='".$NIS."'";
	$sql = mysqli_query($conn, $query);
		header("location: adminSiswa.php?pesan=berhasilubah");

		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='editsiswa.php'>Kembali Ke Form</a>";
?>