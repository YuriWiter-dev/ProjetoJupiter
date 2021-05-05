<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/loginCss.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

      <form action="login.php" class="login-form" method="post">
        <h1>Login</h1>

        <div class="txtb" >
          <input type="text" name="login">
          <span data-placeholder="Nome de Usuário"></span>
        </div>

        <div class="txtb">
          <input type="password" name="senha">
          <span data-placeholder="Senha"></span>
        </div>

        <input type="submit" class="logbtn" value="Login">

        <div class="bottom-text">
          Não tem uma conta? <a href="caduser.php">Cadastre-se</a>
        </div>

      </form>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>


  </body>
</html>
