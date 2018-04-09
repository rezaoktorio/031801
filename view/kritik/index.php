<!DOCTYPE html>
<html>
<?php require_once('../../controller/header.php'); ?>
    <body onload="table_load();insert_display();">

      <?php require_once('../../controller/navbar.php'); ?>

        <div class="wrapper">
            <div class="container">

                <?php require_once('../../model/kritik/fill.php'); ?>

                <?php require_once('../../controller/bottombar.php'); ?>

            </div>
        </div>
    <?php require_once('../../controller/footer.php'); ?>
    </body>


    <!-- myscript -->
    <script>
      function table_load(){
        url="../handler/kritik/table.php?table=kritik"
        $("#table_area").load(url);
      }
      function insert_display(){
        url="../handler/kritik/insertDisplay.php?display=insertDisplay"
        $("#editing_area").load(url);
      }

      function createExecutor(){
       tanggalkritik=$("#tanggalkritik").val();
        namakritik=$("#namakritik").val();
        subjekkritik=$("#subjekkritik").val();
        kritiksaran=$("#kritiksaran").val();
       
        url="../handler/kritik/insert.php?control=CreateCommit&tanggalkritik="+tanggalkritik+"&namakritik="+namakritik+"&subjekkritik="+subjekkritik+"&kritiksaran="+kritiksaran;
        url=url.replace(/ /g,"%20");
        url=url.replace(/'/g,"");
        $("#action_result").load(url, function(){
          url="../handler/kritik/table.php?table=kritik"
          $("#table_area").load(url);
          insert_display();
        });
      }
    </script>
</html>
