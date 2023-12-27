<?php
$config = mysqli_connect("localhost","root","","datawebsite_2314");
if(!$config){
    die('Gagal terhubung ke MySQLi :'.mysqli_connect_error());
}
?>