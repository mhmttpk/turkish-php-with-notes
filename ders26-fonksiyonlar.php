<?php

    // fonksiyonlar genelde birşeyler yazdırma için kullanılmazlar, değer döndürürler. (return)
    // ekrana birşeyler yazdırma amacı çok nadirdir.

    function test1(){
        echo "test";
    }

    test1(); //fonksiyonun çalışması için yazıldıktan sonra buradaki gibi çağırılması gerekiyor.

    function test(){
        return "test";
    }

    $a = test(); // değişkene eşitlemeyince değerimizi yazdırmadı.

    echo $a;

    //fonksiyonlar parametre alabilir.

    function topla($sayi1, $sayi2 = 10){  // varsayılan değer atarsak eğer sayi 2 = 10 gibi, sayı 2'yi girmezsek default olarak kendisi 10'u atayacaktır.
        return ($sayi1 + $sayi2);
    }
    // $toplam = $topla(5);
    $toplam = $topla(5,12); // sadece 1 parametre yazsaydık hata alırdık, 2. parametreyi de bizden istiyor.
    //echo $toplam;

    $ad = 'mehmet';

    function adsoyad($soyad) {
        return $soyad;
    }

    echo adsoyad('topak');

/*     function adsoyad2($soyad) {
        return $ad . ' ' . $soyad; // dışardaki değişkeni fonksiyon içerisinde kullanamıyoruz.
    } */

    // $GLOBAL, $GLOBALS veya global kullanarak dışardaki bir değişkeni fonksiyon içerisinde kullanabiliriz.

    function adsoyad2($soyad) {
        global $ad; // burada globali kullanarak ad değişkenini fonk içerisinde kullandık.
        return $ad . ' ' . $soyad; // dışardaki değişkeni fonksiyon içerisinde kullanamıyoruz.
    }

/*     function adsoyad2($soyad) {
        return $GLOBALS[$ad] . ' ' . $soyad; // $GLOBALS kullanımı da bu şekildedir.
    } */

    echo adsoyad2('topak');

    $yazi = "mehmet topak mehmet topak";
    
    // echo substr($yazi, 0, 10) . '..'; Bu işlemi bir fonksiyon içerisinde yapacağız.

    function kisalt($str, $limit = 10)
    {
        $karaktersayisi = strlen($str);
        if ($karaktersayşsş > $limit) {
            $str = substr($str, 0, $limit) . '..' ;
        }
        return $str;
    }

    echo kisalt($yazi, 5);
    
?>