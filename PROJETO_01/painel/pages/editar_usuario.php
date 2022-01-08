<div class="box-content">
    <h2><i  class="fa fa-pencil"></i> Editar Usuário</h2>

    <?php 
       if(isset($_POST['acao'])){
           //Enviei o meu formulário
           //Painel::alert('sucesso','Cadastro atualizado com sucesso'); //Chama a classe Alerta incluso no painel
           $usuario = new Usuario(); //Instanciando classe usuário para alteração do usuário.
           $nome = $_POST['nome'];
           $senha = $_POST['password'];
           $imagem = $_FILES['imagem'];
           $imagem_atual = $_POST['imagem_atual'];
          
           //ALTERA IMAGEM DO USUÁRIO 
           if($imagem['name'] != ''){
                
                //Existe o UPLOAD de imagem. 
                if(Painel::imagemValida($imagem)){// Método estático
                    Painel::deleteFile($imagem_atual);//Deleta a imagem antiga.
                    $imagem = Painel::uploadFile($imagem);
                        if($usuario->atualizarUsuario($nome,$senha,$imagem)){
                            $_SESSION['img'] = $imagem; //ATUALIZA DINAMENTAMENTE A IMAGEM APÓS A LATERAÇÃO 
                            Painel::alert('sucesso','Cadastro atualizado com sucesso');
                        }else{
                            Painel::alert('ERRO','Ocorreu um erro ao atualizar ...');
                        }
                    }else{
                            Painel::alert('erro', 'O formato não é Válido');
                       }
                
           }else{
               //não selecionou e a imagem sera a imagem atual
               $imagem = $imagem_atual;
              
                    if($usuario->atualizarUsuario($nome,$senha,$imagem)){
                        Painel::alert('sucesso','Cadastro atualizado com sucesso');
                    }else{
                        Painel::alert('ERRO','Ocorreu um erro ao atualizar...');
                    }
  
                }
            }
    ?>

   <form method="post" enctype="multipart/form-data">
      
       <div class=form-grupo><!-- Formulário de edição do usuário -->
            <label>Nome:</label>
            <input type="text" name="nome" required value="<?php echo $_SESSION['nome'];?>">
       </div><!-- form-grupo -->

       <div class=form-grupo>
            <label>Senha:</label>
            <input type="password" name="password" required value="<?php echo $_SESSION['password'];?>">
       </div><!-- form-grupo -->

       <div class=form-grupo>
            <label>Imagem</label>
            <input type="file" name="imagem">
            <input type="hidden" name="imagem_atual" value="<?php echo $_SESSION['img']; ?>">
       </div><!-- form-grupo -->

       <div class=form-grupo>
            <input type="submit" name="acao" value="Atualizar">
       </div><!-- form-grupo -->


    </form><!-- Formulário de edição do usuário -->

</div><!-- box content -->

