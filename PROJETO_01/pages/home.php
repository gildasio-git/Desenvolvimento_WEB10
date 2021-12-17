 <!-- Banner Background (PRINCIPAL-->
 <section class="banner-container">
    <div style="background-image:url('<?php echo INCLUDE_PATH; ?>imagens/bg-camisa.png');" class="banner-single"></div><!--banner Single -->
    <div style="background-image:url('<?php echo INCLUDE_PATH; ?>imagens/caneca.png');"  class="banner-single"></div><!--banner Single -->
    <div style="background-image:url('<?php echo INCLUDE_PATH; ?>imagens/copoaluminio.png');" class="banner-single"></div><!--banner Single -->

     <div class ="overlay"></div><!-- Overley -- Inlcui efeito overley sobre imagem -->
      <!-- Formulário -->  
      <div class="center"> 
        
        <form method="post"><!-- action vazio porque direciona para mesma pagina -->
            <h2>Qual o seu melhor e-mail </h2>
            <input type="email" name="email" require />
            <input type="hidden" name="identificador" value="form_home"> <!-- envia campo oculto -->
            <input type="submit" name="acao" value="Cadastrar"/>
        </form> <!-- Fim do Formulário -->
      </div> <!-- Fim div class center Formulário -->
     
    <div class="bullets">
        
    </div><!-- bullets -->
    </section><!--Fim Banner Background (CONTAINER)-->
    <!-- ******************************************************* -->

    <!-- Sessão Descrição autor -->
    <section class="descricao-autor"> <!-- Divs identificação do autor -->     
        <div class="center">
        <div class="w50 left"><!-- w-50  50% da largura da tela browser -->
               <h2>MIMOS STORIES</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but 
                    also the leap into electronic typesetting, remaining essentially
                    unchanged. It was popularised in the 1960s with the release of 
                    Letraset sheets containing Lorem Ipsum passages, and more recently 
                    with desktop publishing software like Aldus PageMaker including versions 
                    of Lorem Ipsum. </p>
            
                <p>Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown 
                    printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but 
                    also the leap into electronic typesetting, remaining essentially
                    unchanged. It was popularised in the 1960s with the release of 
                    Letraset sheets containing Lorem Ipsum passages, and more recently 
                    with desktop publishing software like Aldus PageMaker including versions 
                    of Lorem Ipsum.</p>
              
         </div> <!-- Fim DIV identifcação do autor -->
           

            <!-- DIV imagem do autor -->
                <div class="w50 left"><!-- w-50  50% imagem do Autor -->
                    <img class="right" src="<?php echo INCLUDE_PATH; ?>imagens/MIMOS.png"/>
                    </div><!-- --w50 -->
                <div class="clear"></div>
             <!-- Fim DIV imagem do Autor -->
             </div> <!--Finaliza a Div class center que encapsula a seção de identificação  do autor -->       
        </section><!-- Fim das DIVs identificação do autor -->
    <!--Fim Sesção Identificação do  Autor -->

    <!-- ******************************************************************-->

    <!-- Sessão Especialidades -->
    <section class="especialidades">
            <div class="center"> <!-- div center para trabalhar com DESIGNER responsivo -->
              <h2 class="title">Especialidades</h2>
                <div class="w33 left box-especialidade"><!-- box Expecialidade -->
                      <h3><i class="fa fa-css3" aria-hidden="true"></i></h3><!-- inclui icone CSS3 conforme linhas inclusas do FONTAWESOME -->
</h3>
                      <h4>CSS3</h4>
                      <p>
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when 
                                looking at its layout. The point of using Lorem Ipsum
                                is that it has a more-or-less normal distribution 
                                sites still in their infancy. Various versions have evolved over
                                the years, sometimes by accident, sometimes on purpose (injected
                                humour and the like).
                            </p>
                        </div> <!-- Especialidade 1 -->

                        <div class="w33 left box-especialidade"><!-- box Expecialidade -->
                            <h3><i class="fa fa-gg-circle" aria-hidden="true"></i></h3><!-- inclui icone JAVASCRIPT conforme linhas inclusas do FONTAWESOME -->
</h3>
                            <h4>JAVA SRIPT</h4>
                            <p>
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when 
                                looking at its layout. The point of using Lorem Ipsum
                                is that it has a more-or-less normal distribution 
                                sites still in their infancy. Various versions have evolved over
                                the years, sometimes by accident, sometimes on purpose (injected
                                humour and the like).
                            </p>
                        </div> <!-- especialidade 2 -->
                        

                        <div class="w33 left box-especialidade"><!-- box Expecialidade -->
                           <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
</h3> <!-- inclui icone HTML 5 conforme linhas inclusas do FONTAWESOME -->
                            <h4>HTML5</h4>
                            <p>
                                It is a long established fact that a reader will be
                                distracted by the readable content of a page when 
                                looking at its layout. The point of using Lorem Ipsum
                                is that it has a more-or-less normal distribution 
                                sites still in their infancy. Various versions have evolved over
                                the years, sometimes by accident, sometimes on purpose (injected
                                humour and the like).
                            </p>
                        </div> <!-- Fim box especialidadeS -->
                        <div class="clear">
                        
            </div>
    </section> <!-- Fim sessão especialidades -->

    <!-- ************************************************************************ -->

    <section class="extras"><!-- Inicio Seção extras -->
        <div class="center"><!-- Inicio Center -->
            <div id="depoimentos" class="w50 left depoimentos-container">
            <h2 class="title">Depoimentos dos nossos clientes</h2>
                <div class="depoimento-single"><!-- Depoimento single -->
                    <p class="depoimento-descricao">
                    "It is a long established fact that a reader will be
                    distracted by the readable content of a page when 
                    looking at its layout. The point of using Lorem Ipsum
                    s that it has a more-or-less normal distribution 
                    sites still in their infancy. Various versions have evolved over
                    the years, sometimes by accident, sometimes on purpose (injected
                    humour and the like)."
                    </p>

                    <p class="nome-autor">Lorem ipsun</p>
                </div><!--Depoimento Single -->

                <div class="depoimento-single"><!-- Depoimento single -->
                    <p class="depoimento-descricao">
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when 
                    looking at its layout. The point of using Lorem Ipsum
                    s that it has a more-or-less normal distribution 
                    sites still in their infancy. Various versions have evolved over
                    the years, sometimes by accident, sometimes on purpose (injected
                    humour and the like).
                    </p>

                    <p class="nome-autor">Lorem ipsun</p>
                </div><!--Depoimento Single -->

                <div class="depoimento-single"><!-- Depoimento single -->
                    <p class="depoimento-descricao">
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when 
                    looking at its layout. The point of using Lorem Ipsum
                    s that it has a more-or-less normal distribution 
                    sites still in their infancy. Various versions have evolved over
                    the years, sometimes by accident, sometimes on purpose (injected
                    humour and the like).
                    </p>

                    <p class="nome-autor">Lorem ipsun</p>
                </div><!--Depoimento Single -->
            </div> <!-- w-50 -->
            
            <div id="servicos" class="w50 left servicos-container">
              <h2 class="title">Serviços</h2><!-- Inicio Serviços -->
                 <div class="servicos">
                   <ul>
                    <li> It is a long established fact that a reader will be
                    distracted by the readable content of a page when 
                    looking at its layout. The point of using Lorem Ipsum
                    s that it has a more-or-less normal distribution </li>

                    <li> It is a long established fact that a reader will be
                    distracted by the readable content of a page when 
                    looking at its layout. The point of using Lorem Ipsum
                    s that it has a more-or-less normal distribution </li>

                    <li> It is a long established fact that a reader will be
                    distracted by the readable content of a page when 
                    looking at its layout. The point of using Lorem Ipsum
                    s that it has a more-or-less normal distribution </li>
                </ul>

               </div> <!-- Fim Serviços -->
            </div> <!-- w-50 -->
            <div class="clear"></div>
        </div><!-- center -->
    </section><!-- Fim Extras -->
<!--- ******************************************************************-->

