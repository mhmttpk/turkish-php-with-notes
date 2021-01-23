<?php

    /* 

    */

    $a = 5;

    if($a == 5){
        echo "a değişkeni 5'tir.";
    } 

    if($a == 4){
        echo "a değişkeni 4'tür.";
    } 
    elseif($a == 6){
        echo "a değişkeninin değeri 6'dır.";
    }
    else {
        echo "hiçbir koşul yerine gelmedi.";
    }

    if($a){
        echo "başarılı."; //başarılı yazar çünkü a değişkenine önceden birşey tanımlandı. Yani değeri var.
    }

?>