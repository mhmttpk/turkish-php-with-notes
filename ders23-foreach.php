<?php

/* 
foreach (ARRAY as KEY => VALUE) {

}
*/

$sayilar = [1,2,3,4,5,6,7,8,9,10];

foreach ($sayilar as $sayi){
    echo $sayi . '<br>';
}

$uyedetay = [
    'ad' => 'mehmet',
    'soyad' => 'topak',
    'yas' => 24
];

foreach ($uyedetay as $detay){
    echo $detay . '<br>';
}

foreach ($uyedetay as $key => $val){
    echo $key . ': ' . $val . '<br>';
}


?>