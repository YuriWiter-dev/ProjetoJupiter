<?php

    function salvarU($u){
        $nome = $u->getNome();
        $dataNasc = $u->getDataNasc() ;
        $sexo = $u->getSexo();
        $login = $u->getLogin();
        $s = $u->getSenha();
        $email = $u->getEmail();
        
        
        require('conexao.php');
        $sql = "INSERT INTO `usuario`(`nome`, `dataNasc`, `sexo`, `login`, `senha`, `email`) VALUES ('$nome', '$dataNasc', '$sexo', '$login', '$s', '$email')";
        mysqli_query($id, $sql); 
        mysqli_close($id);
        
    }
    function excluirU($login){
        require('conexao.php');
        
        $sql = ("DELETE FROM `usuario` WHERE login = '$login'");
        
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }


    function editarNomeU($nome, $login){
        
        require('conexao.php');
        $sql = "UPDATE `usuario` SET `nome`= '$nome'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarDataNascU($dataNasc, $login){
        require('conexao.php');
        $sql = "UPDATE `usuario` SET `dataNasc`= '$dataNasc'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarSexoU($sexo, $login){
        require('conexao.php');
        $sql = "UPDATE `usuario` SET `sexo`= '$sexo'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarSenhaU($s, $login){
        require('conexao.php');
        $sql = "UPDATE `usuario` SET `senha`='$s' WHERE login = $login ";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarEmailU($email, $login){
        require('conexao.php');
        $sql = "UPDATE `usuario` SET `email`= '$email'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }

    function pesquisarTodosU(){// pesquisa todas as informações de um usuário só nao seleciona a senha.
        require('conexao.php');
        $sql = 'SELECT `nome`, `dataNasc`, `sexo`, `login`, `email` FROM `usuario` ';
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
        
    } 
    function pesquisarLoginU(){ //para ver se já existe quando outro for cadastrar.
        require('conexao.php');
        $sql = 'SELECT `login` FROM `usuario` ';
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    } 

    function selecionarPorLoginU($login){
        require('conexao.php');
        $q = "%".$login."%";
        $sql = "SELECT `nome`, `dataNasc`, `sexo`, `login`,`email` FROM `usuario` WHERE login LIKE '$q'";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    } // Seleciona usuarios por login.*/





?>