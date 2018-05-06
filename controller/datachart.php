<?php
header('Content-Type: application/json');
$id = $_GET['id'];
$query = mysql_query("SELECT SUM(kk) AS total FROM `dokumen` where id_kelurahan = '".$id."'");
$no = 1;
  while ($data = mysql_fetch_array($query))
  {
    print json_encode($data);
  }










 ?>
