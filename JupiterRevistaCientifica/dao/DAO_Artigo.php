<?php
 function salvarA($a){
        $assunto = $a->getAssunto();
        $areaAtuacao = $a->getAreaAtuacao();
        $autor = $a->getAutor();
        $titulo = $a->getTitulo();
        require('conexao.php');
        $sql = "INSERT INTO `artigo`(`assunto`, `areaAtuacao`, `autor`, `dataPub`, `titulo`) VALUES ('$assunto','$areaAtuacao','$autor',CURRENT_DATE, '$titulo')";
        mysqli_query($id, $sql); 
        mysqli_close($id);
        
    }
    function excluirA($cod){
        
        require('conexao.php');
        $sql = "DELETE FROM `artigo` WHERE cod = '$cod'";
        
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }

    function editarTudoA($a){
        $cod = $a->getCod();
        $assunto = $a->getAssunto();
        $areaAtuacao = $a->getAreaAtuacao();
        $autor = $a->getAutor();
        $titulo = $a->getTitulo();
        
        require('conexao.php');
        
        $sql = "UPDATE `artigo` SET `assunto`='$assunto',`areaAtuacao`='$areaAtuacao',`autor`='$autor',`dataPub`=CURRENT_DATE, `titulo`='$titulo' WHERE cod = '$cod'";
        
        mysqli_query($id,$sql);
        mysqli_close($id);
    }
    function editarAssuntoA($cod,$assunto){
        require('conexao.php');
        
        $sql = "UPDATE `artigo` SET `assunto`='$assunto' WHERE cod = '$cod' ";
        
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
     function editarAreaAtuacaoA($cod,$areaAtuacao){
        require('conexao.php');
        
        $sql = "UPDATE `artigo` SET `areaAtuacao`='$areaAtuacao' WHERE cod = '$cod' ";
        
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
    function editarAutorA($cod,$autor){
        require('conexao.php');
        
        $sql = "UPDATE `artigo` SET `autor`='$autor' WHERE cod = '$cod' ";
        
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }
     function editarTituloA($cod,$titulo){
        require('conexao.php');
        
        $sql = "UPDATE `artigo` SET `titulo`='$titulo' WHERE cod = '$cod' ";
        
        mysqli_query($id,$sql);
        mysqli_close($id);
        
    }


    function pesquisarTodosA(){
        require('conexao.php');
        $sql = 'SELECT * FROM `artigo`';
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
        
    } 
    function pesquisarAssuntoA($algo){
        require('conexao.php');
        $q = "%".$algo."%";
        $sql = "SELECT * FROM `artigo` WHERE assunto LIKE '$q'";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
  
    } 
function pesquisarAutorA($autor){
        require('conexao.php');
        $q = "%".$autor."%";
        $sql = "SELECT * FROM `artigo` WHERE autor LIKE '$q'";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
  
    } 
function pesquisarAreaAtuacaoA($area){
        require('conexao.php');
        $sql = "SELECT * FROM `artigo` WHERE areaAtuacao = '$area' ";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
  
    } 
function pesquisarPorCodA($cod){
        require('conexao.php');
        $sql = "SELECT * FROM `artigo` WHERE cod = '$cod' ";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
  
    } 



    

    






?>