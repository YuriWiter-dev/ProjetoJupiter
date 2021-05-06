<!doctype html>
<?php
session_start();
if(!isset($_SESSION['adm'])){
    header('Location: index.php');
}
    require_once("../dao/DAO_Matricula.php");
    require_once("../model/model_Matricula.php");
    $r = selecionarTodasM();

?>


<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Matrículas</title>
      
  <?php require_once("menuCabecalho.php");?>
  <body>
    <div class="container">
        <br>
        <h4> Cadastrar Matrícula </h4> <br>
        <form action="cadMatricula.php" method="post" class="form-inline">
            <label> Matrícula: </label>
            &nbsp; &nbsp;
            <input class="form-control" type="text" name="mat" value="TE0">
            &nbsp; &nbsp;
            <input type="submit" class="btn btn-outline-success" value="Salvar">
            
        </form>
        <br>
        <hr>
       
        <table class="table table-borderless">
            <tr> 
                <td colspan="3"> Matrícula</td>
            </tr>
            <?php
                while($row = mysqli_fetch_array($r)){
                  $mat = $row['mat'];  
                  $uso = $row['uso'];
            ?>
                <tr> 
                    <?php
                        if($uso=="1"){
                            echo "<td>  $mat  </td>";
                            echo "<td> Em uso </td>";
                        }else{
                        ?>
                    <form action="edMat.php" method="post">
                    <td> <input style="width: 150px" type="text" class="form-control" name="nova" value="<?php echo $mat;?>"></td>
                    <input type="hidden" value="<?php echo $mat;?>" name="velha">
                    <td> <input type="submit" class="btn btn-outline-primary" value="Editar"> </td>
                    </form>
                    
                    <td> 
                        <?php
                        echo "<a href='deleteMat.php?id=". $mat."' onclick=\"return confirm('Excluir matrícula?');\"> <button type='button' class='btn btn-outline-danger'> Excluir</button> </a>";
                        ?>
                        
                    
                    <?php }//fim else?>
                    
                    
                    
                    </td> 
                </tr>
        <?php } ?>
        
        </table>
        
      
      
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>