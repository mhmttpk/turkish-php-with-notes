<?php

    /* 
        func_num_args() // kaç tane arguman yani kaç tane parametre gelmiş onu buluruz.
        func_get_args() // parametrelerin listesini dizi olarak döndürür.
        func_get_arg() // indeks numarası vererek o parametrenin değerine ulaşırız.
    */

    function test()
    {
        echo func_num_args() . '<br>';
        print_r(func_get_args()) . '<br>';
        echo func_get_arg(2);
    }

    test('mehmet', 'topak', 'prototürk');

?>