<?php
    /**
     * CONSTRUCT - Método especial que ja vem por padrão na classe
     * pode declarar ou não declarar.
     */

    include('Class1.php');
    $teste = new Class1('Gildasio',23);//Passa os parâmetros para classe

    echo $teste->getNome();
    echo '<br>';
    echo $teste->getIdade();

?>