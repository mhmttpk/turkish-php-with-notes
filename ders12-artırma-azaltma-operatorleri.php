<?php

    /* 
        Artırma ve Azaltma Operatörleri;
        $a++
        ++$a
        $a--
        --$a
    */

    $a = 5;

    // echo $a++; //değer yine aynı olur. Çünkü bir sonraki işlemde artırılmış görünür.

    $a++;
    echo $a;

    echo ++$a; // değeri önce artırdı sonra yazdırdı.
?>