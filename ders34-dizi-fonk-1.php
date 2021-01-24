<?php

/* 
    print_r()  / değişken veya dizinin çıktısını okunabilir bir şekilde görmemizi sağlıyor.
    var_dump() / programlamaya göre daha kompleks ve detaylı bir çıktı veriyor.
    explode() / belirli bir karakterle ifadeyi parçalayıp dizi haline getirmemize yarar.
    implode() / explode'un tam tersi olarak bir diziyi birleştirerek string ifadeye çevirmemizi sağlar.
    count() / bir dizinin kaç tane elemanı olduğunu bulmamızı sağlıyor.
    is_array() / içerisine girilen değişkenin dizi olup olmadığını kontrol etmemizi sağlar. Kontrol fonksiyonudur.
    shuffle() / diziyi karıştırarak her bastırdığımızda farklı şekillerde basmamızı sağlıyor.
    array_combine() / iki farklı diziyi anahtar değer olarak birleştirmeye yarıyor.
    array_count_values() / bir dizide tekrarlanan elemanların kaç kez tekrarlandığını bulmak için kullanılıyor.
    array_flip() / anahtarlarla değerlerin yerlerini değiştirir; yani değerler anahtar, anahtarlar değer olur.
    array_key_exists() / dizi içerisinde belirlediğimiz anahtarın olup olmadığını kontrol etmemize yarıyor.
*/

$arr = [
    'ad' => 'mehmet',
    'soyad' => 'topak',
    'yas' => '28'
];

//print_r($arr);

//var_dump($arr);

$test = 'mehmet, topak, udemy';
$arr2 = explode(',', $test);
// print_r($arr2);

$string = implode(' | ', $arr2);
//echo $string;

//echo count($arr2);

/* if (is_array($string)) {
    echo 'bu bir dizidir.';
} else {
    echo 'bu bir dizi değildir.';
} */

$arr3 = [1,2,3,4,5,6,7,8,9,10];
shuffle($arr3);
// print_r($arr3);

$keys = ['ad', 'soyad'];
$values = ['mehmet', 'topak'];

$arr4 = array_combine($keys, $values);
// print_r($arr4);

$arr5 = ['mehmet', 'topak', 'udemy', 'mehmet', 'topak'];
$arr6 = array_count_values($arr5);

// print_r($arr6);

$arr7 = [
    'ad' => 'mehmet',
    'soyad' => 'topak',
    'yas' => '28'
];

$arr8 = array_flip($arr7);

// print_r($arr8);

$arr9 = [
    'ad' => 'mehmet',
    'a' => [
        'b' => [
            'c' => [
                'd' => 'e'
            ]
        ]
    ]
];

/* if (array_key_exists('ad', $arr9)){
    echo 'ad anahtarı var.';
} else {
    echo 'ad anahtarı yok.';
} */

function _array_key_exists($cur_key, $arr9){
    foreach ($arr9 as $key => $val){
        if($key == $cur_key){
        return true;
        }
        if(is_array($val)){
            return _array_key_exists($cur_key, $val);
        }
    }
    return false;
}

if (_array_key_exists('c', $arr9)){
    echo 'c anahtarı var.';
} else{
    echo 'c anahtarı yok.';
}



?>