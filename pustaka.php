<!DOCTYPE html>
<html>
 <head>
  <title>Pustaka</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div align="center">
<div class="pustaka">
 <form name="frmanggota" method="post" action="">
<h3>Pustaka</h3>
<input type="text" name="txtidkelompok" placeholder="idkelompok">
<input type="text" name="txtjudul" placeholder="Judul"><br><br>
<input type="text" name="txtpengarang" placeholder="Pengarang">
<input type="text" name="txttahunterbit" placeholder="Tahun Terbit"><br><br>
<input type="submit" value="Simpan" name="bSimpan"></p>
</form>
</div></div>
 </body>
</html>
<?php if (isset($_POST['bSimpan'])) {
  $idkelompok=$_POST['txtidkelompok'];
  $Judul=$_POST['txtjudul'];
  $Pengarang=$_POST['txtpengarang'];
  $Tahunterbit=$_POST['txttahunterbit'];
  if ((empty($Judul)) OR (empty($Pengarang)) OR (empty($Tahunterbit))) exit;
  $koneksi=mysqli_connect("localhost","root","","pustakac45");
  $sql="insert into pustaka (id_kelompok,judul_pustaka,pengarang,tahun_terbit) values('".$_POST['txtidkelompok']."','".$_POST['txtjudul']."','".$_POST['txtpengarang']."','".$_POST['txttahunterbit']."');";
  $q=mysqli_query($koneksi,$sql);
  if ($q) {
		echo "<script>alert('Rekord sudah disimpan');</script>";
	} else {
		echo "<script>alert('Rekord tidak  tersimpan');</script>";
	}
}
?>