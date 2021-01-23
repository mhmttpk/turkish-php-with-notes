<?php

    $a = 7;

    switch ($a){
        case 5:
            echo "a 7'e eşit.";
        break;

        case 6:
            echo "a 6'ya eşit.";
        break;

        case $a % 4 == 3:
            echo "7'yi 4'e bölünce kalan 3'tür.";
        break;

        default:
            echo "a hiçbirşeye eşit değil.";
        break;

    } // switch case ifadesinde break olduğu için sağlanan koşuldan sonra switch case'den çıkar. 
    // Birden fazla koşul sağlanırsa sadece ilk sağlanan koşulu yazdırır. Sonra break devreye girer.


?>