<?php
    function salvarPro($p){
        $pesquisador = $p->getPesquisador();//pesquisador é o login-chave estrangeira 
        $orientador = $p->getOrientador();
        $areaAtuacao = $p->getAreaAtuacao();
        $ano = $p->getAno();
        $resumo = $p->getResumo();
        $arquivo = $p->getArquivo();
        $titulo = $p->getTitulo();
        $descricao = $p->getDescricao();
        
        require('conexao.php');
        $sql = "INSERT INTO `projeto`(`pesquisador`, `orientador`, `areaAtuacao`, `ano`, `titulo`, `descricao`, `resumo`, `arquivo`, `dataHoraPub`) VALUES ('$pesquisador','$orientador','$areaAtuacao','$ano','$titulo', '$descricao', '$resumo','$arquivo',CURRENT_TIMESTAMP)";
        mysqli_query($id, $sql);
        mysqli_close($id);
    }
    function excluirPro($cod){
        require('conexao.php');
        $sql = "DELETE FROM `projeto` WHERE cod = '$cod'";
        mysqli_query($id, $sql);
        mysqli_close($id); 
           
    }
    
    function editarOrientadorPro($cod, $orientador){
        require('conexao.php');
        $sql = "UPDATE `projeto` SET `orientador`='$orientador' WHERE cod ='$cod'";
        mysqli_query($id, $sql);
        mysqli_close($id);
        
    }
    function editarAreaAtuacaoPro($cod, $area){
        require('conexao.php');
        $sql = "UPDATE `projeto` SET `areaAtuacao`='$area' WHERE cod ='$cod'";
        mysqli_query($id, $sql);
        mysqli_close($id);
        
    }
    function editarAnoPro($cod, $ano){
        require('conexao.php');
        $sql = "UPDATE `projeto` SET `ano` = '$ano' WHERE cod ='$cod'";
        mysqli_query($id, $sql);
        mysqli_close($id);
        
    }
    function editarTituloPro($cod, $titulo){
        require('conexao.php');
        $sql = "UPDATE `projeto` SET `resumo`='$titulo' WHERE cod ='$cod'";
        mysqli_query($id, $sql);
        mysqli_close($id);
        
    }
    function editarDescricaoPro($cod, $descricao){
        require('conexao.php');
        $sql = "UPDATE `projeto` SET `descricao`='$descricao' WHERE cod ='$cod'";
        mysqli_query($id, $sql);
        mysqli_close($id);
        
    }
    function editarResumoPro($cod, $resumo){
        require('conexao.php');
        $sql = "UPDATE `projeto` SET `resumo`='$resumo' WHERE cod ='$cod'";
        mysqli_query($id, $sql);
        mysqli_close($id);
        
    }
    function editarArquivoPro($cod, $arquivo){
        require('conexao.php');
        $sql = "UPDATE `projeto` SET `arquivo`='$arquivo' WHERE cod ='$cod'";
        mysqli_query($id, $sql);
        mysqli_close($id);
        
    }
    function pesquisarPorAreaPro($area){
        require('conexao.php');
        
        $sql = "SELECT * FROM `projeto` WHERE areaAtuacao = '$area'";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    }
    function pesquisarPorDescricaoPro($algo){
        require('conexao.php');
        $q = "%".$algo."%";
        $sql = "SELECT * FROM `projeto` WHERE descricao LIKE '$q'";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
        
    }
    function editarPro($orientador,$area,$ano,$titulo,$descricao,$resumo,$cod){
        require('conexao.php');
        $sql = "UPDATE `projeto` SET `orientador`='$orientador',`areaAtuacao`='$area',`ano`='$ano',`titulo`='$titulo',`descricao`='$descricao',`resumo`='$resumo' WHERE cod = '$cod'";
        mysqli_query($id, $sql);
        mysqli_close($id);
        
    }
    function pesquisarPorTituloPro($algo){
        require('conexao.php');
        $q = "%".$algo."%";
        $sql = "SELECT * FROM `projeto` WHERE titulo LIKE '$q'";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
        
    }
    function pesquisarPorResumoPro($algo){
        require('conexao.php');
        $q = "%".$algo."%";
        $sql = "SELECT * FROM `projeto` WHERE resumo LIKE '$q' ";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
        
    }
    function pesquisarPorPesquisadorPro($nome){
        require('conexao.php');
        $q = "%".$nome."%";
        $sql = "SELECT projeto.pesquisador, projeto.orientador, projeto.areaAtuacao, projeto.ano, projeto.titulo, projeto.descricao, projeto.resumo, projeto.arquivo, projeto.dataHoraPub, projeto.cod FROM projeto INNER JOIN pesquisador WHERE pesquisador.nome LIKE '$q' and projeto.pesquisador = pesquisador.nome";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    }
    function pesquisarPorOrientadorPro($orientador){
         require('conexao.php');
        $q = "%".$orientador."%";
        $sql = "SELECT * FROM `projeto` WHERE orientador LIKE '$q' ";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    }
    function pesquisarPorAnoPro($ano){
        require('conexao.php');
       
        $sql = "SELECT * FROM `projeto` WHERE ano = '$ano' ";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
    }
function pesquisarPorCodPro($cod){
         require('conexao.php');
        $sql = "SELECT * FROM `projeto` WHERE cod = '$cod'";
        $resultado = mysqli_query($id,$sql);
        mysqli_close($id);
        return $resultado;
        
    }
function selecionarDecP(){
     require('conexao.php');
     $sql = "SELECT * FROM `projeto` ORDER BY cod DESC";
     $resultado = mysqli_query($id,$sql);
     mysqli_close($id);
     return $resultado;
}


?>