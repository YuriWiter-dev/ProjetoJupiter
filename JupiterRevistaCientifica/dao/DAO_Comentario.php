<?php
 function salvarC($c){
        $user = $c->getUsuario();
        $corpo = $c->getCorpo();
        $denuncias = 0;
        $local = $c->getLocal();
        require('conexao.php');
        $sql = "INSERT INTO `comentario`(`usuario`, `corpo`, `dataHora`, `denuncias`, `local`) VALUES ('$user', '$corpo', CURRENT_TIMESTAMP, '$denuncias', '$local')";
        mysqli_query($id, $sql); 
        mysqli_close($id);
        
    }

    function excluirC($cod){
        require('conexao.php');
        
        $sql = "DELETE FROM `comentario` WHERE cod = '$cod'";
        
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }

    function editarC($c){
        $cod = $c->getCod();
        $corpo = $c->getCorpo();
        
        require('conexao.php');
        
        $sql = "UPDATE `comentario` SET `corpo`='$corpo',`dataHora`= CURRENT_TIMESTAMP WHERE cod = '$cod'";
        
        mysqli_query($id,$sql);
        mysqli_close($id);
    }

  

    function selecionaC($local){
        require('conexao.php');
        $sql = "SELECT `usuario`, `corpo`, `dataHora`, `denuncias`, `cod`, `local` FROM `comentario`  WHERE LOCAL = '$local' ORDER BY cod DESC";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
        
    } 
function selecionaCodC($cod){
        require('conexao.php');
        $sql = "SELECT `usuario`, `corpo`, `dataHora`, `denuncias`, `cod`, `local` FROM `comentario` WHERE cod = '$cod'";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
        
    } 
    function denunciarC($c){ 
        $cod = $c->getCod();
        require('conexao.php');
        $sql = "UPDATE `comentario` SET denuncias= denuncias+1 WHERE cod = '$cod' ";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    } 
    function excluirDenunciaC($c){ 
        $cod = $c->getCod();
        require('conexao.php');
        $sql = "UPDATE `comentario` SET denuncias= denuncias-1 WHERE cod = '$cod' ";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    } 

    function excluirPorDenunciasC($num){
        require('conexao.php');
        $sql = "DELETE FROM `comentario` WHERE denuncias >= '$num'";
        mysqli_query($id,$sql);
        mysqli_close($id);
        
        
    } // Exclui comentarios com certo numero de denuncias






?>