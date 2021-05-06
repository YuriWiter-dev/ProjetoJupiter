<?php
 session_start();
    require('../model/model_Comentario.php');
    require('../dao/DAO_Comentario.php');
     require_once('../php/funcoesAdicionais.php');
    $local = $_SESSION['local'];
    $r = selecionaC($local);
    $verifica = mysqli_num_rows($r);             
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" type="text/css" href="../css/comentarios.css"/>
      
    <title></title>
  </head>
  <body>
    <div class="comments-container">
        <p id="demo"></p>
        <h1> Comentários </h1>
        <?php if(!empty($verifica)){ ?>
        <ul id="comments-list" class="comments-list" >
            <?php while ($row = mysqli_fetch_array($r)){ ?>
            <li>
                <div  class="comment-main-level">
                    <div class="comment-box" >
                        <div class="comment-head" >
                        <h6> @ <?php echo $row['usuario']; ?></h6>
                        <span> <?php echo formataDataHora($row['dataHora']); ?> </span>
                        </div>
                        <div class="comment-content">
                            <h6><?php echo $row['corpo']; ?></h6> 
                            <br>
                            <div  style='text-align:right'>
                            <?php if(isset($_SESSION['login'])){
                                    if ($row['usuario'] == $_SESSION['login']){
?>
                                <a href="editacaoC.php?c=<?php echo $row['cod'];?>">Editar</a>
                                <?php
                            
                            echo "<a href='delete.php?id=". $row['cod']."&local=".$row['local']."' onclick=\"return confirm('Excluir Comentário?');\">Excluir</a>";}} //fim do if ?>
                            
                            </div>
                            
                        </div>
                        
                
                    </div>
                
                </div>
            
            </li> <?php } //fechando o while?>
        
        </ul>
        <?php } //fechando if de verifica
        else{?>
        <p align="center">Não há comentários para mostrar, seja o primeiro a comentar.</p>
        <?php }//fechando else?>
         
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>