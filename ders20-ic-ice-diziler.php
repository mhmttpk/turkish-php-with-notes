<?php

/* 
    Siteler
        E-Ticaret
            Sahibinden
            N11
            Hepsiburada
            Gittigidiyor
        Eğitim
            Udemy
            Prototürk
            93academy
*/

$kategoriler = [
    'siteler' => [
        'e-ticaret' => [
            'sahibinden',
            'n11',
            'hepsiburada',
            'gittigidiyor'
        ],
        'egitim' => [
            'udemy',
            'prototürk',
            '93academy'
        ]
    ]

];

echo $kategoriler['siteler']['e-ticaret'][2];

print_r ($kategoriler);







?>