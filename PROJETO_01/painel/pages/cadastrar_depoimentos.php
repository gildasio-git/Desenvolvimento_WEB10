
<?php
 // Verifica permissão na página
 //verificaPermissaoPagina(2);

?>

<div class="box-content">
    <h2><i  class="fa fa-pencil"></i> Adicionar Depoimentos</h2>

    <?php 
       if(isset($_POST['acao'])){
        if(Painel::insert($_POST)){ /**Chama o método cliado em CLASSES */
           Painel::alert('sucesso','O cadastro do depoimento foi realizado com sucesso!');
       }else{
           Painel::alert('erro','Ocorreu um erro ao cadastrar');
       }
    }
    ?>

   <form method="post" enctype="multipart/form-data">

        <div class=form-grupo><!-- Formulário de edição do usuário -->
            <label>Nome da pessoal:</label>
            <input type="text" name="nome"  >
       </div><!-- form-grupo -->
      
       <div class=form-grupo><!-- Formulário de edição do usuário -->
            <label>Depoimento:</label>
            <textarea name="depoimento">
            
            </textarea>
       </div><!-- form-grupo -->

      

       <div class=form-grupo>
            <input type="hidden" name="nome_tabela" value="tb_site.depoimentos" /> <!-- leva o nome da tabela oculto-->
            <input type="submit" name="acao" value="Cadastrar">
       </div><!-- form-grupo -->


    </form><!-- Formulário de edição do usuário -->

</div><!-- box content -->

