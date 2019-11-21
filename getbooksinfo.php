<?php
    include('admin/dbcon.php');

    require("admin/libs/config.php");

    $id = $_GET['id'];

    $res = $pdo->query("SELECT * FROM tbl_livres WHERE Information_ID = ".$id);

	$row = $res->fetch();
    $prixnumerique = $row["prixnumerique"];
    $array = ["prixnumerique"=>$prixnumerique];

    $json = json_encode($array, JSON_FORCE_OBJECT);
    echo $json;
?>