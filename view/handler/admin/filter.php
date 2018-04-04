<?php
require_once('../../../controller/connection.php');

    $nik=$_GET['nik'];
    $nama=$_GET['nama'];
    $email=$_GET['email'];
    $pass=$_GET['password'];

    $query = mysql_query("SELECT count(id_admin) FROM admin WHERE (nik_admin='$nik' or email_admin='$email') and status='1'");
    $result=mysql_fetch_array($query);

    if ($result['count(id_admin)']>0){
      echo '
          <div class="modal fade bs-example-modal-sm" id="myModalFilterShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-body" align="center">
                      <img src="../handler/admin/stopIcon.png" style="width:50%"><br><br>
                      NIK atau Email sudah ada! 
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