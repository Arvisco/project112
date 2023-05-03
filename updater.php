<?php 
ob_start();
$hub = mysqli_connect('localhost', 'root', 'root', 'xxx');
$id = $_GET['id'];
$change = $_GET['change'];
mysqli_query($hub, "UPDATE xxx SET kepemilikan = '$change' WHERE id = '$id'");
header('Location:index.php');
ob_flush();
