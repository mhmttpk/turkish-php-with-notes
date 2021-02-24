<?php

/* 
    array_map() / dizi içerisindeki her elemanı alır ve manipülasyon yaparak bize geri döndürür.
    array_filter() / genelde boş olan dizi değerlerini kaldırmada kullanılır. Veya bir fonksiyon yardımıyla filtreleme yapılabilir.
    array_merge() / İki diziyi birleştirmek için kullanılır.
    array_rand() / rand random demek, içerisinden rastgele değerleri seçmemizi sağlıyor.
    array_reverse() / bir diziyi tersten yazmak için kullanılır.
    array_search() / dizi içerisinde arama yapar. değerin olup olmadığını bu şekilde anlayabiliriz.
    in_array() / array_search fonksiyonu ile hemen hemen aynı işlevi görür.
    array_shift() / dizinin ilk elemanını çıkarmaya yarar. ilk elemanı depolar.
    array_pop() / dizinin son elemanını çıkarmaya yarar. Son elemanı depolar.
    array_slice() / dizinin belirli bir aralığını seçmek için kullanılır.
    array_sum() / dizinin değerlerinin toplamını bulmak için kullanılır.
    array_product() / dizinin değerlerinin çarpımını bulmak için kullanılır.
    array_unique() / dizide tekrarlanan elemanları siler.
*/

function filtrele($val){
    return $val * 2;
}

$arr = [1,2,3,4,5];
$arr2 = array_map('filtrele', $arr);

//print_r($arr2);

$arr3 = ['', 'mehmet', '', 'topak'];
$arr4 = array_filter($arr3);
//print_r($arr4);

$arr5 = [1,2,3,4,5];
$arr6 = array_filter($arr5, function($item){
    return $item > 2 && $item < 5;
});
//print_r($arr6);

$arr7 = array_map(function($val){
    if ($val > 2 && $val < 5){
        return $val;
    }
},$arr5);
//print_r($arr7); // array_map ile ayı işlemi yaptığımızda koşulu sağlamayan değerleri de boş olarak ekrana bastırır.

$arr8 = [1,2,3];
$arr9 = [4,5,6];
$arr10 = array_merge($arr8, $arr9);
//print_r($arr10);

$arr11 = [
    'ad' => 'mehmet',
    'soyad' => 'topak',
    'yas' => 28,
    'site' => 'topak.com'
];

$random = array_rand($arr11, 2);
//print_r($random); / sadece değişken isimlerini random olarak bastırdı. Aşağıda değerleri bastıracağız.

$values = array_map(function($key) use($arr11){  // dışardaki bir diziyi anonim fonksiyon içerisinde kullanmak için use ifadesini kullandık, aksi takdirde hata alırdık.
    return $arr11[$key];
}, $random);

//print_r($values);

$arr12 = [1,2,3,4,5];
//print_r($arr12);
$arr13 = array_reverse($arr);
//print_r($arr13);

$arr14 = [
    'ad' => 'mehmet',
    'soyad' => 'topak',
    'a' => [
        'b' => [
            'c' => 'd'
        ]
    ]
        ];

$test = array_search('topak', $arr14);
// echo $test;

function _array_search($cur_val, $arr14)
{
    foreach ($arr14 as $key => $val){
        if ($val == $cur_val){
            return true;
        }
        if (is_array($val)){
            return _array_search($cur_val, $val);
        }
    }
    return false;
}

$test = _array_search('d', $arr14);
// echo $test;

$arr15 = [1,2,3,4];

if (in_array('3', $arr15))
{
    echo '3 değeri var.';
} else {
    echo '3 değeri yok.';
}

$arr16 = [1,2,3,4,5];
// $ilk_eleman = array_shift($arr16);
// $son_eleman = array_pop($arr16);
// print_r($arr16);
// echo $ilk_eleman;

// ilk 2 eleman hariç hepsi

$arr17 = array_slice($arr16, 2);
// print_r($arr17);

// 3'ten başla 2 elemanı seç

$arr18 = array_slice($arr16, 2, 2);
// print_r($arr18);

// son 2 elemanı seç

$arr19 = array_slice($arr16, -2);
// print_r($arr19);

$toplam = array_sum($arr16);
// print_r($toplam);

$carpim = array_product($arr16);
// print_r($carpim);

$arr20 = ['mehmet', 'topak', 'mehmet', 'topak', 'udemy'];
$arr21 = array_unique($arr20);
print_r($arr21);




?>