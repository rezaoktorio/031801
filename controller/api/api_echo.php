<?php
//require("phpsqlajax_dbinfo.php");
$server = "mysql.hostinger.co.id";
$username = "u573987905_sig";
$password = "FZm4XZ7zcAos";
$database = "u573987905_sig";
$koneksi = mysqli_connect($server,$username,$password) or die("Koneksi gagal");
mysqli_select_db($koneksi, $database) or die("Database tidak bisa dibuka");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

// Opens a connection to a MySQL server
// $connection=mysql_connect ('mysql.hostinger.co.id', $username, $password);
// if (!$connection) {
//   die('Not connected : ' . mysql_error());
// }

// Set the active MySQL database
// $db_selected = mysql_select_db($database, $connection);
// if (!$db_selected) {
//   die ('Can\'t use db : ' . mysql_error());
// }

// Select all the rows in the markers table
$query = "SELECT * FROM markers WHERE 1";
$result = mysqli_query($koneksi, $query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'id="' . $row['id'] . '" ';
  echo 'name="' . parseToXML($row['name']) . '" ';
  echo 'address="' . parseToXML($row['address']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'type="' . $row['type'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';

?>
