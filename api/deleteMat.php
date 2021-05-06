<?php
require_once("../dao/DAO_Matricula.php");
if($_GET){
    $mat = $_GET['id'];
    excluirM($mat);
    header("Location: matriculas.php");
}else{
    header('Location: index.php');
}


?>