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

                <?php require_once('../../model/kordinat/fill.php'); ?>

                <?php require_once('../../controller/bottombar.php'); ?>

            </div>
        </div>
    <?php require_once('../../controller/footer.php'); ?>
    </body>

    <script>
      function table_load(){
        url="../handler/koordinat/table.php?table=koordinat"
        $("#table_area").load(url);
      }

      function filter(){
        kelurahan=$("#kelurahan").val();
        kecamatan=$("#kecamatan").val();
        alamat=$("#alamat").val();
        telepon=$("#telepon").val();
       
        url="../handler/koordinat/filter.php?kelurahan="+kelurahan+"&kecamatan="+kecamatan+"&alamat="+alamat+"&telepon="+telepon;
        url=url.replace(/ /g,"%20");
        $("#modal_area").load(url);
      }

      function UpdateShow(id){
        url="../handler/koordinat/update.php?control=UpdateShow&id="+id;
        $("#modal_area").load(url);
      }

      function UpdateExecutor(){
        id=$("#id").val();
        lat=$("#lat").val();
        lng=$("#lng").val();
        embed=$("#embed").val();
        
        url="../handler/koordinat/update.php?control=UpdateCommit&id="+id+"&lat="+lat+"&lng="+lng+"&embed="+embed;

        url=url.replace(/ /g,"%20");

        $("#action_result").load(url, function(){
          url="../handler/koordinat/table.php?table=koordinat"
          $("#table_area").load(url);
        });
      }

      function DisplayExecutor(id){
        url="../handler/koordinat/display.php?control=DisplayShow&id="+id;
        $("#modal_area").load(url);
      }
    </script>
</html>
