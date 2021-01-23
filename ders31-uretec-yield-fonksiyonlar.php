<?php

    // memory_get_usage() byte cinsinden ne kadar memory yediğini görebiliyoruz.
    // number_format()

/*     function byteToMB($byte)
    {
        return number_format($byte / 1048576, 2);
    }

    $sayilar = range(0, 1000000); // yield kullanmadan range ile sayı ürettiğimizde 33,3 MB yer kapladı.

    echo byteToMB(memory_get_usage()) . 'MB bellek kullanıldı.' */



/*     function say($baslangic, $limit)
    {
        $arr = [];
        for ($i = $baslangic; $i <= $limit; $i++){
            $arr[] = $i;
        }
        return $arr;
    }

    $sayilar = say(0, 10000);

    print_r($sayilar); */

    function say($baslangic, $limit)
    {
        for ($i = $baslangic; $i <= $limit; $i++){
            yield $i; // bellek tasarrufu nedeniyle yield kullanmak çok daha mantıklı ve basit.
        }
    }

    $sayilar = say(0, 10000);

    // echo byteToMB(memory_get_usage()) . 'MB bellek kullanıldı.'; // 0.33 MB bellek kullandı.

    foreach ($sayilar as $sayi){
        echo $sayi . '<br>';
    }



?>