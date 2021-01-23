<?php

$ad = "mehmet";
$soyad = "topak";
$meslek = "geliştirici";
$yas = 24;

    /* 
        Dizi Tanımlama;
            1- array()
            2- []
    */

$kimlik = array(
    0 => "mehmet", // 'ad' => "mehmet",
    1 => "topak",  // 'soyad' => "topak",
    2 => "geliştirici", // 'meslek' => "geliştirici",
    3 => 24 // 'yas' => 24
);

$kimlik2 = [
    'ad' => "mehmet",
    'soyad' => "topak",
    'meslek' => "geliştirici",
    'yas' => 24
];

// echo $kimlik; ile arrayi ekrana yazdıramayız.

/* 
    Dizi içindeki elemanlara erişmek
        - princ_r()
*/

print_r($kimlik);
echo $kimlik[1];




?>