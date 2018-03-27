<?php

    $server = "mysql.hostinger.co.id";
    $username = "u573987905_sig";
    $password = "FZm4XZ7zcAos";
    $database = "u573987905_sig";

    $koneksi = mysql_connect($server,$username,$password) or die("Koneksi gagal");
    mysql_select_db($koneksi, $database) or die("Database tidak bisa dibuka");
?>
