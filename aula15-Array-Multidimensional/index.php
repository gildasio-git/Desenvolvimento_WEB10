<?php
    //ARRAY SINGLE.

    $arr  = ['Gildasio','Leticia', 'Neide'];
    $arr = array('Gildasio','Giulene');

    $arr[0] = 'Gildasio';
    $arr[1] = 'Leticia';


    //ARRAYS MULTIMENCIONAIS 

    //FORMA 1
    $arr2 = array(array('Gildasio','Neide'),array('47','46'));
    echo $arr2[0][1] . " - " .$arr2[1][1];
    echo '<br>';

    //FORMA 2
    $arr3[0] = array('Leticia','chave2'=>'Giulene');
    echo $arr3[0]['chave2'];

  

    ?>