<?php

    function salvarP($p){
        $nome = $p->getNome();
        $dataNasc = $p->getDataNasc() ;
        $sexo = $p->getSexo();
        $login = $p->getLogin();
        $s = $p->getSenha();
        $email = $p->getEmail();
        $matricula = $p->getMatricula();
       
        
        require('conexao.php');
        $sql = "INSERT INTO `pesquisador`(`nome`, `dataNasc`, `sexo`, `login`,`senha`,`email`, `matricula`) VALUES ('$nome', '$dataNasc', '$sexo', '$login', '$s', '$email', '$matricula')";
        mysqli_query($id, $sql); 
        mysqli_close($id);
        
    }
    function excluirP($login){
        require('conexao.php');
        
        $sql = ("DELETE FROM `pesquisador` WHERE login = '$login'");
        
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }


    function editarNomeP($nome, $login){
        
        require('conexao.php');
        $sql = "UPDATE `pesquisador` SET `nome`= '$nome'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarDataNascP($dataNasc, $login){
        require('conexao.php');
        $sql = "UPDATE `pesquisador` SET `dataNasc`= '$dataNasc'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarSexoP($sexo, $login){
        require('conexao.php');
        $sql = "UPDATE `pesquisador` SET `sexo`= '$sexo'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarSenhaP($s, $login){
        require('conexao.php');
        $sql = "UPDATE `pesquisador` SET `senha`= '$s'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarEmailP($email, $login){
        require('conexao.php');
        $sql = "UPDATE `pesquisador` SET `email`= '$email'  WHERE login = '$login'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }

    function pesquisarTodosP(){// pesquisa todas as informações de um usuário só nao seleciona a senha.
        require('conexao.php');
        $sql = 'SELECT `nome`, `dataNasc`, `sexo`, `login`, `email`, `matricula` FROM `pesquisador` ';
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
        
    } 
    function pesquisarLoginP(){ //para ver se já existe quando outro for cadastrar.
        require('conexao.php');
        $sql = 'SELECT `login` FROM `pesquisador` ';
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    } 

    function selecionarPorLoginP($login){
        require('conexao.php');
        $q = "%".$login."%";
        $sql = "SELECT `nome`, `dataNasc`, `sexo`, `login`,`email`, `matricula` FROM `pesquisador` WHERE login LIKE '$q'";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    } // Seleciona pesquisadores por login.





?>