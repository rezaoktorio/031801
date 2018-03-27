<?php

    $server = "mysql.hostinger.co.id";
    $username = "u573987905_sig";
    $password = "FZm4XZ7zcAos";
    $database = "u573987905_sig";

    error_reporting(0);
    mysql_connect($server,$username,$password) or die("Koneksi gagal");
    mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
