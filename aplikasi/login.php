<?php
include 'config.php';
if(isset($_POST['buka'])){
	$post=amankan($_POST);
	$uid=$post['id'];
	$sandi=md5($post['sandi']);
	$q=mysql_query("select * from karyawan where uid='$uid' and sandi='$sandi'");
	if(mysql_num_rows($q)>0){
		$h=mysql_fetch_array($q);
		$_SESSION['login']=true;
		$_SESSION['uid']=$h['uid'];
		$_SESSION['uid']=$h['nama'];
		$_SESSION['uid']=$h['lastlogin'];
		mysql_query("update karyawan set lastlogin='now()' where uid='$uid'");
		?><script>alert('SUKSES!\n\nAkses terbuka, selamat datang.');</script><?php
	}else{
		?><script>alert('ERROR!\n\nID Pengguna atau Kata Sandi Salah.');</script><?php
	}
	?><script>location.href='index.php';</script><?php
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Software Apotek dan Dokter Praktek">
    <meta name="author" content="Stevanry">
    <meta name="keywords" content="Stevanry, akustevanry@gmail.com">

    <title>Software Apotek dan Dokter Praktek Versi 1.0.0</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="../css/azia.css">
	<style>
	body{
		background-image: url("../img/login.jpg");
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		background-origin: content-box;
	}
	</style>
  </head>
  <body class="az-body" >

    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <h1 class="az-logo">sw<span>apo</span>ter</h1>
        <div class="az-signin-header">
          <h2>Selamat Datang</h2>

          <form method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="id" placeholder="ID Pengguna">
            </div><!-- form-group -->
            <div class="form-group">
              <input type="password" class="form-control" name="sandi" placeholder="Kata Sandi">
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block" type="submit" name="buka">BUKA AKSES</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <p>&copy; <?php echo date('Y'); ?> by <a href="mailto:akustevanry@gmail.com">akustevanry@gmail.com</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>

    <script src="../js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>
