<?php
$host = "gateway01.ap-southeast-1.prod.alicloud.tidbcloud.com";
$user = "353afBPaY5EUwKS.root";
$pass = "yFQptQtu9zNjApya";
$port = "4000";
$db = "bromo_travels";

$conn = mysqli_connect($host, $user,$port, $pass, $db);

if(!$conn){
    die("Koneksi gagal");
}

?>