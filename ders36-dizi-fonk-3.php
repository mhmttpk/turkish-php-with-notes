<?php

/* 
    array_values() / dizideki değerleri başka bir diziye aktarır.
    array_push() / dizinin sonuna yeni bir eleman eklemek için kullanılır.
    array_unshift() /  dizinin başına yeni eleman eklemek için kullanılır.
    array_keys() / dizinin anahtarlarını listelemek için kullanılır.
    current() / dizinin ilk elemanını bulmak için kullanılır.
    end() / tam tersi dizinin son elemanını verir.
    next()
    prev()
    reset()
    extract()
    asort()
    arsort()
    ksort()
    krsort()
*/

$arr = [
    'ad' => 'mehmet',
    'topak' => 'topak'
];

$arr2 = array_values($arr);
//print_r($arr2);
$arr20 = ['mehmet', 'topak', 'mehmet', 'topak', 'udemy'];
$arr21 = array_unique($arr20);
//print_r(array_values($arr21)); // array values ile array unique'i aynı anda kullanırsak oluşturulan array'i 0-1-2 şeklinde sıralar.

$arr2 = ['mehmet', 'topak'];
array_push($arr2, 'udemy');
$arr2[] = 'yeni değer'; // array_push haricinde bu şekilde de yeni değer eklenebilir.
$arr2['anahtar'] = 'yeni değer 2';
//print_r($arr2);

$arr3 = ['mehmet', 'topak'];
array_unshift($arr3, 'udemy');
//print_r($arr3);
$arr4 = [
    'site' => 'udemy'
];

$arr5 = array_merge($arr4, $arr3);
//print_r($arr5);

$arr6 = [
    'ad' => 'mehmet',
    'soyad' => 'topak',
    'a' => [
        'b' => 'c',
        'd' => [
            'e' => 'f'
        ]
    ]
];

$keys = array_keys($arr6);
// print_r($keys);  // a'dan sonraki kısmı bastırmadı, bunun için aşağıya fonksiyon yazmamız gerekiyor.

function _array_keys($arr6){
    static $keys = []; //her döngüde sıfırdan diziyi oluşturmasını engellemek için static olarak tanımladık, değerleri üzerinde yazacak.
    foreach ($arr6 as $key => $val){
        array_push($keys, $key);
        if (is_array($val)){
            return _array_keys($val);
        }
    }
    return $keys;
}

$keys = _array_keys($arr6);
//print_r($keys);

$arr7 = ['mehmet', 'topak', 'udemy', 'prototürk', '93academy'];
// echo current($arr7);
// echo end($arr7); / bazen eski sürümlerde hata verebilir. Böyle durumlarda değişkene aktarıp ekrana yazdırmak gerekebilir.











?>