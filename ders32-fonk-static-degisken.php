<?php

    function say(){
        static $sayi =1; // static kullanıldığında değişkeni 1 defa tanımlandığı zaman;
        // fonksiyon yeniden çalışınca sayıyı görür ve yeniden sayıya 1 tanımlamak yerine bu satırı es geçer.
        echo $sayi . '<br>';
        $sayi++;
    }

    say();
    say();
    say();
    say();
    say();
    say();
    // normalde fonksiyonu her çağırdığımızda ekrana 1 yazdı.
    // static ile çağırdığımızda 1'den 6'ya kadar yazdı.

    function yukle($deger){
        static $yuklenenler = []; //static yapmasaydık sadece b.php'yi yüklerdi. Static yaptığımız için diğer değerleri de yazdırdı.
        $yuklenenler[] = $deger;
        return $yuklenenler;
    }

    yukle('test.php');
    yukle('a.php');
    $yuklenenler = yukle('b.php');

    print_r($yuklenenler);

?>