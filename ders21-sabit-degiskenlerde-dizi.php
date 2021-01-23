<?php

// define('uye', 'mehmet');
// echo uye;

define ('uye', [
    'ad' => "mehmet",
    'soyad' => "topak",
    'meslek' => "geliştirici",
    'yas' => 24,
    'sporlar' => [
        'boxing',
        'running'
    ]
]);

echo uye['soyad'];

echo uye['sporlar']['2'];


?>