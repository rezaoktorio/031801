<?php
require_once('../../../controller/connection.php');

    $kecamatan=$_GET['kecamatan'];
    $kelurahan=$_GET['kelurahan'];
    $alamat=$_GET['alamat'];
    $telepon=$_GET['telepon'];

    $query = mysql_query("SELECT count(id_kelurahan) FROM kelurahan WHERE nama_kelurahan='$kelurahan' ");
    $result=mysql_fetch_array($query);

    if ($result['count(id_kelurahan)']>0){
      echo '
          <div class="modal fade bs-example-modal-sm" id="myModalFilterShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-body" align="center">
                      <img src="../handler/kelurahan/stopIcon.png" style="width:50%"><br><br>
                      Kelurahan sudah ada! 
                    </div>
                  </div>
                </div>
              </div>

            <script language="javascript">
              $("#myModalFilterShow").modal("show");
              setTimeout(function() { $("#myModalFilterShow").modal("hide"); }, 3000);
            </script>
          ';
    
    } else {
        echo  '<script language="javascript">;
          createExecutor();
        </script>';
    }
  
?>