<?php
require_once('../../../controller/connection.php');

  $control=$_GET['control'];
  if($control=='CreateCommit'){
    $tanggalkritik=$_GET['tanggalkritik'];
    $namakritik=$_GET['namakritik'];
    $subjekkritik=$_GET['subjekkritik'];
    $kritiksaran=$_GET['kritiksaran'];

    $query="INSERT INTO kritik(nama_kritik, subjek_kritik, isi_kritik, tgl_kritik)
        VALUES(UPPER('".$namakritik."'), '".$subjekkritik."', '".$kritiksaran."', '".$tanggalkritik."')";
  }

  $result=mysql_query($query);

  if (!$result){
    echo  '
          <div class="alert alert-danger" id="success-alert">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>Gagal! </strong>
             Maaf terjadi kesalahan pada sistem kami.
          </div>

         <script language="javascript">
          $("#success-alert").fadeTo(3500, 500).slideUp(500, function(){
              $("#success-alert").slideUp(800);
          });
        </script>
        ';
  }
  else {

    echo '
          <div class="modal fade bs-example-modal-sm" id="myModalFilterShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-body" align="center">
                      <img src="../handler/kritik/maturnuwun.png" style="width:50%"><br><br>
                      <strong>Terima Kasih Atas<br>Saran Dan Kritik Anda</strong>
                    </div>
                  </div>
                </div>
              </div>

            <script language="javascript">
              $("#myModalFilterShow").modal("show");
              setTimeout(function() { $("#myModalFilterShow").modal("hide"); }, 5000);
            </script>
          ';

    
    exit();
  }
?>