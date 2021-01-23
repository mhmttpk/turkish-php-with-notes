<?php

    /* 
        Mantıksal Operatörler;
        && - AND - ve
        || - OR - veya
        ! - değilse
    */

    $a = 5;
    $b = 5;

    echo ($a == $b) && ($a + $b == 10); //true değerini döndürür.
    echo ($a == $b) && ($a + $b == 9); //false değerini döndürür.
    echo ($a == $b) || ($a + $b == 14); // true değerini döndürür.

    echo !($a == $b); // true ise false olur.
    echo !($a != $b); // false ise true olur.
?>