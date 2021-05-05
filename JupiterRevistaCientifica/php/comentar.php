<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>

<body>
    <?php 
     
        if(isset($_SESSION['login'])){
            ?>
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
<form method="post" action="cadastrarComentarios.php">
    <div class="input-group ">
                    <!--Campo de comentario  -->
                   
                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="5" name="corpo"></textarea>
                </div>
        <div id="actions" class="row mt-1">
            <div class="col-md-12">
              <input class="btn btn btn-secondary" type="submit" value="Comentar">
              <input class="btn btn-secondary" type="reset" value="Cancelar">
            </div>
          </div>
</form>  
    </div>
    <?php }else{
            ?>
    <h4 align='center'> Faça <a href="pagLogin.php"> login </a> para comentar.</h4>
    <?php
        } ?>
    </body>
</html>