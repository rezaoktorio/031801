<?php
require_once('../../../controller/connection.php');

  $control=$_GET['control'];
  if($control=='CreateCommit'){
    $kecamatan=$_GET['kecamatan'];
    $alamat=$_GET['alamat'];
    $telepon=$_GET['telepon'];

    $query="INSERT INTO markers(name, address, telepon_kecamatan)
        VALUES(UPPER('".$kecamatan."'), UPPER('".$alamat."'), '(031) ".$telepon."')";
  }

  $result=mysql_query($query);

  if (!$result){
    echo  '
          <div class="alert alert-danger" id="danger-alert">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>Kesalahan! </strong>
              Data Kecamatan gagal ditambahkan.
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
              Data Kecamatan berhasil ditambahkan.
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