<?php
    function verificaUsuario($login, $s){
        require("conexao.php");
        $sql= "SELECT * FROM `usuario` WHERE login = '$login' AND senha = '$s'";
        $r = mysqli_query($id,$sql);
        mysqli_close($id);
        if(empty($row = mysqli_fetch_array($r))){
            return 0;
        }else{
            return "usuario";
        }   
    }
    
       function verificaPesquisador($login, $s){
        require("conexao.php");
        $sql= "SELECT * FROM `pesquisador` WHERE login = '$login' AND senha = '$s'";
        $r = mysqli_query($id, $sql);
        mysqli_close($id);
        if(empty($row = mysqli_fetch_array($r))){
            return 0;
        }else{
            return "pesquisador";
        }
    }

       function verificaAdministrador($login, $s){
        require("conexao.php");
        $sql= "SELECT * FROM `administrador` WHERE login = '$login' AND senha = '$s'";
        $r = mysqli_query($id, $sql);
        mysqli_close($id);
        if(empty($row = mysqli_fetch_array($r))){
            return 0;
        }else{
            return "administrador";
        }
        
        
    }
    
?>