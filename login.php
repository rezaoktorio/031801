<?php
session_start();

if (!empty($_SESSION['username'])) {
  header('location:view/map/');
}
?>
<html>
<?php require_once('controller/header.php'); ?>

<body>

<?php
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
  if ($_GET['error'] == 1) {
    // echo '<center><h3>NIK dan Password belum diisi!</h3></center>';
    ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        NIK dan Password belum diisi!
    </div>
    <?php
  } else if ($_GET['error'] == 2) {
    // echo '<center><h3>Isi NIK dengan benar!</h3></center>';
    ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Isi NIK dengan benar!
    </div>
    <?php
  } else if ($_GET['error'] == 3) {
    // echo '<center><h3>Isi Password dengan benar!</h3></center>';
    ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Isi Password dengan benar!
    </div>
    <?php
  } else if ($_GET['error'] == 4) {
    // echo '<center><h3>Admin tidak terdaftar!</h3></center>';
    ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        Admin tidak terdaftar!
    </div>
    <?php
  }
}
?>

<div class="col-lg-3 col-md-3" style="padding-top:12%;border:solid black 0px;">

</div>
<div class="col-lg-6 col-md-6" style="padding-top:10%;border:solid black 0px;background:;">
  <div class="col-lg-12 col-md-12" style="border-top:solid black 0px;background:#34495E;">
    <center>
        <font><h3 style="color:white"><i class="fa fa-paw"></i> SIG Dispendukcapil</h3></font>
      </center>
  </div>
  <div class="col-lg-6 col-md-6" style="padding-top:3%;border:solid black 0px;">
    <center><img class="img-responsive thumbnail" style="width:85%;float:" src="assets/images/login.jpg"></center>
  </div>
  <div class="col-lg-6 col-md-6" style="padding-top:2%;border:solid black 0px;">
    <form class="form-inline" role="form" name="login" action="otentikasi.php" method="post">
      <div class="form-group has-success has-feedback" style="margin-bottom:4%">
        <label class="control-label" for="inputSuccess4"><font style="color:#34495E">NIK</font></label><br>
        <input type="text" class="form-control" name="username" id="inputSuccess4">
      </div>
      <div class="form-group has-success has-feedback">
        <label class="control-label" for="inputSuccess4"><font style="color:#34495E">Password</font></label><br>
        <input type="password" class="form-control" name="password" id="inputSuccess4"><br>
        <input class="btn btn-default" style="margin-top:4%;background:#34495E;color:#4ECDC4" type="submit" name="login" value="Login" />
        <!-- <a href="http://031801.webplussolution.com/view/lupa/" class="btn btn-danger" style="margin-top:4%;background:#34495E;color:#4ECDC4" type="button">Lupa</a> -->
        <!-- <a href="#custom-modal-lupa" data-animation="flash" data-plugin="custommodal"
          data-overlaySpeed="100" data-overlayColor="#36404a" class="btn btn-danger waves-effect waves-light" style="margin-top:4%;background:#34495E;color:#4ECDC4" type="button">Lupa</a> -->
        <a href="http://031801.webplussolution.com/view/map/" class="btn btn-info" style="margin-top:4%;background:#34495E;color:#4ECDC4" type="button">Batal</a>
      </div>
    </form>
  </div>
  <div class="col-lg-12 col-md-12" style="color:#34495E;border-top:solid #34495E 1px;margin-top:2%">
    <center>
        <h1>Dinas Kependudukan dan Pencatatan Sipil</h1>
        <p>Sistem Informasi Geografis<br>Gedung Siola Jl. Tunjungan 01-03, Surabaya, Jawa Timur<br>2018 © All Rights Reserved.</p>
      </center>
  </div>
</div>
<div class="col-lg-3 col-md-3" style="padding-top:12%;border:solid black 0px;">

</div>
<?php require_once('controller/footer.php'); ?>
</body>
</html>
