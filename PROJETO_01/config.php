<?php
/**
 * Instancia a classe para envio de Email
 */

session_start(); /**Trata se de uma VARIÁVEL que fica armazenada mesmo que nossa página
                 seja atualizada,o ate o usuário feche o navegador
                 COOKIE: São variaveis que são armazenadas no navegador e determinamos o 
                 TEMPO que essa variável fique armazenada no navegador.
                 */ 

/** Pegando Horário de São Paulo */
//date_default_timezone_get('Mmerica/São_Paulo');

$autoload = function($class){
  if($class == 'Email'){
    require_once('classes/phpmailer/PHPMailerAutoload.php');//REQUIRE_ONCE - insere somente uma vez o arquivo
  }
  include('classes/'.$class.'.php');
};

/** */
spl_autoload_register($autoload);


/**
    * Nesse arquivo conterá todas as funções, varíaveis e cosntantes
    * Tuto que será carregado antes de ser renderizado nosso código.
    */

    define('INCLUDE_PATH','http://localhost/sites/DesenvolvimentoWEB10/PROJETO_01/'); //Diretório raiz do nosso site 
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');//Drietório raiz do painel


    //DEININDO DIRETÓRIO BASE DAS IMAGEMS PARA ENVIO 
    define('BASE_DIR_PAINEL',__DIR__.'/painel/');

    /*BLOCO DE CONFIGURAÇÃO CHAMADA NA CLASSE COM OS PARÂETROS DE CONEXÃO COM O BANCO DE DADOS */
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','projeto_01');

    //Constante para painel de controle
    define('NOME_EMPRESA','Mimos Stories');

    //Função que é chamada a partir do MAIN que defini o cargo do usuário na área de assinatura
    function pegaCargo($indice){
       
       return Painel::$cargos[$indice];
      }
    
      //Pega o menu selecionado
      function selecionadoMenu($par){
         /* <i class="fa fa-angle-double-right" aria-hidden="true"></i>*/
          $url = explode('/',@$_GET['url'])[0];
          if($url == $par){
            echo 'class="menu-active"';
      }
    }

    //Sistema de permissão
    function verificaPermissaoMenu($permissao){
        if($_SESSION['cargo']>= $permissao ){ /*Checa se a permissão e maior que a permissão que precisa */
            echo '';
        }else{
            echo 'style="display:none"'; /**Oculta opção Adicionar usuário */
        }
    }

    //**Função sitema de permissão aplicada na página cadastrar usuário */
    function verificaPermissaoPagina($permissao){
      if($_SESSION['cargo']>= $permissao ){ /*Checa se a permissão e maior que a permissão que precisa */
        echo '';
        }else{
         include('painel/pages/permissao_negada.php');
         die(); /** Mata o script */
    }
}

    
?>