<?php
    include('admin/dbcon.php');

    require("admin/libs/config.php");
    /*
    $link = "";
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $link .= "https";
    else
        $link .= "http";
    
    $link .= "://";

    $link .= $_SERVER['HTTP_POST'];

    $link .= $_SERVER['REQUEST_URI'];

    echo $link;

    $data = [
        'command' => $link, 
        'livre' => '10',
        'achete' => "non",
        'prixnumerique' => "1495"
    ];
    $sql=$pdo->prepare("INSERT into tbl_commands (command, livre, achete, prixnumerique) VALUES(:command, :livre, :achete, :prixnumerique)");

    if ($sql->execute($data)){
        echo "enregistré";
    }else{
        echo "non enregistré";
    }
    */

    
    $rI = $_GET['rI'];
    $rMt = $_GET['rMt'];
    $rDvs = $_GET['rDvs'];
    $rH = $_GET['rH'];
    $codeMarchant = "WA197M601771";
    //$codeMarchant = "FY786K4327";

    $query = $pdo->prepare("select * from tbl_commands where command=:command");

    $query->execute(["command"=>$rI]);

    if($row = $query->fetch()){
        if (strcmp($rMt, $row["prixnumerique"]) == 0 && strcmp($rDvs, "XAF")==0 && strcmp($rH, $codeMarchant)==0){
            $sql = $pdo->prepare("UPDATE tbl_commands SET achete=:achete WHERE command=:command");
            $sql->execute([
                "achete"=>"oui",
                "command"=>$rI
            ]);
            echo "Commande totalement payée";
        }
        else{
            echo "Commande incomplète";
        }
    }else{
        echo "Pas de commande correspondante.";
    }
    

