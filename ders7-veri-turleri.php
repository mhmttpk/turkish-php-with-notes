<?php

    /* 
        Veri Türleri (Data types) 
        String "mehmet" 'mehmet'
        Integer 500, 200
        Float (double) 5.5, 7.2
        Boolean (true, false)
        Array (dizi)
        Object (nesne)
        NULL
        gettype()
    */

    $string = "mehmet topak";
    $int = 500; //Tırnak içerisinde yazarsak type'ımız stringe dönecektir.
    $float = 5.5;
    $bool = false;
    $array = array();
    $null = NULL;
    echo gettype($bool); 

?>