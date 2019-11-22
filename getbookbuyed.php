<?php 
    session_start();

    include('admin/dbcon.php');

    require("admin/libs/config.php");

    $dataToSend = [
        "bookbuyed"=>false,
        "bookname"=>""
    ];

    $data = [
        "command" => "",
        "achete" => "oui"
    ];

    //$data["command"] = "656752739-861318597";
    $data["command"] = (isset($_SESSION['command']) ? $_SESSION['command']:(isset($_COOKIE['command'])?$_COOKIE['command']:""));
    $request = $pdo->prepare("SELECT * from tbl_commands WHERE command=:command AND achete=:achete");
    $request->execute($data);
    if ($row = $request->fetch()){
        $dataToSend["bookbuyed"] = true;
        $idLivre = $row["livre"];

        $sql = $pdo->prepare("SELECT * FROM tbl_livres WHERE Information_ID=:id");
        $sql->execute(["id"=>$idLivre]);
        if ($rowLivre = $sql->fetch()){
            $dataToSend["bookname"] = urlencode($rowLivre["livreachete"]);
        }
    }
    
    

    $json = json_encode($dataToSend, JSON_FORCE_OBJECT);

    echo $json;
?>