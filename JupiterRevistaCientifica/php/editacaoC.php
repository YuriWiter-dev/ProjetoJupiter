<!doctype html>
<?php 

    if($_GET){
        $cod = $_GET['c'];
        require_once("../dao/DAO_Comentario.php");
        $r = selecionaCodC($cod);
        while($row = mysqli_fetch_array($r)){
            $corpo = $row['corpo'];
            $local = $row['local'];
           
        }
        
    }else{
        header('Location: index.php');
    }



?>

<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Editar Comentário</title>
      <?php require_once("menuCabecalho.php");?>
  </head>
  <body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md">
                <div class="input-group sm-5">
                    <div class="input-group-prepend">
                        <!--Campo de Usuario -->
                    
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <label type="text" class="form-control"  aria-
                        aria-describedby="basic-addon1"> <?php echo $_SESSION['login']?> </label>
                </div>
               
                
            </div>
        </div>
<form method="post" action="editarC.php">
    <div class="input-group ">
                    <!--Campo de comentario  -->
                   
                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="5" name="corpo"><?php echo $corpo;?></textarea>
                </div>
        <div id="actions" class="row mt-1">
            <div class="col-md-12">
               <input type="hidden" name="cod" value="<?php echo $cod;?>">
                <input type="hidden" name="local" value="<?php echo $local;?>">
               <input class="btn btn btn-secondary" type="submit" value="Salvar Alterações"> 
                <?php
                    $partes = explode("_", $local);
                    $codL = $partes[1];
                    if($partes[0]=='pro'){ ?>
                <a href="apresentacaoPro.php?c=<?php echo $codL;?>"> <button class="btn btn-secondary"> Cancelar </button> </a>
                <?php
        }else if ($partes[0]=='art'){ ?>
                <a href="apresentacaoArt.php?c=<?php echo $codL;?>"> <button class="btn btn-secondary"> Cancelar </button> </a>
            <?php
        }
                
                
                ?>
                
            </div>
          </div>
</form>  
    </div>
    </body>
</html>