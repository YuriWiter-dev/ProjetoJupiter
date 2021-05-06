<?php
error_reporting(E_ALL ^ E_NOTICE);

 session_start();
if(!isset($_SESSION['login'])){
    header("location: pagLogin.php"); // pagina de login
}
if(isset($_SESSION['usu'])){
     echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Você precisa ser um pesquisador para cadastrar projetos.')
window.location.href='PesquisadorCad.php';
</SCRIPT>");
}

require_once("../dao/DAO_Pesquisador.php");
$r = selecionarPorLoginP($_SESSION['login']);
while($row = mysqli_fetch_array($r)){
    $nome = $row['nome'];
}

?>

<!doctype html>
    <html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title> Cadastrar Projeto</title>
        <link rel="stylesheet" href="../Css/ProjeTCad.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <?php require_once("menuCabecalho.php");?>
    <body>
        <div class="container">
        

        
        <!--form -->
        <span class="d-block p-2 bg-Transparente text-white">&nbsp;</span>
 <div id="main" class="container position-absolute" >
    <!--<h3 class="page-header">Quero Colocar aqui um campo para dar o nome do prejeto</h3>-->
   <form action="cadastroProjetos.php" method="post" enctype="multipart/form-data" >
  	<div class="row">
  	  <div class="form-group col-md-5">
  	  	<label for="exampleInputEmail1">Autor</label>
          <label  class="form-control" id="exampleInputEmail1"> <?php echo $nome; ?> </label>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Orientador</label>
  	  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Orientador" name="orientador">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Área de Atuação</label>
  	  	<!--Dropdown primary-->
<div class="dropdown">

  <!--Menu-->
    <select class="custom-select" id="inputGroupSelect03" aria-label="Exemplo de select com botão addon" name="areaAtuacao">
    <option selected>Selecionar</option>
    <option value="alimentos">Alimentos</option>
    <option value="informatica">Informática</option>
    <option value="hospedagem">Hospedagem</option>
    <option value="agropecuaria">Agropecuária</option>
    <option value="eletronica">Eletrônica</option>
    <option value="eletrotecnica">Eletrotécnica</option>
  </select>
</div>
<!--/Dropdown primary-->
          
  	  </div>
         <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Ano</label>
  	  	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ano" name="ano">
  	  </div>
  </div>
  <hr />

  

    
  
        
   <div class="col-md-12">
      <label for="exampleInputtext">Título</label> 
      <input type="text" class="form-control" name="titulo" placeholder="Título do Projeto">
       
       <br>
       
    <label for="exampleInputtext">Descrição</label>
  <textarea class="form-control" id="exampleFormControlTextareaDesc" rows="5" name="descricao" placeholder="Digite aqui uma breve descrição do projeto."></textarea>
       
       <br>

  <label for="exampleInputtext">Resumo</label>
  <textarea class="form-control" id="exampleFormControlTextarea4" rows="5" name="resumo" placeholder="Digite aqui o resumo do projeto."></textarea>
 
       <br>
       
       <label for="exampleInputtext">Submeter o projeto em PDF </label> <br>
       <input type="file" name="arquivo" > 
       </div>
       <br>
        <div id="actions" class="row">
    <div class="col-md-12">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Salvar</button>
      <a href="index.html" class="btn btn-outline-danger">Cancelar</a>
        
    
    </div>
  </div>
            

       
            </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>
        
</html>
        