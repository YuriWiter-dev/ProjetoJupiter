<?php
    require('../model/model_Artigo.php');
    require('../dao/DAO_Artigo.php');

    if($_POST){
        $autor = $_POST['autor'];
        $areaAtuacao = $_POST['areaAtuacao'];
        $assunto = nl2br($_POST['assunto']);
        $titulo = $_POST['titulo'];
        
        $a = new Artigo();
        
        $a->setAssunto($assunto);
        $a->setAreaAtuacao($areaAtuacao);
        $a->setAutor($autor);
        $a->setTitulo($titulo);
         try{
                    salvarA($a);
                         
                    ?> 
                        <script>
                            alert("Dados gravados com sucesso!");
                        </script>
                    <?php
                       header(""); //vai para alguma página. 
                   }catch(Exception $e){
                       ?>
                        <script>
                             alert("Ocorreu um erro inesperado. Tente novamente mais tarde.");
                        </script>
                        <?php
                       
                       
                       
                   }
         
        
    }
?>