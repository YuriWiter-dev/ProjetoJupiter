<?php
	if($_POST){
		require("../model/model_Pesquisador.php");
		require("../dao/DAO_Pesquisador.php");
        require("../dao/DAO_Matricula.php");
        require("../dao/DAO_Usuario.php");

		$nome = $_POST['nome'];
		$matricula = $_POST['matricula'];
		$sexo = $_POST['opcoes'];
		$nasc = $_POST['nascimento'];
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];
        
        $testeM = selecionarParaCadM($matricula);
        if(!empty($testeM)){
             $rU = selecionarPorLoginU($usuario);
             $rP = selecionarPorLoginP($usuario);
    if (empty(mysqli_num_rows($rU)) and empty(mysqli_num_rows($rP)) ){
        
            $p = new Pesquisador();

            $p->setNome($nome);
            $p->setDataNasc($nasc);
            $p->setSexo($sexo);
            $p->setLogin($usuario);
            $p->setSenha($senha);
            $p->setEmail($email);
            $p->setMatricula($matricula);

            salvarP($p);
            usarM($matricula);
		
            echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Cadastro realizado com sucesso! Faça login para continuar!')
window.location.href='pagLogin.php';
</SCRIPT>");
                

        
    }else{ 
        echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nome de usuário em uso, por favor, escolha outro.')
window.location.href='caduser.php';
</SCRIPT>");
        
    }
            
            
        }else{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Matrícula inválida!')
window.location.href='PesquisadorCad.php';
</SCRIPT>");
        }
	}
?>