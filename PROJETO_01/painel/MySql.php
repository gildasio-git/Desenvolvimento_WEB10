<!-- 
    Classe que instancia o banco de dados via PDO

-->
<?php
    class MySql{

        private static $pdo;

        public static function conectar(){
            if(isset(self::$pdo)){
                return self::$pdo; // SELF - chama uma variável statica apenas dentro da classe
            }else{
                self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD);

            }
        }   
    }


?>