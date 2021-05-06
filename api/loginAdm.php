<?php
if($_POST){
    session_start();
    require_once("../dao/DAO_Login.php");
    $login = $_POST['usuario'];
    $s = $_POST['senha'];
    
    $a = verificaAdministrador($login, $s);
    if(empty($a)){
         echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nome de usuário ou senha incorretos.')
window.location.href='caduser.php';
</SCRIPT>");
                
    }else{
        $_SESSION['login'] = $login;
        $_SESSION['adm'] = 'logado como adm';
        header('Location: index.php');
    }
    
            
        
    }
    



?>