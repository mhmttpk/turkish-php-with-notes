<?php

    /*
    while (KOŞUL TRUE) {

    }
    */

    $i = 1;

    while ($i <= 10) {
        echo $i . '<br>';
        $i++;
    }

    // for döngüsünden farkı, for döngüsünde işlemi tek seferde parantez içerisinde yapıyoruz.
    // bütün döngülerde contunie ve break işlemleri geçerlidir. 
    // ayrıca endwhile da kullanılabilir.

    while ($i <= 10):
        echo $i . '<br>';
        $i++;
    endwhile;

?>