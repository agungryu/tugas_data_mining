<!DOCTYPE html>
<html>
<head><title>Kelompok Pustaka</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div align="center">
<div class="anggota">
<form name="frmpustaka" method="post" action="">
<h3>Masukan Nama Kelompok Pustaka</h3>
<input type="text" name="txtkelompok">
<input type="submit" value="Simpan" name="bSimpan"></p>
</form>
</div></div>
</body>
</html>
<?php 
if (isset($_POST['bSimpan'])){
	$nama_kelompok=$_POST['txtkelompok'];
	$sql="insert into kelompok_pustaka (nama_kelompok)
	      values ('".$nama_kelompok."');";
	$koneksi=mysqli_connect("localhost","root","","pustakac45");	
	$q=mysqli_query($koneksi,$sql);
	if ($q) {
		echo "<script>alert('Rekord sudah disimpan');</script>";
	} else {
		echo "<script>alert('Rekord tidak  tersimpan');</script>";
	}
}
?>