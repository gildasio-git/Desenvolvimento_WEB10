<!-- INCLUSÃO DO ARQUIVO CONFIG.PHP-->
<?php include('config.php');?>
<?php Site::updateUsuarioOnline();?>
<?php Site::contador();?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<!-- inclusão do icone -->
<link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicom.ico" type="image/x-icon">

<!-- Linha de inclusão dos icones/fontawesome 
     link Donwload pacote: <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
-->
<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">

<!-- Linha abaixo importa font personalizadada "OPENS SANS" do GOOGLE FONTS (incluir antes do estilo) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 

<!-- Linha de inclusão da fonte "OPENS SANS BOLS 700" do GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet"> 

<!--Inclusão do arquivo CSS - folhas de estilo (note que pucha o caminho do site da constante no aruqivo "config.php"-->
<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css"><!--Inlcusão do arquivo CSS folha de estilo -->

<meta charset="UTF-8"><!--Corrigir acentuação -->
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Designer responsível-->
<meta name="keywords" content=""><!--Palavras,chaves, do meu, site (Google)-->
<meta name="description" content="Descrição do meu WEBSITE"><!-- Descrição do site (google)-->
<title>PROJETO 01</title>
</head>

<body>

  <!-- Incluindo o atributo base que servira para inclusão das páginas dinamicamente da função 
  carregarDinamico() -->
    <base base="<?php echo INCLUDE_PATH; ?>" />

            <?php 
                $url = isset($_GET['url']) ? $_GET['url'] : 'home' ;//Condição que verifica a URL passada se não existir incluir página home
                    switch ($url) {
                        case 'depoimentos':
                            //Tag própria TARGET.
                            echo '<target target="depoimentos"/>';
                            break;

                        case 'servicos':
                            echo '<target target="servicos"/>';
                            break;
                }

            ?>

    <!-- Bloco mensagem de sucesso no envio do formulário via AJAX-->
    <div class="sucesso">
        Formulário enviado com sucesso!
    </div>

    <!-- Bloco carrega ajax_loader(gif) -->
    <div class="overlay-loading"><!-- Overlay-loading (fonte:http://ajaxload.info)-->
        <img src="<?php INCLUDE_PATH; ?>imagens/ajax-loader.gif"/>
    </div><!-- overlay-loading -->

    <header>
        <div class="center"><!-- menu -->
                <div class="logo left"><a href="/">Logomarca</div><!-- DIV logo -->
                <nav class="desktop right">
                    <ul>    
                        <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                        <li><a  realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                    </ul>
                </nav>

                <!-- Mobile-->
                <nav class="mobile right">
                    
                     <div class="botao-menu-mobile"><!-- Botão mobile -->
                         <i class="fa fa-bars" aria-hidden="true"></i>
                     </div><!-- bota~mobile -->

                    <ul>    
                        <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                        <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                    </ul>
                </nav>
                <div class="clear"><!--clear -->
            </div><!-- center -->
    </header>  <!-- Fim menu -->

   
    <!--Techo abaixo (conteudo do body) movido para página Home.php 
    e no espaço inserido script de validação das páginas -->

    <!-- (script PHP)  Validação/Manipulação das páginas -->
    <div class="container-principal"><!-- container para carregar a página dinamicamente -->
    <?php
        //Testa a existência do arquivo 
        if(file_exists('pages/'.$url.'.php')){
            include('pages/' .$url.'.php');

        }else{
            //Podemos fazer o que quizer pois a página não existe, inclusive coloca ruma  página de erro
            if($url != 'depoimentos' && $url != 'servicos' ){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }
    ?><!-- Fim script validação das páginas -->

    </div><!-- container principal -->

 <!-- Footer -->
 <!-- Verificar se esta carregando a página de erro, caso sim, posicionar o rodapé da página conforme tamanho da tela -->
 <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
    <div class="center"><!--center -->
        <p>Todos os direitos reservados</p>
    </div><!--Fim center-->
 </footer>


 
<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script><!-- INCLUSÃO DA BIBLIOTECA JQUERY-->
<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script><!-- Incluindo arquivo JavaScript externo-->
<script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>

<!--  Incluido script sistema de SLIDERS de imagens
      porém antes de apresentar o SLIDER de imagens , faz uma validação
      de qual página esta 
-->
<?php 
    if($url == 'contato'){
?>
<script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
<?php } ?>

<!-- script google earch -->
<!-- Validação carregar API google earch somente se estiver na página de contato-->
<?php 
    if($url == 'contato'){
?>

 <?php } ?>

 <!-- Inlcui script para animação dos BOXES especialidades da home  -->
<script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script> 

<!-- apontando o script pra atualização dos formulários em tempo real -->
<script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>
</html>