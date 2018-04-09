<?php
session_start();

//jika session username belum dibuat, atau session username kosong
  if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    //redirect ke halaman login
    header('location:http://031801.webplussolution.com/view/map/');
  }

  //membuat session untuk role/status admin
  require_once('../../controller/connection.php');
  $nik = $_SESSION['username'];
  $executerole = mysql_query("SELECT role FROM admin WHERE nik_admin='$nik'");
  while($rowrole = mysql_fetch_array($executerole)) {
      $_SESSION['statusrole'] = $rowrole['role'];
  }
  
?>

<!DOCTYPE html>
<html>
<?php require_once('../../controller/header.php'); ?>
    <body onload="table_load();insert_display();">

      <?php require_once('../../controller/navbar.php'); ?>

        <div class="wrapper">
            <div class="container">

                <?php require_once('../../model/adminn/fill.php'); ?>

                <?php require_once('../../controller/bottombar.php'); ?>

            </div>
        </div>
    <?php require_once('../../controller/footer.php'); ?>
    </body>


    <!-- myscript -->
    <script>
      function table_load(){
        url="../handler/admin/table.php?table=admin"
        $("#table_area").load(url);
      }
      function insert_display(){
        url="../handler/admin/insertDisplay.php?display=insertDisplay"
        $("#editing_area").load(url);
      }

      function filter(){
        nik=$("#nik").val();
        nama=$("#nama").val();
        email=$("#email").val();
        password=$("#pass").val();
        status=$("#status").val();
       
        url="../handler/admin/filter.php?nik="+nik+"&nama="+nama+"&email="+email+"&password="+password+"&status="+status;
        url=url.replace(/ /g,"%20");
        $("#modal_area").load(url);
      }

      function createExecutor(){
        nik=$("#nik").val();
        nama=$("#nama").val();
        email=$("#email").val();
        password=$("#pass").val();
        status=$("#status").val();
       
        url="../handler/admin/insert.php?control=CreateCommit&nik="+nik+"&nama="+nama+"&email="+email+"&password="+password+"&status="+status;
        url=url.replace(/ /g,"%20");
        $("#action_result").load(url, function(){
          url="../handler/admin/table.php?table=admin"
          $("#table_area").load(url);
          insert_display();
        });
      }

      function DeleteShow(id_admin){
        url="../handler/admin/delete.php?control=DeleteShow&id_admin="+id_admin;
        $("#modal_area").load(url);
      }

      function DeleteExecutor(){
        id_admin=$("#id_admin").val();
        
        url="../handler/admin/delete.php?control=DeleteCommit&id_admin="+id_admin;

        url=url.replace(/ /g,"%20");

        $("#action_result").load(url, function(){
          url="../handler/admin/table.php?table=admin"
          $("#table_area").load(url);
        });
      }

      function UpdateShow(id_admin){
        url="../handler/admin/update.php?control=UpdateShow&id_admin="+id_admin;
        $("#modal_area").load(url);
      }

      function UpdateExecutor(){
        id_admin=$("#id_admin").val();
        nik=$("#nik").val();
        nama=$("#nama").val();
        email=$("#email").val();
        password=$("#pass").val();
        status=$("#status").val();
        aktif=$("#aktif").val();
        
        url="../handler/admin/update.php?control=UpdateCommit&id_admin="+id_admin+"&nik="+nik+"&nama="+nama+"&email="+email+"&password="+password+"&status="+status+"&aktif="+aktif;

        url=url.replace(/ /g,"%20");

        $("#action_result").load(url, function(){
          url="../handler/admin/table.php?table=admin"
          $("#table_area").load(url);
        });
      }
    </script>
</html>
