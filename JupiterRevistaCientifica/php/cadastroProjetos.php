<?php
    session_start();
    require('../model/model_Projeto.php');
    require('../dao/DAO_Projeto.php');
    require("funcoesAdicionais.php");
    $pro = new Projeto;
        
        if($_POST){
            $pesquisador = $_SESSION['login'];
            $orientador = $_POST['orientador'];
            $areaAtuacao = $_POST['areaAtuacao'];
            $ano = $_POST['ano'];
            $titulo = $_POST['titulo'];
            $descricao = nl2br($_POST['descricao']);
            $resumo = nl2br($_POST['resumo']);  
            
            $pro->setPesquisador($pesquisador);
            $pro->setOrientador($orientador);
            $pro->setAreaAtuacao($areaAtuacao);
            $pro->setAno($ano);
            $pro->setResumo($resumo);
            $pro->setDescricao($descricao);
            $pro->setTitulo($titulo);
            

        }
        
        if($_FILES){
            $tipo = $_FILES['arquivo']['type'];
            $tipo = strtolower($tipo);
            
            $pasta = 'arquivos';
            
            $nomeArq = trim($titulo);
            $nomeArq = explode(" ", $nomeArq);
            $a = "";
            foreach($nomeArq as $str){
                $a = $a.$str;
            }
            
            $a =  remover_caracter($a);
            $a = strtolower($a);
            
            if(strpos($tipo, "pdf")){
               $temp=$_FILES['arquivo']['tmp_name'];
                
               $nome = $a."_".$_SESSION['login'].".pdf";
               $perm = "../".$pasta."/".$nome;
               
               if(copy($temp, $perm)){
                   $pro->setArquivo($nome);
                   
                        salvarPro($pro);
                         
                      echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Dados gravados com sucesso!')
window.location.href='listaProjetos.php?areaAtuacao=$areaAtuacao';
</SCRIPT>");
                   
               }
                
            }else{
                ?>
                <script>
                    alert("Erro! Aceitamos apenas arquivos do tipo PDF. Tente novamente.");
                </script>
<?php
            }
            
        
       
        
        
        
    } 
    




?>