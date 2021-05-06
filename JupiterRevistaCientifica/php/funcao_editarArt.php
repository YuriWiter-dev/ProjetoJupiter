<?php
    require('../model/model_Artigo.php');
    require('../dao/DAO_Artigo.php');

    if($_POST){
        $autor = $_POST['autor'];
        $areaAtuacao = $_POST['areaAtuacao'];
        $assunto = nl2br($_POST['assunto']);
        $titulo = $_POST['titulo'];
        $cod = $_POST['cod'];
        
        $a = new Artigo();
        
        $a->setAssunto($assunto);
        $a->setAreaAtuacao($areaAtuacao);
        $a->setAutor($autor);
        $a->setTitulo($titulo);
        $a->setCod($cod);
        
        editarTudoA($a);
        
        header("Location: apresentacaoArt.php?c=".$cod);
       
        
        
    }else{
        header('Location: index.php');
    }
?>