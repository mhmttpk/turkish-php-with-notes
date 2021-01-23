<?php
    /* 
        Atama Operatörleri;
        = değer atama
        += artırarak değer atama
        -= azaltarak değer atama
        /= bölerek değer atama
        *= çarparak değer atama
        %= modunu alarak değer atama
        . birleştirme operatörü
        .= birleştirerek değer atama
    */

    $a = 5;
    $a += 5; // $a = $a + 5;
    $a %= 5; // $a = $a % 5;

    $ad = "mehmet";
    $soyad = "topak";

    echo $ad . $soyad;

    $ad .= $soyad;
    echo $ad;
?>