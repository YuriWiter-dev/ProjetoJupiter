<?php error_reporting(E_ALL ^ E_NOTICE);?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head> 

<nav class="navbar navbar-expand-lg navbar-light   bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">Jup<i class="fas fa-microscope mr-1"></i>t3r</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="BicJr.php">Bic Jr</a>
          </li>
            <?php
                 session_start();
            
               if(isset($_SESSION['adm'])){  
            ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Administrador
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="artigosCad.php">Cadastrar Artigo</a>
              <a class="dropdown-item" href="matriculas.php">Cadastrar Matrículas</a>
                
            
            <?php }else{ ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Cadastrar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="ProjetosCad.php">Cadastrar Projeto</a>
              <a class="dropdown-item" href="PesquisadorCad.php">Cadastrar Pesquisador</a>
                <?php } ?>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="explorar.php">Explorar</a>
          </li>
        </ul>
        <!-- implementação futura: pesquisar 
          <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Pesquisa" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              <i class="fas fa-search"></i></button>
        </form> -->

        <?php 
            if(!isset($_SESSION['login'])){  
          //link para fazer login:
        ?>
           <a href="caduser.php"> <button class="btn btn-outline-warning my-2 my-sm-0 ml-2" type="submit" > 
                <i class="fas fa-user fa-lg " ></i>
              </button>
          </a>
          <?php }else{
        ?>
               
            <a href="sair.php"> <button class="btn btn-outline-secondary my-2 my-sm-0 ml-2" type="submit" >
              <i class="fas fa-door-open"></i>
              </button>
          </a>
          
          <h7 class='nav-link'> <?php echo $_SESSION['login'];?></h7>
        
        <?php } ?>

        
      </div>
    </div>

  </nav>
