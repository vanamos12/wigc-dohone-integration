<?php
    session_start();
    include('admin/dbcon.php');

    require("admin/libs/config.php");
    $id = "1";
    $phone = "";

    if (isset($_GET['id']) && isset($_GET['phone'])){
        $id = $_GET['id'];
        $phone = $_GET['phone'];
    }
    
    // On récupère le prix numérique du livre
    $res = $pdo->query("SELECT * FROM tbl_livres WHERE Information_ID = ".$id);

    $prixnumerique = "0";
	if ($row = $res->fetch()){
        $prixnumerique = $row["prixnumerique"];
    }
    
    $command = $phone.'-'.rand(0, PHP_INT_MAX);

    // On met en place les sessions et les cookies
    $_SESSION["command"] = $command;
    setcookie("command", $command, time()+(3600*24*30), "/");

    // On met à jour la table commands pour savoir si on a acheté les livres
    $data = [
        'command' => $command, 
        'livre' => $id,
        'achete' => "non",
        'prixnumerique' => $prixnumerique
    ];
    $sql=$pdo->prepare("INSERT into tbl_commands (command, livre, achete, prixnumerique) VALUES(:command, :livre, :achete, :prixnumerique)");

    $sql->execute($data);
        
    // On envoie les données au client
    $array = [
        "prixnumerique"=>$prixnumerique,
        "command"=>$command
    ];

    $json = json_encode($array, JSON_FORCE_OBJECT);
    echo $json;
?>