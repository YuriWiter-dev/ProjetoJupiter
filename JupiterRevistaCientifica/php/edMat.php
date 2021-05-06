<?php
 require_once("../dao/DAO_Matricula.php");
if($_POST){
    $velha = $_POST['velha'];
    $nova = $_POST['nova'];
    editarM($nova,$velha);
    header("Location: matriculas.php");
}else{
    header('Location: index.php');

}
?>