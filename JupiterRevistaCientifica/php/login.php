<?php
if($_POST){
    session_start();
    
    require_once("../dao/DAO_Login.php");
    $login = $_POST['login'];
    $s = $_POST['senha'];
    
    $u = verificaUsuario($login, $s);
    if(!empty($u)){
        $_SESSION['login'] = $login;
        $_SESSION['usu'] = 'usuarioSimples';
        
       header("Location: index.php");
    }else{
        $p = verificaPesquisador($login,$s);
        if($p =='pesquisador'){
            $_SESSION['login'] = $login;
            $_SESSION['pes'] = 'pesquisador';
            
            header("Location: index.php");
        }else{
            header('Location: pagLogin.php');
        }
            
        //echo $_SESSION['login'];
    }
    
}



?>