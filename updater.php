<?php 
ob_start();
$hub = mysqli_connect('localhost', 'root', 'root', 'xxx');
$id = $_GET['id'];
$change = $_GET['change'];
$pemprov = $_GET['name'];
mysqli_query($hub, "UPDATE xxx SET kepemilikan = '$change' WHERE id = '$id' AND pemprov = '$pemprov' ");
// header('Location:index.php');
ob_flush();
?>