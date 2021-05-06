<?php
    session_start();
    require_once('../model/model_Comentario.php');
    require_once('../dao/DAO_Comentario.php');
if ($_POST){
    $user = $_SESSION['login'];
    $corpo = $_POST['corpo'];
    $local = $_SESSION['local'];
    $c = new Comentario();
    $c->setUsuario($user);
    $c->setCorpo($corpo);
    $c->setLocal($local);
    try{
        salvarC($c);
        ?> 
        <script>
            alert("Comentário adicionado!");
        </script>
<?php
        $partes = explode("_", $local);
        $cod = $partes[1];
        if($partes[0]=='pro'){
            header("Location: apresentacaoPro.php?c=".$cod);
        }else if ($partes[0]=='art'){
            header("Location: apresentacaoArt.php?c=".$cod);
        }
        
         //volta para alguma pagina 
    }catch(Exception $e){
        ?>
        <script>
             alert("Ocorreu um erro inesperado. Tente novamente mais tarde.");
         </script> <?php
    }
}


?>