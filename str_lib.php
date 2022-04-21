<?php

include 'index.php';
/*Fonction str_len = Calculer la taille d'une string*/


function fn_strlen($str){

    if ($str != null) {
        $i = 0;
        
        while ($str[$i]!= "") {
            $i++;
        }
        return $i;
    }
}
echo fn_strlen('chaîne de caractère')
?>