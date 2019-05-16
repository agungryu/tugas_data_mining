<!DOCTYPE html>
<html>
<head><title>Anggota</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div align="center">
<div class="anggota">
<form name="frmanggota" method="post" action="">
<h3>Masukan Nama Anggota</h3>
<input type="text" name="txtanggota">
<input type="submit" value="Simpan" name="bSimpan">
</form>
</div></div>
</body>
</html>
<?php 
if (isset($_POST['bSimpan'])){
	$nama_anggota=$_POST['txtanggota'];
	$sql="insert into anggota (nama_anggota)
	      values ('".$nama_anggota."');";
	$koneksi=mysqli_connect("localhost","root","","pustakac45");	
	$q=mysqli_query($koneksi,$sql);
	if ($q) {
		echo "<script>alert('Rekord sudah disimpan');</script>";
	} else {
		echo "<script>alert('Rekord tidak  tersimpan');</script>";
	}
}
?>