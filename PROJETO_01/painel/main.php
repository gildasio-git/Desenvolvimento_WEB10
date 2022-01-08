<?php 
    if(isset($_GET['loggout'])){
        painel::loggout();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>/css/style.css">
    <title>PAINEL DE CONTROLE</title>
</head>
<body> 

<div class="menu"><!-- menu -->
<div class="menu-wraper"></div>
    <div class="box-usuario"><!-- box usuario -->
        
    <!-- Php para inclusao da imagem -->
            <?php
                if($_SESSION['img'] == ''){
            ?>

            <div class="avatar-usuario"><!-- usuário -->
                <i class="fa fa-user"></i><!-- icone do usuário -->
            </div><!-- avatar usuário -->
            
            <?PHP } else { ?>
                <div class="imagem-usuario"><!-- usuário -->
                <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img'];?>" alt=""><!-- icone do usuário -->
                </div><!-- avatar usuário -->
            <?php }?>
            <!-- fim cloco php avatar usuário -->


            <div class="nome-usuario"><!-- nome usuário -->
                <p><?php echo $_SESSION['nome']; ?></p>
                <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
            </div> <!-- nome usuário -->
    </div><!-- box usuário -->

<!-- itens do menu -->
 <div class="items-menu"> <!-- Itens Menu -->
        <h2>Cadastro</h2>        
            <a <?php selecionadoMenu('cadastrar-depoimento');?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar_depoimentos">Cadastrar Depoimentos</a>
            <a <?php selecionadoMenu('cadastrar-servico');?> href="">Cadastro Serviços</a>
            <a <?php selecionadoMenu('cadastrar-slides');?> href="">Cadastrar Slides</a>
         <h2>Gestão</h2>
            <a <?php selecionadoMenu('listar-depoimento');?> href="">Listar Depoimentos</a>
            <a <?php selecionadoMenu('listar-depoimento');?> href="">Listar Serviços</a>  
            <a <?php selecionadoMenu('listar-depoimento');?> href="">Listar Slides</a>  
        <h2>Administração do Painel</h2>
            <a <?php selecionadoMenu('editar-usuario-depoimento');?> href="<?php echo INCLUDE_PATH_PAINEL?>editar_usuario">Editar Usuário</a>
            <a <?php selecionadoMenu('adicionar-usuario');?> <?php verificaPermissaoMenu(2);?> href="<?php echo INCLUDE_PATH_PAINEL?>adicionar-usuario">Adicionar Usuários</a>    
        <h2>Configuração Geral</h2> 
            <a <?php selecionadoMenu('editar-site');?> href="">Editar Site</a> 
 </div> <!-- Itens Configuração Geral-->

 </div><!-- wraper -->
</div><!--menu -->

    <header>
        <div class="center"><!-- center -->
             <div class="menu-btn"><!-- menu-btn -->
                <i class="fa fa-bars"></i>
             </div><!-- menu-btn-->

             <div class="loggout"><!-- Logout -->
                    <!-- Altera estilo do painel quando estivers na HOME do painel -->
                    <a <?php if(@$_GET['url']== ''){ ?> style="background:#60727a; padding:15px 15px;" <?php }  ?> href="<?php echo INCLUDE_PATH_PAINEL ?>?"><i class="fa fa-home"></i><span> Página Inicial </span></a>      
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa fa-window-close"></i><span></span></a>
             </div><!-- logout -->
            <div class="clear"></div> <!-- usado logo a pós usar o float -->
        </div><!--center -->
    </header>

    <!--Conteúdo Direito do painel -->
    <div class="content"><!-- Content -->

         <?php Painel::carregarPagina();?>

     </div><!-- box content -->
    <!--
        <div class="box-content left w100">
            
        </div>

        <div class="box-content left w50">
            
        </div>

        <div class="box-content right w50">
            
        </div>
      -->
        <div class="clear"></div> <!-- usado logo a pós usar o float -->
    </div><!-- Content -->
      <div class="clear"></div> <!-- usado logo a pós usar o float -->
    <!-- Fim conteúdo direito do painel -->     
    
    
    <!-- INCLUSÃO DO JAVA SCRIPT-->
    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script> <!-- inlcui a biblioteca JQUERY -->
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script><!-- inlcui a função inlcusa no arquivo main.js dentro de painel/js -->
</body>
</html>
