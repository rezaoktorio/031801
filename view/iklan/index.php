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
    <body>

      <?php require_once('../../controller/navbar.php'); ?>

        <div class="wrapper">
            <div class="container">

                <?php require_once('../../model/iklan/fill.php'); ?>

                <?php require_once('../../controller/bottombar.php'); ?>

            </div>
        </div>
    <?php require_once('../../controller/footer.php'); ?>
    </body>
</html>
