<?php
        /**
         * 
         */
        class Painel
        {
            public static function logado(){
                return isset($_SESSIO['login']) ? true : false;           
            }

        //Função LOGGOUT 
        public static function loggout(){
             session_destroy();
             header('Location: '.INCLUDE_PATH_PAINEL);
        }

        //Função carrega dinamicamente página HOME principal do painel.
        public static function carregarPagina(){
            if(isset($_GET['url'])){
                $url = explode('/',$_GET['url']);
                if(file_exists('pages/'.$url[0].'.php')){ //Pega o indice 0 do array gerado pela função explode
                    include('pages/'.$url[0].'.php');
                }else{
                    //Página não existe
                    header('Location: '.INCLUDE_PATH_PAINEL);
                }
            }else{
                include('../pages/home.php');
            }
        }

        public static function listarUsuariosOnline(){
            self::limparUsuariosOnline(); /**SELF - chama o método dentro da própria classe  para limpar usuários online a mais de 1 minuto*/
            $sql = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.online`" );
            $sql->execute();
            return $sql->fetchAll();
        }

        /**Método chamado para listar os usuários online */
        public static function limparUsuariosOnline(){
                $date = date('Y-m-d H:i:s'); /**Pega data e hora atual juntamente com minutos e segundos */
                $sql = MySql::conectar()->exec("DELETE FROM `tb_admin.online` WHERE ultima_acao < '$date' - INTERVAL 1 MINUTE' ");/**EXEC -> Executa direto , considrando que não tem nenhuma validação */
                 /**INTERVAL 1 MINUTE'comando do mysql pode DAY, HORA   etc*/
            }

        //Classe chamada na EDIÇÃO DO USUÁRIO
        public static function alert($tipo,$mensagem){
                    if($tipo == 'sucesso'){
                        echo '<div class="box-alert sucesso"><i class="fa fa-check"></i>'.$mensagem.'</div>';
                    }else if($tipo == 'erro'){
                        echo '<div class="box-alert erro"><i class="fa fa-times"></i>'.$erro.'</div>';
                    }
            }

        //Médodo para ver se a imagém de UPLOAD é valida 
        public static function imagemValida(){
                //Verificando tipo da imagem 
                if($imagem['type'] == 'image/jpeg' ||
                   $imagem['type'] == 'image/jpg' ||
                   $imagem['type'] == 'image/png' ){

                //Verificando tamanho da imagem 
                $tamanho = intval($imagem['size'])/1024;//Converte o tamanho da imagem em KB, e arredondando o tamanho com a função INTVAL
                
                if($tamanho <300){
                    return true;
                }else{
                    return false;
                }
                return false;
              }
               
        } 

        //UPLOAD da imagem
        public static function uploadFile($file){
            if(move_uploaded_file($file['tmp_name'],BASE_DIR_PAINEL.'/uploads/'.$file['name']))
                return $file['name'];
                else{
                    return false;
              }   
        
       }

       public static function deleteFile($file){
        @unlink('uploads/'.$file);
      }

    }
?>