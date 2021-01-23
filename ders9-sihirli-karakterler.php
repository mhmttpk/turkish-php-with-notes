<?php
    /* 
        Sihirli karakterler; (Sadece çift tırnak içerisinde kullanılır.)
        Birden fazla yan yana koyarsak normal sayfada sadece 1 tane görünür. Hepsini görmek istiyorsak kaynak bölümünde görünür.
        \t   Bir tab kadar boşluk bırakır. 
        \n   Alt satıra indirir. new line anlamındadır.
        \\   \ karakterini kullanmak istediğimizde iki tane \\ yaparak tırnak içerisinde \ karakterini kullanabiliriz.
        \$   $ karakterini kullanmak için kullanılır. Diğer türlü değişken olarak görür.
        \'   Bunlar karakterleri kullanabilmemiz için kaçış karakteri olarak adlandırılır.
        \"   Bu da aynı tanım.
    */

    $test = "mehmet\t\ntopak";
    $ad = "Mehmet";
    echo $test;

    echo "Merhaba, benim adım $ad";
    echo 'Merhaba, benim adım $ad';
    echo "\$ad değişkeni $ad değerine eşittir.";

?>