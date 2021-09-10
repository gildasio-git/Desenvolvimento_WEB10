<?php
    //Recortar string 
    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Nunc eu dictum libero. Aenean bibendum augue felis, a consectetur lacus 
    blandit non. Pellentesque condimentum imperdiet sem quis rhoncus. Quisque 
    at venenatis ipsum. Cras vitae erat libero. Morbi pellentesque justo mi,
    in convallis ligula egestas quis. Nulla in purus et augue dictum rhoncus 
    tincidunt nec erat. Nunc et est non orci lobortis ullamcorper.';

    /**
     * SUBSTR - Seve para recortar uma string 
     * substr(conteudo,inicio,20)
     */
    echo substr($conteudo,0,100);
    echo '<br>';
    echo '<hr>';

    /**
     * EXPLODE - Quebra conjunto de palavras em  ARRAY
     * explode(local onde quebrar,Variável)
     */
     $nome = 'Gildasio Bizerra Brito';


     $nomes = explode(' ',$nome);
     print_r($nomes);

     echo '<br>';
     echo '<hr>';

     /**
      * IMPLODE - Reuni um ARRAY com um delimitador
      * implode('',array)
      */
      $nomes = implode(' ',$nomes);
      echo $nomes;

      echo '<br>';
      echo '<hr>';
      
      
      /**
       * STRIP_TAGS = Remove todos os códigos HTML de um texto.
       * 
       */

       $conteudo = '<h1>Gildasio</h1>Outra coisa';
       echo strip_tags($conteudo);

       echo '<br>';
       echo '<hr>';


       /**
        * HTMLENTITIES - Mostra o código HTML na página. 
        *
        */
        echo htmlentities('<div></div>');


?>