<?php
 
     
//echo $_SESSION['login'];
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title> JUP1T3R - Revista Científica</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   <!-- ?php require_once("menuCabecalho.php");?>-->

<body>

  <!-- carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../imgs/info.PNG" class="d-block w-100" alt="First slide">
        <div class="carousel-caption d-none d-md-block text">
          <h1> MENINAS, VOCÊS SÃO IMPORTANTES NA INFORMÁTICA! </h1>
            <p> Cadestrem seus projetos!</p>
          
        </div>
      </div>
      <div class="carousel-item">
        <img src="../imgs/cedaf.jpg" class="d-block w-100" alt="Second slide">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h1> UFV - CAMPUS FLORESTAL </h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../imgs/projeto.jpg" class="d-block w-100" alt="Third slide">
        <div class="carousel-caption d-none d-md-block text-dark">
          <h1> MOSTRE SEU PROJETO PARA O MUNDO! </h1>
            <p> <b> Cadastre-o na JUP1T3R </b></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

 


  <h1>Ultimos Projetos</h1> <br> <br>
  <div class="corpo">
    <div class="container">
      <div class=" row justify-content-center space-beetween">
          <?php 
            require("../dao/DAO_Projeto.php");
            $r = selecionarDecP();
            $cont = 0;
            while($row = mysqli_fetch_array($r)){
                if($cont<6){
                $descricao = $row['descricao'];
                $titulo = $row['titulo'];
                $cod = $row['cod'];
                $img = rand(1,5);
          ?>
        <div class="col-md-4" style="margin-bottom:2rem;">
          <div class="card shadow " style="width: 20rem; height:27rem; ">
            <div class="inner">
              <img  src="../imgs/paraProj/<?php echo $img;?>.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $titulo; ?></h5>
              <p class="card-text"><?php echo $descricao; ?></p>
              <a href="apresentacaoPro.php?c=<?php echo $cod;?>" class="btn btn-danger bg-gradient-danger">Visualizar</a>
            </div>
          </div>
      </div> <br>
          <?php }
                $cont = $cont+1; } ?>
    </div>
  </div>
  <footer class="page-footer font-small mdb-color lighten-3 pt-4 bg-warning mt-4">
    <div class="container text-center text-md-left">
      <div class="row">
        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
          <h5 class="font-weight-bold text-uppercase mb-4"></i>Sobre a equipe </h5>
          <p>Esta revista foi desenvolvida por Andreia Simões, Geovane Campos, Isadora Dias, Samara Eduarda e Yuri Witter para o Trabalho de Conclusão de Curso do Técnico em Informática da Universidade Federal de Viçosa - Campus Florestal.
              Aproveitem!
          </p>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
          <h5 class="font-weight-bold text-uppercase mb-4">Tópicos</h5>
          <ul class="list-unstyled">
            <li>
              <p>
                <a href="BicJr.php">Bic Jr</a>
              </p>
            </li>
            <li>
              <p>
                <a href="explorar.php">Projetos</a>
              </p>
            </li>
            <li>
              <p>
                <a href="#!">Galeria de Fotos</a>
              </p>
            </li>
            <li>
              <p>
                <a href="explorar.php">Artigos</a>
              </p>
            </li>
          </ul>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
          <h5 class="font-weight-bold text-uppercase mb-4">Sobre Nós</h5>
          <ul class="list-unstyled">
            <li>
              <p>
                <i class="fas fa-home mr-3"></i>UFV - Campus Florestal</p>
            </li>
            <li>
              <p>
                <i class="fas fa-envelope mr-3"></i> revistajupiter@gmail.com</p>
            </li>
            <li>
              <p>
                <i class="fas fa-phone mr-3"></i> Disponível em breve</p>
            </li>
            <li>
              <p>
                <i class="fas fa-print mr-3"></i>Disponível em breve</p>
            </li>
          </ul>
        </div>
        <hr class="clearfix w-100 d-md-none">
        <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
          <h5 class="font-weight-bold text-uppercase mb-4">Redes Sociais</h5>
          <a type="button" class="btn-floating btn-fb">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a type="button" class="btn-floating btn-tw">
            <i class="fab fa-twitter"></i>
          </a>
          <a type="button" class="btn-floating btn-gplus">
            <i class="fab fa-google-plus-g"></i>
          </a>
          <a type="button" class="btn-floating btn-instagram">
            <i class="fab fa-instagram fa-fw pink-text"></i>
          </a>

        </div>
      

      </div>
      

    </div>
    

  
    <div class="footer-copyright text-center py-3">Jup1t3r &copy; | 2019
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>