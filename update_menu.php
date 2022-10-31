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

<?php
include '../koneksi.php';
	if (!isset($_GET['id_menu'])) {
		header('location:');
	}
	$id_menu=$_GET['id_menu'];

	$sql="SELECT * FROM menu WHERE id_menu=$id_menu";
	$query	=mysqli_query($koneksi,$sql);
	$edit	=mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query)<1) {
		die("DATA TIDAK DITEMUKAN");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Beranda Pelanggan</title>
</head>
<body>
<a href="insert_menu.php">Tambah Menu</a>
<a href="../proses_login.php?login=out">KELUAR</a>

	<form action="proses/proses_update_menu.php" method="POST" enctype="multipart/form-data">
		<FIELDSET>
			<TABLE>
				<TR>
					<TD>ID MENU</TD>
					<TD><input type="text" name="id_menu" value="<?php echo $edit['id_menu']; ?>" readonly=""></TD>
				</TR>
				<TR>
					<TD>NAMA MENU</TD>
					<TD><input type="text" name="nama_menu" value="<?php echo $edit['nama_menu']; ?>"></TD>
				</TR>
				<TR>
					<TD>JUMLAH STOK</TD>
					<TD><input type="" name="jumlah_stok" value="<?php echo $edit['jumlah_stok']; ?>"></TD>
				</TR>
				<TR>
					<TD>HARGA SATUAN</TD>
					<TD><input type="text" name="harga_satuan" value="<?php echo $edit['harga_satuan']; ?>"></TD>
				</TR>
				<TR>
					<TD>TANGGAL STOK</TD>
					<TD><input type="date" name="tanggal_stok" value="<?php echo $edit['tanggal_stok']; ?>"></TD>
				</TR>
				<TR>
					<TD></TD>
					<TD><input type="submit" name="update_menu"></TD>
				</TR>
			</TABLE>
		</FIELDSET>
	</form>
</body>
</html>