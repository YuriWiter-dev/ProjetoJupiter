<?php

require_once("../model/model_Matricula.php");
require_once("../dao/DAO_Matricula.php");
$m = new Matricula();
    if($_POST){
        $mat = $_POST['mat'];
        $m->setMat($mat);
        salvarM($m); 
        header("Location: matriculas.php");
                    
    }
?>