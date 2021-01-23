<?php

    function say($sayi)
    {
        echo $sayi;
        if ($sayi < 10){
            say($sayi + 1);
        }
    }

    say(1);

    $kategoriler = [
        [
            'id' => 1,
            'parent' => 0,
            'ad' => 'Dersler'
        ],
        [
            'id' => 2,
            'parent' => 0,
            'ad' => 'Güncel'
        ],
        [
            'id' => 3,
            'parent' => 0,
            'ad' => 'Blog'
        ],
        [
            'id' => 4,
            'parent' => 1,
            'ad' => 'PHP Dersleri'
        ],
        [
            'id' => 5,
            'parent' => 1,
            'ad' => 'CSS Dersleri'
        ],
        [
            'id' => 6,
            'parent' => 4,
            'ad' => 'Fonksiyonlar'
        ],
        [
            'id' => 7,
            'parent' => 4,
            'ad' => 'Değişken Kullanımı'
        ],
        [
            'id' => 8,
            'parent' => 6,
            'ad' => 'Recursive Fonksiyonlar'
        ]
        ];

        function kategoriListele($kategoriler, $parent = 0)
        {
            echo '<ul>';
            foreach ($kategoriler as $kategori){
                if ($kategori['parent'] == $parent){
                    echo '<li>' . $kategori['ad'];
                    echo kategoriListele($kategoriler, $kategori['id']);
                    echo '</li>';
                }
            }
            echo '</ul>';
        }

        kategoriListele($kategoriler);

        /* 
        EKRANA YAZDIRMAYI DEĞİL GERİYE DEĞER OLARAK DÖNDÜRMEYİ İSTERSEK.

        function kategoriListele($kategoriler, $parent = 0)
        {
            $html = '';
            $html .= '<ul>';
            foreach ($kategoriler as $kategori){
                if ($kategori['parent'] == $parent){
                    $html .= '<li>' . $kategori['ad'];
                    $html .= kategoriListele($kategoriler, $kategori['id']);
                    $html .= '</li>';
                }
            }
            $html .= '</ul>';
            return $html;
        }

        echo kategoriListele($kategoriler);
        */

        $arr = [
            'ad' => 'mehmet',
            'soyad' => 'topak',
            'sporlar' => [
                'yuzme' => 'evet',
                'kosma' => 'evet',
                'savunma_sporlari' => [
                    'jeetkundo' => 'evet',
                    'judo' => 'hayır'
                ]
            ]
                ];

/*         function dizide_bul($dizi, $anahtar)
        {
            foreach ($dizi as $key => $val)
            {
                if ($key == $anahtar){
                    return $val;
                }
            }
            return false;
        };
        //Bu şekilde ana dizi elemanlarındaki aramaları (soyad) bulur, fakat alt elemanlara erişemez. Örneğin 'yuzme'
        echo dizide_bul($arr, 'soyad');  */

        function dizide_bul($dizi, $anahtar)
        {
            foreach ($dizi as $key => $val)
            {
                if ($key == $anahtar){
                    return $val;
                }
                if (is_array($val)){
                    $sonuc = dizide_bul($val, $anahtar);
                    if($sonuc){
                        return $sonuc;
                    }
                }
            }
            return false;
        };

        echo dizide_bul($arr, 'soyad'); // sonucta dizi dönecek ise print_r ile yazdırmamız gerek.
?>