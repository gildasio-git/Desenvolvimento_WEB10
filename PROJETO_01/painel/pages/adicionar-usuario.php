
<?php
 // Verifica permissão na página
 verificaPermissaoPagina(2);

?>

<div class="box-content">
    <h2><i  class="fa fa-pencil"></i> Adicionar Usuário</h2>

    <?php 
       if(isset($_POST['acao'])){
       }
    ?>

   <form method="post" enctype="multipart/form-data">

        <div class=form-grupo><!-- Formulário de edição do usuário -->
            <label>Login:</label>
            <input type="text" name="login" required >
       </div><!-- form-grupo -->
      
       <div class=form-grupo><!-- Formulário de edição do usuário -->
            <label>Nome:</label>
            <input type="text" name="nome" required >
       </div><!-- form-grupo -->

       <div class=form-grupo>
            <label>Senha:</label>
            <input type="password" name="password" required >
       </div><!-- form-grupo -->

       <div class=form-grupo>
            <label>Imagem</label>
            <input type="file" name="imagem" required>
       </div><!-- form-grupo -->

       <div class=form-grupo>
            <input type="submit" name="acao" value="Cadastrar">
       </div><!-- form-grupo -->


    </form><!-- Formulário de edição do usuário -->

</div><!-- box content -->

