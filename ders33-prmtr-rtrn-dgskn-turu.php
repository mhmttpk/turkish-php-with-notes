<?php
    
    // declare(strict_types = 1); // Kurs anlatımında bu declare işlevi çalışıyor fakat burada çalışmadı??

    function topla(int $sayi1, int $sayi2)
    {
        return $sayi1 + $sayi2;
    }

    echo topla("1",3); // string ifade kullandık. Normalde hata vermeden topladı fakat declare yaptığımız için fonksiyon içerisindeki int'i katı kural olarak uyguladı.

    function arr(array $arr): string 
    {
        return implode(',', $arr);
    }

    print_r(arr(["test", "test2"]));

?>