<?php 
/*
 //Conexão com o banco de dados 
 $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');


     // EXTRAINDO DADOS DE AMBAS TABELAS 

     //Conexão com o banco de dados 
     $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');

     //Puxar todas as informações da tebela
     $sql = $pdo->prepare("SELECT * FROM categorias");

     // Puxar todas as informações da tebela especificando as colunas que deseja puxar
     // $sql = $pdo->prepare("SELECT `post` `titulo` FROM posts");
   
     //Executar a querie
     $sql->execute();

     //Joga as informações em uma varíavel passando a função "fetchALL" que significa , pega todas as informações
     $info = $sql->fetchAll();

     foreach ($info as $key => $value) {
          # code...
          $categoria_id = $value['id'];
          echo 'Exibindo posts de:' . $value['nome'];
          echo '<br/>';
          $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
            $sql->execute();
                $infoposts = $sql->fetchAll();
                    foreach ($infoposts as $key => $value) {
                        # code...
                            echo 'Título: ' .$value['titulo'];
                            echo '<br />';
                            echo '<br />';
                            echo 'Noticia: ' .$value['conteudo'];
                            echo '<br/>';
                            echo '<br/>';

          }

     }

     */

     //FORMA 2
     //INNER JOIN - Juntar tablelas - mostra todas as colunas de ambas de tabelas, redundância
     //Parâmetro "ON" equivalente ao WHERE porém usado para aplicar um filtro de dados nas tabelas unificadas.

     $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');
     $sql= $pdo->prepare("SELECT `posts`.*,`categorias`.*,`posts`.`id`AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");

     $sql->execute();

     $info = $sql->fetchAll(PDO::FETCH_ASSOC);//Parâmetro FETCH_ASSOC retorna apenas o nome da coluna.


     foreach ($info as $key => $value) {
        # code...
            echo 'Título: ' .$value['titulo'];
            echo '<br />';
            echo '<br />';
            echo 'Noticia: ' .$value['conteudo'];
            echo '<br/>';
            echo '<br/>';
   
}
    

?>