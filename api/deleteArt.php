<?php
    if($_GET){
        $cod = $_GET['c'];
        require_once("../dao/DAO_Artigo.php");
        excluirA($cod);
        header('Location: explorar.php');
        
    }else{
        header('Location: index.php');
    }


?>