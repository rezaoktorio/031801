<?php
require_once('../../../../controller/connection.php');

  $control=$_GET['control'];
  if($control=='CreateCommit'){
    $embed=$_GET['embed'];
    $nama=$_GET['nama'];

    $query="INSERT INTO iklan(nama_iklan, embed_iklan, status_iklan, tipe_iklan, update_at)
        VALUES('".$nama."', '".$embed."', '0', '1', CURDATE())";
  }

  $result=mysql_query($query);

  if (!$result){
    echo  '
          <div class="alert alert-danger" id="danger-alert">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>Kesalahan! </strong>
              Data iklan masyarakat gagal ditambahkan.
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
              Data iklan masyarakat berhasil ditambahkan.
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