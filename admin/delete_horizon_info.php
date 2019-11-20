<?php 



include('dbcon.php');

$id=$_GET['id'];

$query = $pdo->prepare("delete  from tbl_slider where Information_ID='$id'");

$query->execute();

header('location:horizon.php');

?>