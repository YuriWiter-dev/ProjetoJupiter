<?php
 session_start();
if(!isset($_SESSION['adm'])){
    header('Location: index.php');
}

?>
<!doctype html>
    <html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title> Cadastro de Artigo </title>
        <link rel="stylesheet" href="../Css/ProjeTCad.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <?php require_once("menuCabecalho.php");?>
    <body>
        <div class="container">
         

        
        <!--form -->
        <span class="d-block p-2 bg-Transparente text-white">&nbsp;</span>
 <div id="main" class="container position-absolute" >
    <!--<h3 class="page-header">Quero Colocar aqui um campo para dar o nome do prejeto</h3>-->
   <form action="cadastrarArtigos.php" method="post"  >
  	<div class="row container">
  	  <div class="form-group col-md-5">
  	  	<label for="exampleInputEmail1">Autor</label>
         <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome do Autor" name="autor"> 
  	  </div>
	  <div class="form-group col-md-5 ">
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
         
  </div>
  <hr />

  

    
  
        
   <div class="col-md-12">
      <label for="exampleInputtext">Título</label> 
      <input type="text" class="form-control" name="titulo" placeholder="Título do Artigo">
       
       <br>
       
    
       

  <label for="exampleInputtext">Artigo</label>
  <textarea class="form-control" id="exampleFormControlTextarea4" rows="5" name="assunto" placeholder="Digite aqui o artigo."></textarea>
 
       
       
       
       
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