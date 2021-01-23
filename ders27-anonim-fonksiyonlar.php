<?php

    function test1(){
        return 'test';
    }

    echo test1();

    $test = function(){
        return 'test';
    };

    // echo $test; test değişkenini bu şekilde yazdırırsak çalışmaz çünkü fonksiyon içeren bir değişken. 
    echo $test(); // bu şekilde fonksiyon çağırır gibi çağırmamız gerekiyor.

    $test = function($par){
        return 'test' . $par;
    };

    $test2 = function() use($test){ // use ifadesi ile yukarıdaki anonim fonksiyonu anonim fonksiyon içerisinde kullandık.
        return 'test2';
        return $test('test3');
    };

    echo $test2(); //fonksiyon olarak çağırmamız gerekiyor.

    echo $test('mehmet');

    $arr = [
        function(){
            return '1. fonksiyon';
        },
        function(){
            return '2. fonksiyon';
        },
        function(){
            return '3. fonksiyon';
        }
    ];

    print_r($arr); // closure objet diye bir tanım yazdırdı.

    echo ($arr)[0](); // yine fonksiyon gibi çağırmamız gerekiyor.

    // echo ($arr)[rand(0,2)]();


    function filtrele($isim)
    {
        return $isim . ' legend';
    }

    $arr = ['mehmet', 'topak', 'software', 'developer'];

    $arr = array_map('filtrele', $arr); // array_map dizideki her elemanı alıp ona bir filtre uygulamak istersek onu uyguluyor.

    $arr = array_map(function($isim){
        return $isim . ' legend';
    }, $arr);

    $soyad = 'topak';

    function filtrele2($isim)
    {
        global $soyad; //global olarak dışardaki değişkeni kullanılabilir hale getirdik.
        return $isim . ' legend';
    }

    $arr = ['mehmet', 'topak', 'software', 'developer'];

    $arr = array_map('filtrele2', $arr); // array_map dizideki her elemanı alıp ona bir filtre uygulamak istersek onu uyguluyor.

    $arr = array_map(function($isim) use($soyad){ //buradaki use() ifadesi ile de global gibi dışardaki değişkeni anonim fonksiyon içerisinde kullanabiliriz.
        return $isim . ' legend';
    }, $arr);

    /* 
    function($isim) use($soyad){ //buradaki use() ifadesi ile de global gibi dışardaki değişkeni anonim fonksiyon içerisinde kullanabiliriz.
        return $isim . ' legend'; // Anonim fonksiyon detayı önemli. Anonim fonksiyonda use ile kullandık.
    }
    */
?>



