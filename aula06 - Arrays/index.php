<?php
         /**ARRAYS
          * Uma variável, porém dentro dessa varíavel podemos colocar vários valores.
          */

        /**FORMA 1 */
         $nomes = ('Gildasio','Leticia','Giulenes','Neide');
         /***Para mostrar o conteúdo de um array basta usar o código passando a variável e o valor do índice
          * dentro do colchetes
         */
         echo $nomes[0];

       
         /**FORMA 2 */
         $nome[] = 'Gildasio';
         $nome[] = 'Giulene';
         
         echo $nome[0];
         echo "ola mundo ";

         /**FORMA 3 */
         $profissao[0] = 'Técnico em Informática';

         /**FORMA 3 - Versões mais recentes do PHP */
         $variaveis = ['Gildasio','Leticia','Giulene','Neide'];
         echo $variaveis[0];

        /**FORMA 4 - pode também declarar com valores mistos, ou seja numéros e letras  */
        $informacoes = array('Gildasio',47, true, 10.09 );

        /**FORMA 5 variação da forma de declaração acima */
        $info['nome']= Gildasio;
        $info['idade'] = 47;
        $info['profissao'] = 'Tecnico em Informatica';

            echo $info['nome'];][
            echo '<br />';
            echo $info['idade'];
            echo '<br />';
            echo $info['profissao'];

?>
