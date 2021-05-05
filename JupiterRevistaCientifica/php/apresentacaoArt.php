<!doctype html>
<html lang="pt-br">
    <?php
        
         require("../model/model_Artigo.php");
         require("../dao/DAO_Artigo.php");
         require("../php/funcoesAdicionais.php");
         if($_GET){
             $cod = $_GET['c'];
             $_SESSION['local'] = "art_".$cod;
             $r = pesquisarPorCodA($cod);
             $art = new Artigo();
             while($row = mysqli_fetch_array($r)){
                    $art->setAssunto($row['assunto']);
                    $art->setAutor($row['autor']);
                    $art->setTitulo($row['titulo']);
                    $art->setDataPub($row['dataPub']);                  
             }
                  
         }else{
             header("Location: explorar.php");
         }
    
    ?>

<head>
  <meta charset="utf-8">
  <title> Artigos - Apresentação </title>
  <link rel="stylesheet" href="../Css/ProjeTexib.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <?php require_once("menuCabecalho.php");?>

<body>
  

<!-- Menu Lateral -->
  <div class="simple-admin">
    <div data-component="sidebar">
      <div class="sidebar">
        <ul class="list-group flex-column d-inline-block first-menu">
          <li class="list-group-item py-2">
            <a href="listaArtigos.php?areaAtuacao=agropecuaria" >
              <img src="../imgs/tractor.png" height="40" class="mr-4"><span>Agropecuária</span>
            </a>
            <ul class="list-group flex-column d-inline-block submenu svg-submenu">
            </ul>
          </li> <!-- /.list-group-item -->

          <li class="list-group-item py-2">
            <a href="listaArtigos.php?areaAtuacao=alimentos">
              <img src="../imgs/baker(1).png" height="40" class="mr-4"><span>Alimentos</span>
            </a>


          </li> <!-- /.list-group-item -->

          <li class="list-group-item py-2">
            <a href=" listaArtigos.php?areaAtuacao=eletronica ">
              <img src="../imgs/flash.png" height="40" class="mr-4"><span>Eletrônica</span>
            </a>

          </li> <!-- /.list-group-item -->

          <li class="list-group-item py-2">
            <a href="listaArtigos.php?areaAtuacao=eletrotecnica">
              <img src="../imgs/chip(1).png" height="40" class="mr-4"><span>Eletrotécnica</span>
            </a>


          </li> <!-- /.list-group-item -->

          <li class="list-group-item py-2">
            <a href="listaArtigos.php?areaAtuacao=hospedagem">
              <img src="../imgs/hotel.png" height="40" class="mr-4"><span>Hospodagem</span>
            </a>
          </li> <!-- /.list-group-item -->

          <li class="list-group-item py-2">
            <a href="listaArtigos.php?areaAtuacao=informatica">
              <img src="../imgs/data.png" height="40" class="mr-4"><span>Informática</span>
            </a>
          </li> <!-- /.list-group-item -->

        </ul>
      </div> <!-- /.sidebar -->
    </div>
  </div> <!-- /.simple-admin -->

  <!-- Incio Scrroll -->
  <div Class="container">
    <div class="row">
      <div class="col-12 text-center my-5">
        <h1 class="display-3"> <?php echo $art->getTitulo();?></h1>
        <p> Escrito por: <?php echo $art->getAutor();?></p>
        
        
      </div>
    </div>

    <div class="row">
 
      <div class="col-9 container">
        <div>
            
                <p align='right'> Publicado em: <?php echo formataData($art->getDataPub());?></p>
   
          
            <p class="text-justify"> <?php echo $art->getAssunto();?> </p>
        
            <br>
            <br>
            <br>
            <h4 align="center"> Conte-nos o que você achou do artigo! </h4>
            <?php  require("comentar.php");
                   require("mostrarComentarios.php");
            ?>
        </div>
      </div>
    </div>
   
    

  </div>
    
   




  <!-- Scripts Boots -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>