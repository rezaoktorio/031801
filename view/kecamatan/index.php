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

                <?php require_once('../../model/kecamatan/fill.php'); ?>

                <?php require_once('../../controller/bottombar.php'); ?>

            </div>
        </div>
    <?php require_once('../../controller/footer.php'); ?>
    </body>

 <!-- myscript -->
    <script>
      function table_load(){
        url="../handler/kecamatan/table.php?table=kecamatan"
        $("#table_area").load(url);
      }
      function insert_display(){
        url="../handler/kecamatan/insertDisplay.php?display=insertDisplay"
        $("#editing_area").load(url);
      }

      function filter(){
        kecamatan=$("#kecamatan").val();
        alamat=$("#alamat").val();
        telepon=$("#telepon").val();
       
        url="../handler/kecamatan/filter.php?kecamatan="+kecamatan+"&alamat="+alamat+"&telepon="+telepon;
        url=url.replace(/ /g,"%20");
        $("#modal_area").load(url);
      }

      function createExecutor(){
        kecamatan=$("#kecamatan").val();
        alamat=$("#alamat").val();
        telepon=$("#telepon").val();
       
        url="../handler/kecamatan/insert.php?control=CreateCommit&kecamatan="+kecamatan+"&alamat="+alamat+"&telepon="+telepon;
        url=url.replace(/ /g,"%20");
        $("#action_result").load(url, function(){
          url="../handler/kecamatan/table.php?table=kecamatan"
          $("#table_area").load(url);
          insert_display();
        });
      }

      function DeleteShow(id){
        url="../handler/kecamatan/delete.php?control=DeleteShow&id="+id;
        $("#modal_area").load(url);
      }

      function DeleteExecutor(){
        id=$("#id").val();
        
        url="../handler/kecamatan/delete.php?control=DeleteCommit&id="+id;

        url=url.replace(/ /g,"%20");

        $("#action_result").load(url, function(){
          url="../handler/kecamatan/table.php?table=kecamatan"
          $("#table_area").load(url);
        });
      }

      function UpdateShow(id){
        url="../handler/kecamatan/update.php?control=UpdateShow&id="+id;
        $("#modal_area").load(url);
      }

      function UpdateExecutor(){
        id=$("#id").val();
        kecamatan=$("#kecamatan").val();
        alamat=$("#alamat").val();
        telepon=$("#telepon").val();
        
        url="../handler/kecamatan/update.php?control=UpdateCommit&id="+id+"&kecamatan="+kecamatan+"&alamat="+alamat+"&telepon="+telepon;

        url=url.replace(/ /g,"%20");

        $("#action_result").load(url, function(){
          url="../handler/kecamatan/table.php?table=kecamatan"
          $("#table_area").load(url);
        });
      }

      function KoordinatShow(id){
        url="../handler/kecamatan/koordinat.php?control=KoordinatShow&id="+id;
        $("#modal_area").load(url);
      }

      function KoordinatExecutor(){
        id=$("#id").val();
        lat=$("#lat").val();
        lng=$("#lng").val();
        kecamatan=$("#kecamatan").val();
        alamat=$("#alamat").val();
        telepon=$("#telepon").val();
        
        url="../handler/kecamatan/koordinat.php?control=KoordinatCommit&id="+id+"&lat="+lat+"&lng="+lng+"&kecamatan="+kecamatan+"&alamat="+alamat+"&telepon="+telepon;

        url=url.replace(/ /g,"%20");

        $("#action_result").load(url, function(){
          url="../handler/kecamatan/table.php?table=kecamatan"
          $("#table_area").load(url);
        });
      }

      function DisplayExecutor(id){
        url="../handler/kecamatan/display.php?control=DisplayShow&id="+id;
        $("#modal_area").load(url);
      }
    </script>
</html>
