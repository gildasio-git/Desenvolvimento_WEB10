
    <?php
        echo $_SERVER['SERVER_NAME'] . "</br>";
        echo $_SERVER['DOCUMENT_ROOT'] . "</br>"; 

        /**PRINT_R: permite a visualização de todas as variáveis dentro de uma variável */
        echo "<h1>Lista de todas as varíaveis</h1>";
        echo '<pre>';
            print_r($_SERVER);
        echo '</pre>';

    ?>
