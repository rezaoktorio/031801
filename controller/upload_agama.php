<?php
include "excel_reader2.php";
$username = "root";
$password = "";
$database = "sig";

mysql_connect("localhost", $username, $password);
mysql_select_db($database);

$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);
// default nilai
$sukses = 0;
$gagal = 0;

for ($i=2; $i<=$hasildata; $i++)
{
  $data1 = $data->val($i,2);
  $data2 = $data->val($i,3);
  $data3 = $data->val($i,4);
  $data4 = $data->val($i,5);
  $data5 = $data->val($i,6);
  //$date = date('Y-m-d H:i:s');
  //$rand = rand();

$query = "INSERT INTO agama  VALUES ('$data1','$data2','$data3', '$data4', '$data5')";
$hasil = mysql_query($query);

if ($hasildata) $sukses++;
else $gagal++;

//echo "<pre>";
//print_r($query);
//echo "Maaf, terjadi kesalahan dalam import data siswa !<br>";
//echo "</pre>";

}
?>

<html>
<head>
<title>Aplikasi Pencatatan Bidang Konseling SMK 10 Surabaya</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/Sticky-footer-styles.css" rel="stylesheet">

</head>

<body>
<hr>

<div class="container">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<?php
		echo "<b>import data selesai.</b> <br>";
		echo "Data yang berhasil di-import : " . $sukses .  "<br>";
		echo "Data yang gagal di-import : ".$gagal .  "<br>";
		echo "<a href='import.php'>Import Ulang</a>";
		?>
		<div style="border-bottom:solid #4ECDC4 5px;">&nbsp;</div>
		<center><br><h5><a href="//localhost/deny/utama.php">Menu Utama</a></h5></center>
	</div>
	<div class="col-lg-4"></div>
</div>

    <!-- Begin footer content -->
    <div id="footer">
      <div class="container">
        <p class="text-muted">Aplikasi Pencatatan Bidang Konseling SMK 10 Surabaya</p>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>

</body>
</html>
