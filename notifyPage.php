<?php
    include('admin/dbcon.php');

    require("admin/libs/config.php");

    $rI = $_GET['rI'];
    $rMt = $_GET['rMt'];
    $rDvs = $_GET['rDvs'];
    $rH = $_GET['rH'];

    $query = $pdo->prepare("select * from tbl_commands where command=:command");

    $query->execute(["command"=>$rI]);

    if($row = $query->fetch()){
        if (strcmp($rMt, $row["prixnumerique"]) == 0 && strcmp($rDvs, "XAF")==0 && strcmp($rH, "WA197M601771")==0){
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


