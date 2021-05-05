<?php
    function salvarM($m){
        require('conexao.php');
        $mat = $m->getMat();
        $uso = 0;
        $sql = "INSERT INTO `matricula`(`mat`, `uso`) VALUES ('$mat', '$uso')";
        mysqli_query($id,$sql);
        mysqli_close($id);
    }
    function desusarM($mat){
        require('conexao.php');
        $sql = "UPDATE `matricula` SET `uso`= 0 WHERE mat = '$mat'";
        mysqli_query($id,$sql);
    
        mysqli_close($id);
        
    }
    function editarM($nova, $velha){
        require('conexao.php');
        $sql = "UPDATE `matricula` SET `mat`= '$nova' WHERE mat = '$velha'";
        mysqli_query($id,$sql);
        
        mysqli_close($id);
    }

    function usarM($mat){
        require('conexao.php');
        $sql = "UPDATE `matricula` SET `uso`= 1 WHERE mat = '$mat'";
        mysqli_query($id,$sql);
        
        mysqli_close($id);
    }
    function selecionarTodasM(){
        require('conexao.php');
        $sql = "SELECT * FROM `matricula` ";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
    }
    function selecionarUsadasM(){
        require('conexao.php');
        $sql = "SELECT * FROM `matricula` WHERE uso = 1";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
    }
    function selecionarNaoUsadasM(){
        require('conexao.php');
        $sql = "SELECT * FROM `matricula` WHERE uso = 0";
        $resultado = mysqli_query($id,$sql);
        
        mysqli_close($id);
        return $resultado;
    }
function excluirM($mat){
        require('conexao.php');
        $sql = "DELETE FROM `matricula` WHERE mat = '$mat'";
        mysqli_query($id,$sql);
        
        mysqli_close($id);
    }
function selecionarParaCadM($matricula){
        require('conexao.php');
        $sql = "SELECT `mat` FROM matricula WHERE mat = '$matricula' and uso = 0";
        $resultado = mysqli_query($id,$sql);
        $r = mysqli_num_rows($resultado);
        mysqli_close($id);
        return $r;
    }




?>