<!doctype html>
<html lang="pt-br">
    <?php
        if(!isset($_SESSION)){
            session_start();
        }
    
         require_once("../model/model_Projeto.php");
         require_once("../dao/DAO_Projeto.php");
         require_once("../dao/DAO_Pesquisador.php");
         require_once("../php/funcoesAdicionais.php");
         if($_GET){
             $cod = $_GET['c'];
             $_SESSION['local'] = "pro_".$cod;
             $r = pesquisarPorCodPro($cod);
             $pro = new Projeto();
             while($row = mysqli_fetch_array($r)){
                    $pro->setPesquisador($row['pesquisador']);
                    $pro->setOrientador($row['orientador']);
                    $pro->setAreaAtuacao($row['areaAtuacao']);
                    $pro->setAno($row['ano']);
                    $pro->setResumo($row['resumo']);
                    $pro->setArquivo($row['arquivo']);
                    $pro->setDescricao($row['descricao']);
                    $pro->setTitulo($row['titulo']);
                    $pro->setDataHoraPub($row['dataHoraPub']);
                    
                 
                    
             }
             $s = selecionarPorLoginP($pro->getPesquisador());
             while($linha = mysqli_fetch_array($s)){
                  $nomePesquisador = $linha['nome'];
                            }
                            
         }else{
             header("Location: explorar.php");
         }
    
    ?>

<head>
  <meta charset="utf-8">
  <title> Projetos - Apresentação </title>
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
            <a href="listaProjetos.php?areaAtuacao=agropecuaria" >
              <img src="../imgs/tractor.png" height="40" class="mr-4"><span>Agropecuária</span>
            </a>
            <ul class="list-group flex-column d-inline-block submenu svg-submenu">
            </ul>
          </li> <!-- /.list-group-item -->

          <li class="list-group-item py-2">
            <a href="listaProjetos.php?areaAtuacao=alimentos">
              <img src="../imgs/baker(1).png" height="40" class="mr-4"><span>Alimentos</span>
            </a>


          </li> <!-- /.list-group-item -->

          <li class="list-group-item py-2">
            <a href=" listaProjetos.php?areaAtuacao=eletronica ">
              <img src="../imgs/flash.png" height="40" class="mr-4"><span>Eletrônica</span>
            </a>

          </li> <!-- /.list-group-item -->

          <li class="list-group-item py-2">
            <a href="listaProjetos.php?areaAtuacao=eletrotecnica">
              <img src="../imgs/chip(1).png" height="40" class="mr-4"><span>Eletrotécnica</span>
            </a>


          </li> <!-- /.list-group-item -->

          <li class="list-group-item py-2">
            <a href="listaProjetos.php?areaAtuacao=hospedagem">
              <img src="../imgs/hotel.png" height="40" class="mr-4"><span>Hospodagem</span>
            </a>
          </li> <!-- /.list-group-item -->

          <li class="list-group-item py-2">
            <a href="listaProjetos.php?areaAtuacao=informatica">
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
        <h1 class="display-3"> <?php echo $pro->getTitulo();?></h1>
        <!-- <p> <?php echo $pro->getDescricao(); ?> </p> -->
        <p> Pesquisador: <?php echo $nomePesquisador;?></p>
        <p> Orientador: <?php echo $pro->getOrientador();?></p>
        <p> Ano: <?php echo $pro->getAno();?></p>
        
      </div>
    </div>

    <div class="row">
 
      <div class="col-9 container">
        <div>
            
                <p align='right'> Publicado em: <?php echo formataDataHora($pro->getDataHoraPub());?></p>
   
          <h4>DESCRIÇÃO </h4>
            <p> <?php echo $pro->getDescricao();?> </p>
            <br>
          <h4 id="item1">RESUMO</h4>
            
            
          <p> <?php echo $pro->getResumo();?> </p>
            <hr>
            <?php 
                $pasta = 'arquivos';
                $arquivo = $pro->getArquivo();
          ?>
            Clique <a target="_blank" href="<?php echo "../".$pasta."/".$arquivo;?>"> aqui </a> para visualizar o projeto completo em PDF.
            <br>
            <br>
            <br>
            
            
            
            <?php
            if(isset($_SESSION['login'])){
                $p = $pro->getPesquisador();
                if($p == $_SESSION['login']){
                    ?>
            <p align='right'><a href="editarPro.php?c=<?php echo $cod;?>"> <button class="btn btn-info"> Editar Projeto </button> </a> </p>
            <h4 align="center"> Conte-nos algo sobre seu projeto! </h4>
                    <?php
                }
            }else{
                 echo "<h4 align='center'> Conte-nos o que você achou do projeto! </h4>";
            }
                    require_once("comentar.php");
                   require_once("mostrarComentarios.php");
            
            
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