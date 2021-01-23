<?php

    /* 
        Karşılaştırma Operatörleri;
        == eşittir
        != eşit değildir
        > büyüktür
        < küçüktür
        >= büyük eşit
        <= küçük eşit
        === denkse
        !== denk değilse
    */

    $a = 5;
    $b = 5;

    echo $a == $b; // True değeri döner. Yani 1 döner. Sıfır olursa sıfırı ekranda görmüyoruz.

    $a = 5;
    $b = "5";
    echo $a == $b; //True döner. Yani 1
    echo $a === $b; //False döner çünkü tipleri farklı. (Biri string diğeri integer)

?>