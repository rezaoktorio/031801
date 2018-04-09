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
    <body onload="table_load();insert_display();">

      <?php require_once('../../controller/navbar.php'); ?>

        <div class="wrapper">
            <div class="container">

                <?php require_once('../../model/kelurahan/fill.php'); ?>

                <?php require_once('../../controller/bottombar.php'); ?>

            </div>
        </div>
    <?php require_once('../../controller/footer.php'); ?>
    </body>

    <script>
      function table_load(){
        url="../handler/kelurahan/table.php?table=kelurahan"
        $("#table_area").load(url);
      }
      function insert_display(){
        url="../handler/kelurahan/insertDisplay.php?display=insertDisplay"
        $("#editing_area").load(url);
      }

      function filter(){
        kelurahan=$("#kelurahan").val();
        kecamatan=$("#kecamatan").val();
        alamat=$("#alamat").val();
        telepon=$("#telepon").val();
       
        url="../handler/kelurahan/filter.php?kelurahan="+kelurahan+"&kecamatan="+kecamatan+"&alamat="+alamat+"&telepon="+telepon;
        url=url.replace(/ /g,"%20");
        $("#modal_area").load(url);
      }

      function createExecutor(){
        kelurahan=$("#kelurahan").val();
        kecamatan=$("#kecamatan").val();
        alamat=$("#alamat").val();
        telepon=$("#telepon").val();
       
        url="../handler/kelurahan/insert.php?control=CreateCommit&kelurahan="+kelurahan+"&kecamatan="+kecamatan+"&alamat="+alamat+"&telepon="+telepon;
        url=url.replace(/ /g,"%20");
        $("#action_result").load(url, function(){
          url="../handler/kelurahan/table.php?table=kelurahan"
          $("#table_area").load(url);
          insert_display();
        });
      }

      function DeleteShow(id_kelurahan){
        url="../handler/kelurahan/delete.php?control=DeleteShow&id_kelurahan="+id_kelurahan;
        $("#modal_area").load(url);
      }

      function DeleteExecutor(){
        id_kelurahan=$("#id_kelurahan").val();
        
        url="../handler/kelurahan/delete.php?control=DeleteCommit&id_kelurahan="+id_kelurahan;

        url=url.replace(/ /g,"%20");

        $("#action_result").load(url, function(){
          url="../handler/kelurahan/table.php?table=kelurahan"
          $("#table_area").load(url);
        });
      }

      function UpdateShow(id_kelurahan){
        url="../handler/kelurahan/update.php?control=UpdateShow&id_kelurahan="+id_kelurahan;
        $("#modal_area").load(url);
      }

      function UpdateExecutor(){
        id_kelurahan=$("#id_kelurahan").val();
        kelurahan=$("#kelurahan").val();
        kecamatan=$("#kecamatan").val();
        alamat=$("#alamat").val();
        telepon=$("#telepon").val();
        
        url="../handler/kelurahan/update.php?control=UpdateCommit&id_kelurahan="+id_kelurahan+"&kelurahan="+kelurahan+"&kecamatan="+kecamatan+"&alamat="+alamat+"&telepon="+telepon;

        url=url.replace(/ /g,"%20");

        $("#action_result").load(url, function(){
          url="../handler/kelurahan/table.php?table=kelurahan"
          $("#table_area").load(url);
        });
      }

      function DisplayExecutor(id){
        url="../handler/kecamatan/display.php?control=DisplayShow&id="+id;
        $("#modal_area").load(url);
      }
    </script>
</html>
