<?php
    session_start();
    require('../model/model_Projeto.php');
    require('../dao/DAO_Projeto.php');
    require("funcoesAdicionais.php");
    $pro = new Projeto;
    if ($_POST){
        $cod = $_POST['cod'];
    }
   if(isset($_POST['editar'])){
            $orientador = $_POST['orientador'];
            $area = $_POST['areaAtuacao'];
            $ano = $_POST['ano'];
            $titulo = $_POST['titulo'];
            $descricao = nl2br($_POST['descricao']);
            $resumo = nl2br($_POST['resumo']);  
            
       
            $pro->setOrientador($orientador);
            $pro->setAreaAtuacao($area);
            $pro->setAno($ano);
            $pro->setResumo($resumo);
            $pro->setDescricao($descricao);
            $pro->setTitulo($titulo);
            
       editarPro($orientador,$area,$ano,$titulo,$descricao,$resumo,$cod);

        
if($_FILES['arquivo']['size'] !=0){
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
                   
                   try{
                        editarArquivoPro($cod, $nome);
                         
                    ?> 
                        <script>
                            alert("Edição Concluída!");
                        </script>
                    <?php
                       
                   }catch(Exception $e){
                       ?>
                        <script>
                             alert("Ocorreu um erro inesperado. Tente novamente mais tarde.");
                        </script>
                        <?php
                       
                       
                       
                   }
                   
               }
                
            }else{
                ?>
                <script>
                    alert("Erro! Aceitamos apenas arquivos do tipo PDF. Tente novamente.");
                </script>
<?php
            }
            
        }
       
    header("Location: apresentacaoPro.php?c=".$cod);//vai para alguma pagina
   }


 

?>