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

                <?php require_once('../../model/iklan/fill.php'); ?>

                <?php require_once('../../controller/bottombar.php'); ?>

            </div>
        </div>
    <?php require_once('../../controller/footer.php'); ?>
    </body>

    <script>
      function table_load(){
        url="../handler/iklan/table.php?table=iklan"
        $("#table_area").load(url);
      }
      function insert_display(){
        url="../handler/iklan/insertDisplay.php?display=insertDisplay"
        $("#editing_area").load(url);
      }

      function filter(){
        embed=$("#embed").val();
        nama=$("#nama").val();
       
        url="../handler/iklan/filter.php?embed="+embed+"&nama="+nama;
        url=url.replace(/ /g,"%20");
        $("#modal_area").load(url);
      }

      function createExecutor(){
        embed=$("#embed").val();
        nama=$("#nama").val();
       
        url="../handler/iklan/insert.php?control=CreateCommit&embed="+embed+"&nama="+nama;
        url=url.replace(/ /g,"%20");
        $("#action_result").load(url, function(){
          url="../handler/iklan/table.php?table=iklan"
          $("#table_area").load(url);
          insert_display();
        });
      }

      function DeleteShow(id_iklan){
        url="../handler/iklan/delete.php?control=DeleteShow&id_iklan="+id_iklan;
        $("#modal_area").load(url);
      }

      function DeleteExecutor(){
        id_iklan=$("#id_iklan").val();
        
        url="../handler/iklan/delete.php?control=DeleteCommit&id_iklan="+id_iklan;

        url=url.replace(/ /g,"%20");

        $("#action_result").load(url, function(){
          url="../handler/iklan/table.php?table=iklan"
          $("#table_area").load(url);
        });
      }

      function UpdateShow(id_iklan){
        url="../handler/iklan/update.php?control=UpdateShow&id_iklan="+id_iklan;
        $("#modal_area").load(url);
      }

      function UpdateExecutor(){
        embed=$("#embed").val();
        nama=$("#nama").val();
        status=$("#status").val();
        id=$("#id_iklan").val();
        
        url="../handler/iklan/update.php?control=UpdateCommit&id_iklan="+id+"&nama="+nama+"&embed="+embed+"&status="+status;

        url=url.replace(/ /g,"%20");

        $("#action_result").load(url, function(){
          url="../handler/iklan/table.php?table=iklan"
          $("#table_area").load(url);
        });
      }

      function Petunjuk(){
        url="../handler/iklan/petunjukmengisi.php";
        $("#modal_info").load(url);
      }

      function DisplayExecutor(id_iklan){
        url="../handler/iklan/display.php?control=DisplayShow&id_iklan="+id_iklan;
        $("#modal_info").load(url);
      }
    </script>
</html>
