<?php
    $db = "jupiterdb";
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    
    $id = mysqli_connect($host,$usuario,$senha);
    if($id){
        //echo 'conectou';
    }else{
        echo("<h1> ERRO AO CONECTAR COM O BANCO DE DADOS. </h1>");
        exit();
    }
mysqli_set_charset($id,"utf8");

    $con = mysqli_select_db($id,$db);
    if($con){
        //echo "selecionou";
    }else{
        echo("<h1> BASE DE DADOS INDISPONÍVEL. </h1>");
        exit();
    }



?>