<!doctype html>
<html lang="pt-br">
<meta charset="utf-8">

<head>
  <meta charset="utf-8">
  <title> Cadastro de Pesquisador</title>
  <link rel="stylesheet" href="../Css/PesquisadorStyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<?php require_once("menuCabecalho.php");?>

<body>
  <div class="container">
    


    <div class="container">
      <!--form -->
      <span class="d-block p-2 bg-Transparente text-white">&nbsp;</span>
      <div id="main" class="container position-absolute">
<h4> Cadastro de Pesquisador</h4> <br>
        <form action="CadastroPesquisador.php" method="post">
          <div class="row">
            <div class="form-group col-md-5">
              <label for="exampleInputEmail1">Nome</label>
              <input type="text" name="nome" class="form-control" id="exampleInputEmail1" placeholder="Nome completo">
            </div>
            <!--Campo de Orientador -->
            <div class="form-group col-md-4">
              <label for="exampleInputEmail1">Matrícula</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="matricula" value="TE0" placeholder="TE0xxxx">
            </div>
            <!--Campo de Sexo -->
            <div class="form-group col-md-4">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-primary form-check-label">
                      <input class="form-check-input" type="radio" name="opcoes" id="option2" value='masculino'> Masculino
                    </label>
                    <label class="btn btn-outline-danger form-check-label">
                      <input class="form-check-input" type="radio" name="opcoes" id="option3" value='feminino'> Feminino 
                    </label>
                  </div>
            </div>

            <!--Campo de Data -->

            <div class="form-group col-md-4">
              <label for="exampleInputEmail1">Data de nascimento</label>
              <input type="date" class="form-control" id="exampleInputEmail1" name='nascimento'>
            </div>
          </div>

       
            <div class="row">
              <div class="col">
                <div class="input-group sm-4">
                  <div class="input-group-prepend">
                    <!--Campo de Usuario -->
                    <span class="input-group-text" id="basic-addon1">@</span>
                  </div>
                  <input type="text" name="usuario" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="col ">
                <div class="input-group ">
                    <!--Campo de senha -->
                  <input type="password" name="senha" class="form-control " id="exampleInputPassword" placeholder="Senha">
                </div>
              </div>
          
      
              <div class="container">

            <!--Campo de Email -->
            <div class="input-group mb-3 mt-4">
              <input type='email' name="email" class="form-control" placeholder="email@exemplo.com" aria-label="Recipiente para nickname"
                aria-describedby="basic-addon2">
              
            </div>
            <hr />
          </div>


            <div id="actions" class="row">
              <div class="col-md-12">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Cadastrar</button>
                <input type="reset" class="btn btn-outline-danger" value="Cancelar">
                

              </div>
            </div>
          </div>


        </form>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
</body>

</html>