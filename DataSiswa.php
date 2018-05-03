<html>
  <head>
  <?php
	include 'connection.php';
?>
 <meta charset="utf-8">
    <title>SDN 006 Balikpapan Utara</title>
	<link rel="stylesheet" type="text/css" href="css/Siswa.css">
	<style type="text/css">
     body {
        background: url('images/sdn006.jpg') no-repeat scroll;
        background-size: 100% 100%;
        min-height: 700px;
	}
	
     ul{
  list-style-type:none;
  margin:0;
  padding:0;
  width:100%;
  background-color:#1c1e21;
  font-family:sans-serif;
  border:1px solid #ccc;
  overflow:hidden;
}
li{
  float:left;
}
li a{
  display:block;
  text-decoration:none;
  color:#c9d0db;
  padding:14px 16px;
  text-align:center;
}
li a:hover{
  background-color:#555;
  color:#fff;
}
li.active a{
  background:c9d0db;
  color:#fff;
}
li.right{
  float:right;
}
ul.fixed-top{
    position: fixed;
    top: 0;
}
ul.fixed-bottom{
    position: fixed;
    bottom: 0;
}
h3 { 
    display: block;
    font-size: 30;
    font-weight: bold;
	color: #e2e0e0;
	font-family: Arial, Helvetica, sans-serif;
	position: fixed;
	bottom: 620px;
	left: 630px;
}
	</style>
  </head>
  <body>
	<header>
		<nav>
			<ul>
				<li class="active"><a href="Beranda.html">Beranda</a></li>
				<li><a href="DataMurid.php">Siswa</a></li>
				<li class="right"><a href="#">Log Out</a></li>
  
			</ul>
		</nav>
	</header>
	<h3>Data Siswa SDN 006</h3>
		<table class="table_sd">
			<tr>
				<th>NIS</th>
				<th>Nama</th>
				<th>Tampat_Lahir</th>
				<th>Tanggal_Lahir</th>
				<th>Gender</th>
				<th>Alamat</th>
				<th>Thn Masuk</th>
			</tr>
			<?php
				$query = mysqli_query ($conn, "SELECT * FROM siswa");
				while($data = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $data['NIS']; ?></td>
				<td><?php echo $data['Nama']; ?></td>
				<td><?php echo $data['Tmp_Lahir']; ?></td>
				<td><?php echo $data['Tgl_Lahir']; ?></td>
				<td><?php echo $data['Gender']; ?></td>
				<td><?php echo $data['Alamat']; ?></td>
				<td><?php echo $data['Thn_Masuk']; ?></td>
			</tr>
				<?php } ?>
</table>
</body>
</html>
