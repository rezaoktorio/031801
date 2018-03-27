<?php
require_once('../../../controller/connection.php');


  $control=$_GET['control'];
  if($control=='CreateCommit'){
    $nik=$_GET['nik'];
    $nama=$_GET['nama'];
    $email=$_GET['email'];
    $pass=$_GET['password'];

    $query="INSERT INTO admin(nik_admin, nama_admin, email_admin, password, status, tgl_gabung)
        VALUES('".$nik."', '".$nama."','".$email."','".$pass."','1', CURDATE())";
  }

  $result=mysql_query($query);

  if (!$result){
    echo  '
          <div class="alert alert-danger" id="danger-alert">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>Kesalahan! </strong>
              Data admin gagal ditambahkan.
          </div>

         <script language="javascript">
          $("#danger-alert").fadeTo(4000, 500).slideUp(500, function(){
              $("#danger-alert").slideUp(1000);
          });
        </script>
        ';
  }
  else {
    echo  '
          <div class="alert alert-success" id="success-alert">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>Sukses! </strong>
              Data admin berhasil ditambahkan.
          </div>

         <script language="javascript">
          $("#success-alert").fadeTo(3500, 500).slideUp(500, function(){
              $("#success-alert").slideUp(800);
          });
        </script>
        ';
    exit();
  }
?>