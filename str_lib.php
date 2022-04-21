<?php

include 'index.php';



function strg_len($str){
$count = 1;

    for ($i = 0; $i < $str.length; $i++) {
        if ($str[i] == "") {
            $count++;
        }
    }
}
echo (strg_len("salut"));

?>