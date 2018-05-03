<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
	<!-- script -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
	<title>Edit Data Siswa</title>
	<script src="js/script.js"></script>
	<link rel="stylesheet" href="css/styles.css">
	<style>
	.card {
		margin-right: auto;
		margin-left: auto;
		margin-bottom: 20px;
		width: 400px;
		padding: 10px;
		border: 1px solid #ccc;
	}
</style>

</head>
<body>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='Beranda.html'>Beranda</a></li>
   <li><a href='DataSiswa.php'>Siswa</a></li>
      <li><a href='HalamanLogin.html'>Log Out</a></li>
</ul>
</div>
					<?php 
					error_reporting(0);
					session_start();
					$user = $_SESSION['admin'];
					$id = $_SESSION['id'];
					$_SESSION['id'] = $id;
					if(isset($_SESSION['admin']))
						echo '<span>    ' .$user.'    </span>';					
					?>
					<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Profil</a>
						<a class="dropdown-item" href="#">Privasi</a>
						<a class="dropdown-item" onclick="keluar()">Keluar</a>
					</div>
				</a>
			</li>
		</ul>
	</div>
</nav><br>
<div class="card">
	<div class="container">
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:55px' class='alert alert-danger text-center' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>Data yang diinput telah digunakan</div>";
			}
		}
		?>
		<?php
		include "connection.php";
		$NIS = $_GET['NIS'];
		$query = "SELECT * FROM siswa WHERE NIS='".$NIS."'";
		$sql = mysqli_query($conn, $query);
		$data = mysqli_fetch_array($sql);
		?>
		<form method="post" action="b_edit_siswa.php?NIS=<?php echo $NIS; ?>" enctype="multipart/form-data">
			<p class="h4 text-center py-4">Ubah Data siswa</p>
			<div class="md-form">
				<i class="fa fa-id-card-o prefix grey-text"></i>
				<input type="text" name="Nama" placeholder="Nama Siswa" value="<?php echo $data['Nama'] ?>">
			</div>

			<div class="md-form">
				<i class="fa fa-list-ol prefix grey-text"></i>
				<input type="text" name="Tmp_Lahir" placeholder="Tempat Lahir" value="<?php echo $data['Tmp_Lahir'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-book prefix grey-text"></i>
				<input type="text" name="Tgl_Lahir" placeholder="Tgl_Lahir" value="<?php echo $data['Tgl_Lahir'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-globe prefix grey-text"></i>
				<input type="text" name="Gender" placeholder="Gender" value="<?php echo $data['Gender'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-sort-numeric-asc prefix grey-text"></i>
				<input type="text" name="Alamat" placeholder="Alamat" value="<?php echo $data['Alamat'] ?>">
			</div>
			<div class="md-form">
				<i class="fa fa-archive prefix grey-text"></i>
				<input type="text" name="Thn_Masuk" placeholder="Stok siswa" value="<?php echo $data['Thn_Masuk'] ?>">
			</div>
			<br>
			<br><br>
			<center class="mb-3"><input type="submit" class="btn btn-primary" value="Simpan">
				<input class="btn btn-danger" type="button" onclick="konfirmasi()" value="Batal"></center>
			</form> 
			<script type='text/javascript'>
				function konfirmasi() {
					var answer = confirm('Ingin meninggalkan form?')
					if (answer){
						window.location = 'adminSiswa.php';
					}
				}
			</script>
		</body>
		</html>
