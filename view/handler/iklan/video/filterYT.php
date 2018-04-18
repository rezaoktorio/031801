<?php
require_once('../../../../controller/connection.php');

    $embed=$_GET['embed'];
    $nama=$_GET['nama'];

    $query = mysql_query("SELECT count(id_iklan) FROM iklan WHERE embed_iklan='$embed' ");
    $result=mysql_fetch_array($query);

    if ($result['count(id_iklan)']>0){
      echo '
          <div class="modal fade bs-example-modal-sm" id="myModalFilterShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <div class="modal-body" align="center">
                      <img src="../handler/iklan/stopIcon.png" style="width:50%"><br><br>
                      Embed youtube video sudah ada! 
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
          createExecutorYT();
        </script>';
    }
  
?>
