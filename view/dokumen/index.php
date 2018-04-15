<?php
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    //redirect ke halaman login
    header('location:http://031801.webplussolution.com/view/map/');
}
?>
<!DOCTYPE html>
<html>
<?php require_once('../../controller/header.php'); ?>
    <body onload="table_load();">

      <?php require_once('../../controller/navbar.php'); ?>

        <div class="wrapper">
            <div class="container">

                <?php require_once('../../model/dokumen/fill.php'); ?>

                <?php require_once('../../controller/bottombar.php'); ?>

            </div>
        </div>
    <?php require_once('../../controller/footer.php'); ?>
    </body>

    <script type="text/javascript">
        function table_load(){
        url="../handler/dokumen/table.php?table=dokumen"
        $("#table_area").load(url);
      }

      function DeleteModal(){
        url="../handler/dokumen/delete.php?control=DeleteModal";
        $("#area_delete").load(url);
      }
      function DeleteShow(){
        tglperiodeDel=$("#tglperiodeDel").val();

        url="../handler/dokumen/delete.php?control=DeleteShow&tglperiodeDel="+tglperiodeDel;
        $("#modal_area").load(url);
      }

      function DeleteExecutor(){
        tglupdate=$("#tglupdate").val();
        
        url="../handler/dokumen/delete.php?control=DeleteCommit&tglupdate="+tglupdate;

        url=url.replace(/ /g,"%20");

        $("#action_result").load(url, function(){
          url="../handler/dokumen/table.php?table=dokumen"
          $("#table_area").load(url);
        });
      }

    </script>
    <script type="text/javascript">
      $('.datepicker').datepicker({
        autoclose: true,
        orientation: "auto",
        todayHighlight: true,
        format: "yyyy-mm",
        startView: "months", 
        minViewMode: "months",
        endDate: '+0d'
      });
    </script>
</html>
