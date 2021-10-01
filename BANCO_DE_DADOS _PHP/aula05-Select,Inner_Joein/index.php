<?php 
       //Conexão com o banco de dados 
    $pdo = new PDO('mysql:host=localhost;dbname=moduloDB','root','');

      //Puxar todas as informações da tebela
    $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id=?");

     // Puxar todas as informações da tebela especificando as colunas que deseja puxar
     // $sql = $pdo->prepare("SELECT `post` `titulo` FROM posts");
    
     //Executar a querie
     $sql->execute(array($_GET['categoria_id']));

     //Joga as informações em uma varíavel passando a função "fetchALL" que significa , pega todas as informações
     $info = $sql->fetchAll();

     /*
     //Maniuplando as informações com FOREACH
     foreach ($info as $key => $value) {
         # code...
         echo 'Titulo: ' .$value['titulo'];

            echo '<br/>';
            echo 'Noticia: '.$value['conteudo'];
            echo '<hr>';
     }
     */

     
     
     /*
     //Monstando as informações do banco
      echo '<pre>';
        print_r($info);
      echo '</pre>';
      */


      
      /*
       * Manipulando as informações usando o FOR
       * 
       
      for ($i=0; $i < count($info); $i++) { 
          # code...
           echo 'Titulo: ' .$info[$i]['titulo'];
           echo '<br />';
           echo 'Titulo: ' .$info[$i]['conteudo'];
           echo '<hr>';
      }
*/

//Maniuplando as informações com FOREACH trazendo informações de ambas TABELAS.
foreach ($info as $key => $value) {
    # code...
    echo 'Titulo: ' .$value['titulo'];

       echo '<br/>';
       echo 'Noticia: '.$value['conteudo'];
       echo '<hr>';
}

?>