<?php
if($_POST){
		require("../model/model_Usuario.php");
		require("../dao/DAO_Usuario.php");
        require("../dao/DAO_Pesquisador.php");

		$nome = $_POST['nome'];
		$sexo = $_POST['opcoes'];
		$nasc = $_POST['nascimento'];
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		$email = $_POST['email'];

		$u = new Usuario();

		$u->setNome($nome);
		$u->setDataNasc($nasc);
		$u->setSexo($sexo);
		$u->setLogin($usuario);
		$u->setSenha($senha);
		$u->setEmail($email);
    $rU = selecionarPorLoginU($usuario);
    $rP = selecionarPorLoginP($usuario);
    if (empty(mysqli_num_rows($rU)) and empty(mysqli_num_rows($rP)) ){
try{
		salvarU($u);
            echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Cadastro realizado com sucesso! Faça login para continuar!')
window.location.href='pagLogin.php';
</SCRIPT>");
                
}catch(Exception $e){
        header("Location: caduser.php");
}
        
    }else{ 
        echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Nome de usuário em uso, por favor, escolha outro.')
window.location.href='caduser.php';
</SCRIPT>");
        
    }
	}
?>