<?php
    require("../dao/DAO_Comentario.php");
    if ($_GET){
        $cod = $_GET['id'];
        $local = $_GET['local'];
        
        excluirC($cod);
        
        $partes = explode("_", $local);
        $c = $partes[1];
        if($partes[0]=='pro'){
            header("Location: apresentacaoPro.php?c=".$c);
        }else if ($partes[0]=='art'){
            header("Location: apresentacaoArt.php?c=".$c);
        }
    }else{
        header('Location: index.php');
    }
?>

