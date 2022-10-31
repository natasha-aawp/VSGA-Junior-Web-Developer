<?php
session_start();

if(!isset($_SESSION['username'])){
	die("ANDA BELUM LOGIN");
}
if ($_SESSION['level']!="owner") {
	die("ANDA BUKAN OWNER");
}
//include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Beranda Owner</title>
	<link rel="stylesheet" type="text/css" href="hias_owner.css">
</head>
<body>
<DIV class="lay">
<div class="header">
	<?php echo "<h3>SELAMAT DATANG</h3>"; ?>
</div>
<div class="menu">
	<ul>
		<li><a href="index_owner.php">BERANDA</a></li>
		<li class="actice"><a href="select_menu.php">TAMPIL DATA MENU</a></li>
		<li><a href="insert_menu.php">TAMBAH MENU</a></li>
		<li><a href="select_user.php">TAMPIL DATA USER</a></li>
		<li><a href="insert_user.php">TAMBAH USER</a></li>
		<li><a href="laporan.php">LAPORAN</a></li>
		<li><a href="../proses_login.php?login=out">KELUAR</a></li>
	</ul>
</div>
<div class="body">
<form action="proses/tambah_stok.php" method="POST" enctype="multipart/form-data">
	<table>
		<tr><td colspan="3">PENAMBAHAN STOK</td></tr>
			<tr><td><input type="hidden" name="id"></td>
			<td>NAMA MENU<select name="nama_menu">
			<option value="Silahkan Pilih Menu"></option>
				<?php
				include '../koneksi.php';
					$q=mysqli_query($koneksi, "SELECT * FROM menu");
					while ($data=mysqli_fetch_assoc($q)) {
						echo '<option value="'.$data['nama_menu'].'">'.$data['nama_menu'].'</option>';
					}
				?>
			</select></td>
			<td>JUMLAH STOK<input type="number" name="jml_stok"></td>
			<td><input type="submit" name="tambah" value="Tambah"></td>
		</tr>
	</table>
	
</form>
<form action="" method="POST" >
	<table  align="center" class="table1">
		<thead>

			<tr>
				<th>ID MENU</th>
				<th>FOTO MENU</th>
				<th>NAMA MENU</th>
				<th>JUMLAH STOK</th>
				<th>HARGA SATUAN</th>
				<th>AKSI<th>				
			</tr>
		</thead>
		<tbody>
			<?php
			include '../koneksi.php';//ORDER BY tanggal DESC
			$sql="SELECT * FROM menu ";
			$eksekusi=mysqli_query($koneksi, $sql);
			$no=1;
			while ($tampil=mysqli_fetch_array($eksekusi)) {
				echo "<tr>";
				echo "<td>".$tampil['id_menu']."</td>";
				echo "<td><img src='../$tampil[gambar]' width='100' height='100'></td>";
				echo "<td>".$tampil['nama_menu']."</td>";
				echo "<td>".$tampil['jumlah_stok']."</td>";
				echo "<td>".$tampil['harga_satuan']."</td>";
				//echo "<td>".$tampil['tanggal_stok']."</td>";
				echo "<td><a href='form_edit_menu.php?id_menu=".$tampil['id_menu']."' class='login-button1' class='login-text'>Edit</a>        <a href='proses/proses_hapus_menu.php?id_menu=".$tampil['id_menu']."' class='login-button2' class='login-text'>hapus</a>";
				echo "</tr>";
				$no++;
			}
			?>
		</tbody>
	</table>
</form>
</div>
</DIV>
</body>
</html>