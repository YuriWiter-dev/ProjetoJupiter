<?php
    require_once('../dao/DAO_Projeto.php');
if($_GET){
    $cod = $_GET['c'];
    excluirPro($cod);
    header("Location: explorar.php");
}else{
    header('Location: index.php');
}

?>