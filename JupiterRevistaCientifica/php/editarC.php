<?php
     require_once("../dao/DAO_Comentario.php");
     require_once("../model/model_Comentario.php");
     $c = new Comentario();
        if ($_POST){
        $cod = $_POST['cod'];
        $corpo = $_POST['corpo'];
        $local= $_POST['local'];
        $c->setCorpo($corpo);
        $c->setCod($cod);
        editarC($c);
        $partes = explode("_", $local);
        $codL = $partes[1];
        if($partes[0]=='pro'){
            header("Location: apresentacaoPro.php?c=".$codL);
        }else if ($partes[0]=='art'){
            header("Location: apresentacaoArt.php?c=".$codL);
        }
        
    }
    
    


?>