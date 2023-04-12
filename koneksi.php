<?php
$username   = "root";
$passDB     = "";
$host       = "127.0.0.1";
$database   = "praktek_web";

$connect = mysqli_connect($host, $username, $passDB, $database);
if(!$connect) {
    echo "error connecting to database" .$database;

}
?>