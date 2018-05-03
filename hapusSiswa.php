<?php
include "connection.php";
$NIS = $_GET['NIS'];
$query = "SELECT * FROM siswa WHERE NIS='".$NIS."'";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_array($sql);
$query2 = "DELETE FROM siswa WHERE NIS='$NIS'";
$sql2 = mysqli_query($conn, $query2);
if($sql2){
	echo '<center><strong>Berhasil</strong></center><br>';
	header("location: adminSiswa.php?pesan=berhasilhapus");
}else{
	echo "Gagal<a href='adminSiswa.php'>Kembali</a>";
}
?>
