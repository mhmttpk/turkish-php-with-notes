<?php
    /* 
        Sabit Değişkenler;
        define() fonksiyonu ile tanımlanır.
        Türkçe karakterler içerir.
        Sayı ile başlayamaz.
        Harf yada _ işareti ile başlar.
        Büyük küçük harfe duyarlıdır.
        Object hariç tüm veri türlerini kapsar. Örnek (new stdClass) olamaz.
    */
    $mehmet = "mehmet topak";
    echo $mehmet;
    define("mehmet", "mehmet topak");
    define("Mehmet", "mehmet topak 2");
    echo mehmet;
    echo Mehmet;

    define("mehmet", "yeni değer");
    echo mehmet; //önceden zaten tanımlanmış olduğu için hata verir. hatanın altında ilk tanımlanan değeri gösterir.



?>