<?php

    function salvarAdm($a){
        $nome = $a->getNome();
        $dataNasc = $a->getDataNasc() ;
        $sexo = $a->getSexo();
        $login = $a->getLogin();
        $s = $a->getSenha();
        $email = $a->getEmail();
        
        
        require('conexao.php');
        $sql = "INSERT INTO `administrador`(`nome`, `dataNasc`, `sexo`, `login`, `senha`, `email`) VALUES ('$nome', '$dataNasc', '$sexo', '$login', '$s', '$email')";
        mysqli_query($id, $sql); 
        mysqli_close($id);
        
    }
    function excluirAdm($login){
        require('conexao.php');
        
        $sql = ("DELETE FROM `administrador` WHERE login = '$login'");
        
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }

    function editarNomeAdm($nome, $login){
        
        require('conexao.php');
        $sql = "UPDATE `administrador` SET `nome`= '$nome'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarDataNascAdm($dataNasc, $login){
        require('conexao.php');
        $sql = "UPDATE `administrador` SET `dataNasc`= '$dataNasc'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarSexoAdm($sexo, $login){
        require('conexao.php');
        $sql = "UPDATE `administrador` SET `sexo`= '$sexo'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarSenhaAdm($s, $login){
        require('conexao.php');
        $sql = "UPDATE `administrador` SET `senha`= '$s'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarEmailAdm($email, $login){
        require('conexao.php');
        $sql = "UPDATE `administrador` SET `email`= '$email'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }

    function pesquisarTodosAdm(){// pesquisa todas as informações de um usuário só nao seleciona a senha.
        require('conexao.php');
        $sql = 'SELECT `nome`, `dataNasc`, `sexo`, `login`, `email` FROM `administrador` ';
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
        
    } 
    function pesquisarLoginAdm(){ //para ver se já existe quando outro for cadastrar.
        require('conexao.php');
        $sql = 'SELECT `login` FROM `administrador` ';
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    } 

    function selecionarPorLoginAdm($login){
        require('conexao.php');
        $q = "%".$login."%";
        $sql = "SELECT `nome`, `dataNasc`, `sexo`, `login`,`email` FROM `administrador` WHERE login LIKE '$q'";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    } // Seleciona usuarios por login.





?>