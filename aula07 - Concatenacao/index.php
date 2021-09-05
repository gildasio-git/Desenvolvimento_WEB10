<?php 
      /**Unir uma string com uma variável */  
      $nome =  'Gildasio';
      $idade = 47;

      $nomedaclass= 'Box';

      echo 'Meu nome é ' . $nome . ' e minha idade é '$idade;

      /**Uso das aspas duplas  */

      //Usando aspas SIMPLES  
      echo 'Ola meu nome é ' . $nome;

      //Usando as apas DUPLAS não precisa fazer a concatenção o PHP vai interpletar a variável.
      echo "Meu nome é $nome";

      /**Algumas situações que vale ressaltar sobre aspas duplas  */
      //Exemplo:

      echo "<div class=""  "; // Nesse caso aqui o PHP vai entender que esta fechando 

      //Solução
      echo "<div class=\"$nomedaclass\">Meu conteúdo da div</div>";
      
?>