<?php
    function remover_caracter($string) {
        $string = preg_replace("/[áàâãä]/", "a", $string);
        $string = preg_replace("/[ÁÀÂÃÄ]/", "A", $string);
        $string = preg_replace("/[éèê]/", "e", $string);
        $string = preg_replace("/[ÉÈÊ]/", "E", $string);
        $string = preg_replace("/[íì]/", "i", $string);
        $string = preg_replace("/[ÍÌ]/", "I", $string);
        $string = preg_replace("/[óòôõö]/", "o", $string);
        $string = preg_replace("/[ÓÒÔÕÖ]/", "O", $string);
        $string = preg_replace("/[úùü]/", "u", $string);
        $string = preg_replace("/[ÚÙÜ]/", "U", $string);
        $string = preg_replace("/ç/", "c", $string);
        $string = preg_replace("/Ç/", "C", $string);
        $string = preg_replace("/[][><}{)(:;,!?*%~^`@]/", "", $string);
        $string = preg_replace("/ /", "", $string);
    return $string;
}
    function formataNomeArea($area){
        if($area == "agropecuaria"){
            return 'Agropecuária';    
    }else if($area == "eletronica"){
            return 'Eletrônica';
        }else if($area == "eletrotecnica"){
            return 'Eletrotécnica';
        }else if($area == "informatica"){
            return 'Informática';
        }else{
            return ucfirst($area);
        }
    }
    function formataDataHora($dataHora){
        return ($datinha = new DateTime($dataHora))->format('d/m/Y H:i:s');
        
    }
function formataData($data){
        return ($datinha = new DateTime($data))->format('d/m/Y');
        
    }


?>