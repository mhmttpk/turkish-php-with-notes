<?php
    /*
    for(DEĞER; KOŞUL; DEĞERİ ARTIR/AZALT){

    }
    */

    for ($i = 1; $i <= 10; $i++){
        echo $i . '<br>';
    }

    for ($i = 10; $i > 0; $i--){
        echo $i . '<br>';
    }

    $arr = [
        'udemy',
        'prototürk',
        '93academy',
        'topak'
    ];

    /*
    for ($i = 0; $i <= 2; $i++){
        echo $arr[$i] . '<br>';
    }
    */

    for ($i = 0; $i <= (count($arr) - 1); $i++){
        echo $arr[$i] . '<br>';
    }

    for ($i = (count($arr) - 1); $i >= 0; $i--){
        echo $arr[$i] . '<br>';
    }

    for ($i = 1; $i <= 10; $i++)
        echo $i . '<br>';
        echo 'test';  // her seferinde test'i de yazdırmak istiyorsak süslü parantez içerisine almalıyız.
    

    for ($i = 1; $i <= 10; $i++):
        echo $i . '<br>';
        echo 'test';    
    endfor; // bu şekilde de kullanılabilir.

    for ($i = 1; $i <= 10; $i++):
        echo $i . '<br>';
        if ($i == 3){
            continue; // 3e geldiğinde yazdırmadan o kısmı atlar.
        }
        if ($i == 6) {
            break; // 6'ya kadar devam etsin 6da dursun dersek bunu kullanabiliriz.
        }    
    endfor; 

?>