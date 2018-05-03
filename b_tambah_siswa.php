<?php
include 'connection.php';
if (isset($_POST['NIS']) && isset($_POST['Nama']) && isset($_POST['Tmp_Lahir']) && isset($_POST['Tgl_Lahir']) && isset($_POST['Gender']) && isset($_POST['Alamat']) && isset($_POST['Thn_Masuk']))
		{
			$NIS = $_POST['NIS'];
			$Nama = $_POST['Nama'];
			$Tmp_Lahir = $_POST['Tmp_Lahir'];
			$Tgl_Lahir = $_POST['Tgl_Lahir'];
			$Gender = $_POST['Gender'];
			$Alamat = $_POST['Alamat'];
			$Thn_Masuk = $_POST['Thn_Masuk'];
			$result = mysqli_query($conn,"SELECT NIS,Nama,Tmp_Lahir,Tgl_Lahir,Gender,Alamat,Thn_Masuk FROM siswa WHERE (NIS='$NIS' OR Nama='$Nama' OR Tmp_Lahir='$Tmp_Lahir' OR Tgl_Lahir='$Tgl_Lahir' OR Gender='$Gender' OR Alamat='$Alamat OR Thn_Masuk='$Thn_Masuk'')");
			if (mysqli_num_rows($result) > 0)
			{
				echo '<center><strong>Mohon maaf, data yang anda masukkan telah digunakan</strong></center><br>'; 
				header("location: adminSiswa.php?pesan=gagal")
				?>
				<?php
			}
			else
			{
				$sql = "Insert into siswa (NIS,Nama,Tmp_Lahir,Tgl_Lahir,Gender,Alamat,Thn_Masuk) values ('$NIS','$Nama','$Tmp_Lahir','$Tgl_Lahir','$Gender','$Alamat','$Thn_Masuk')";
				$result = mysqli_query($conn,$sql) or mysqli_error($conn);
				echo '<center><strong>Berhasil</strong></center><br>'; 
				header("location: adminSiswa.php?pesan=berhasiltambah");	
		}
	}
?>