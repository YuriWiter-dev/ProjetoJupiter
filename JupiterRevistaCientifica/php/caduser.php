<html>

<head>
    <title> Cadastro de Usuário</title>
    <link rel="stylesheet" href="../Css/caduser.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <!------ Include the above in your HEAD tag ---------->
<?php require_once("menuCabecalho.php"); ?>

<body>
    <div class="container">
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                    <h3>bem-vindo</h3>
                    <p>Você está a 30 segundos de ser imerso na smart-resvita mais completa das univesidades nacionais!</p>
                    <a href="pagLogin.php"><input type="submit" name="" value="Login" /></a>
                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Usuário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Admin</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Conecte-se</h3>
                            <form action="CadastroUsuario.php" method="post">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nome *" name="nome" />
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Usuário *" name="usuario" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Senha *"
                                           name="senha" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl" data-toggle="tooltip" title="sexo">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-outline-primary form-check-label">
                                                    <input class="form-check-input" type="radio" name="opcoes"
                                                        id="option2"  value="masculino"> Masculino
                                                </label>
                                                <label class="btn btn-outline-danger form-check-label">
                                                    <input class="form-check-input" type="radio" name="opcoes"
                                                        id="option3"    value="feminino"> Feminino
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail *" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="date" minlength="10" maxlength="10" name="nascimento"
                                            class="form-control" data-toggle="tooltip" title="Data de Nascimento"   value="" />
            
                                    </div>
                                   
                                    
                                    <input type="submit" class="btnRegister" value="Cadastrar" />
                                    
                                </div>
                            </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading">Acesso restrito a administradores</h3>
                        <form action="loginAdm.php" method="post">
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Usuário *" name='usuario' />
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Senha *" name="senha" />
                                    </div>
                                    
                                    <input type="submit" class="btnRegister" value="Logar" />
                                </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

    <body>

</html>