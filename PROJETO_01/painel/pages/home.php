<?php 
    $usuariosOnline = Painel::listarUsuariosOnline();

    //Pega total de visitas 
    $pegaVisitasTotais = Mysql::conectar()->prepare("SELECT * FROM `tb_admin_visitas`");
    $pegaVisitasTotais->execute();
    $pegaVisitasTotais  = $pegaVisitasTotais->rowCount();

     //Pega total de visitas
     $pegaVisitasHoje = Mysql::conectar()->prepare("SELECT * FROM `tb_admin_visitas` WHERE dia=?");
     $pegaVisitasHoje->execute(array(date('Y-m-d')));
     $pegaVisitasHoje  = $pegaVisitasHoje->rowCount();
 
?>        
    <div class="box-content left w100">
       <h2><i class="fa fa-home"></i> Painel de Controle - <?php echo NOME_EMPRESA ?></h2>        
               
              <div class="box-metricas">  
                <div class="box-metrica-single"><!-- box-metrica-single -->
                    <div class="box-metrica-wrapper"><!-- box-metricas-wrapper -->
                        <h2>Usuários Online</h2>
                        <p><?php echo count($usuariosOnline); ?></p>
                    </div><!-- box-metricas-wrapper -->   
                </div><!-- box-metrica-single -->             
               
                <div class="box-metrica-single"><!-- box-metrica-single -->
                    <div class="box-metrica-wrapper"><!-- box-metricas-wrapper -->
                        <h2>Total de Visitas</h2>
                        <p><?php echo $pegaVisitasTotais?></p>
                    </div><!-- box-metricas-wrapper -->   
                </div><!-- box-metrica-single -->
                
                  <div class="box-metrica-single"><!-- box-metrica-single -->
                    <div class="box-metrica-wrapper"><!-- box-metricas-wrapper -->
                        <h2>Visitas de Hoje</h2>
                         <p><?php echo $pegaVisitasHoje?></p>
                    </div><!-- box-metricas-wrapper -->   
                   </div><!-- box-metrica-single -->
                </div><!-- box-metricas -->
    </div> <!-- box-content -->

  <div class="box-content w100"><!--Box-content-W100 -->
    <h2><i class="fa fa-rocket"></i> Usuários Online no Site</h2>  
        <div class="table-responsive"><!--table responsive -->
                <div class="row"><!-- row -->
                    <div class="col"><!-- col -->
                    <span>
                        IP
                    </span>
                    </div><!-- col -->

                    <div class="col"><!-- col -->
                    <span>
                        Ultima ação
                    </span>
                    </div><!-- col -->
                <div class="clear"></div> <!-- limpar espaçamentos -->
                </div><!-- row -->

                <?php 
                    foreach ($usuariosOnline as $key => $value){
                ?>
                <div class="row"><!-- row -->
                    <div class="col"><!-- col -->
                    <span>
                        <?php echo $value['ip'];?>
                    </span>
                    </div><!-- col -->

                    <div class="col"><!-- col -->
                    <span>
                    <?php echo date('d/m/Y H:i:s',strtotime($value['ultima_acao']));?>
                    </span>
        </div><!-- col -->
                </div><!-- row -->

             <?php } ?>

            <div class="clear"></div> <!-- limpar espaçamentos -->
        </div><!--table responsive -->
</div><!--Box-content-W100 -->

<!-- Bloco abaixo conta o número de usuários cadastrados no PAINEL DE USUÁRIOS DO SITE-->
<div class="box-content w100"><!--Box-content-W100 -->
    <h2><i class="fa fa-rocket"></i> Usuários do Painel</h2>  
        <div class="table-responsive"><!--table responsive -->
                <div class="row"><!-- row -->
                    <div class="col"><!-- col -->
                    <span>
                        Nome
                    </span>
                    </div><!-- col -->

                    <div class="col"><!-- col -->
                    <span>
                        Cargo
                    </span>
                    </div><!-- col -->
                <div class="clear"></div> <!-- limpar espaçamentos -->
                </div><!-- row -->

                <?php 
                    $usuariosPainel = Mysql::conectar()->prepare("SELECT * FROM `tb_adm_usuarios`");   
                    $usuariosPainel->execute();
                    $usuariosPainel = $usuariosPainel->fetchAll();
                    foreach ($usuariosPainel as $key => $value){
                ?>
                <div class="row"><!-- row -->
                    <div class="col"><!-- col -->
                    <span>
                        <?php echo $value['nome'];?>
                    </span>
                    </div><!-- col -->

                    <div class="col"><!-- col -->
                    <span>
                    <?php echo pegaCargo($value['cargo']);?>
                    </span>
        </div><!-- col -->
                </div><!-- row -->

             <?php } ?>

            <div class="clear"></div> <!-- limpar espaçamentos -->
        </div><!--table responsive -->
</div><!--Box-content-W100 -->