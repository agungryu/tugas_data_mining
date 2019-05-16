<!DOCTYPE html>
<html>
 <head>
  <title>Pengguna</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div align="center">
 <form name="frmanggota" method="post" action="">
 <div class=box>
 <h2>Masukan Pengguna Baru</h2>
    <form method="post" name="formlogin">
	 <div class="inputBox">
	  <input type="text" name="txtusername" placeholder="username">
	  <label>Username</label>
	 </div>
	 <div class="inputBox">
	 <input type="text" name="txtpassword" placeholder="password" autocomplete="off">
	  <label>Password</label>
	 </div>
	 <input type="submit" value="Simpan" name="bSimpan"></p>
</div>
</form>
</div>
 </body>
</html>
<?php if (isset($_POST['bSimpan'])) {
  $Username=$_POST['txtusername'];
  $Password=$_POST['txtpassword'];
  if ((empty($Username)) OR (empty($Password))) exit;
  $koneksi=mysqli_connect("localhost","root","","pustakac45");
  $sql="insert into pengguna (username,password) values('".$_POST['txtusername']."','".$_POST['txtpassword']."');";
  $q=mysqli_query($koneksi,$sql);
  if ($q) {
		echo "<script>alert('Pengguna sudah disimpan');</script>";
  }else {
		echo "<script>alert('Pengguna tidak  tersimpan');</script>";
	}
}
?>