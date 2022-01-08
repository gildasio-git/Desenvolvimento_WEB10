
<?php
 // Verifica permissão na página
 verificaPermissaoPagina(2);

?>

<div class="box-content">
    <h2><i  class="fa fa-pencil"></i> Adicionar Usuário</h2>

    <?php 
       if(isset($_POST['acao'])){
           //Enviei o meu formulário
           //Painel::alert('sucesso','Cadastro atualizado com sucesso'); //Chama a classe Alerta incluso no painel
           $usuario = new Usuario(); //Instanciando classe usuário para alteração do usuário.
           $login = $_POST['login'];
           $nome = $_POST['nome'];
           $senha = $_POST['password'];
           $cargo = $_POST['cargo'];
           $imagem = $_FILES['imagem'];

           if($login ==''){
                Painel::alert('erro','O campo login esta vázio');
           }else if($nome == ''){
                Painel::alert('erro','O campo nome esta em vázio');
           }else if($senha == ''){
                Painel::alert('erro','O campo senha esta vázio');
           }else if($cargo == ''){
                Painel::alert('erro','O campo cargo precisa estar selecionado');
           }else if($imagem['name']==''){
                Painel::alert('erro','Precisa selecionar uma imagem');
           }else{
                
                if($cargo < $_SESSION['cargo']){
                Painel::alert('erro', 'Você presisa selecionar um cargo melhor que o seu');
                
               }else if(Painel::imagemValida($imagem)==false){
                Painel::alert('erro','O formato da imagem não é permitido!');
                
               }else if(Usuario::userExists($login)){
                    Painel::alert('erro','O login ja existe');

               }else{
                    //Cadastra usuário
                    $usuario = new Usuario();
                    $imagem = Painel::uploadFile($imagem);
                    $usuario::cadastrarUsuario($login,$nome,$senha,$cargo,$imagem);
                    Painel::alert('sucesso','O cadastro do usuário '.$login.' foi feito com sucesso!');


               }
           }
                  
       }
    ?>

   <form method="post" enctype="multipart/form-data">

        <div class=form-grupo><!-- Formulário de edição do usuário -->
            <label>Login:</label>
            <input type="text" name="login"  >
       </div><!-- form-grupo -->
      
       <div class=form-grupo><!-- Formulário de edição do usuário -->
            <label>Nome:</label>
            <input type="text" name="nome"  >
       </div><!-- form-grupo -->

       <div class=form-grupo>
            <label>Senha:</label>
            <input type="password" name="password"  >
       </div><!-- form-grupo -->


       <div class=form-grupo>
               <label>Cargo:</label>
               <select name="cargo">
                    <?php
                         foreach (Painel::$cargos as $key => $value) {
                         /** Valida administrador para criação de cartos abaixo apenas do ADM */
                             if($key >= $_SESSION['cargo'])echo '<option value="'.$key.'">'.$value.'</option>';
                         }
                    ?>
               </select>


       </div><!-- form-grupo -->


       <div class=form-grupo>
            <label>Imagem</label>
            <input type="file" name="imagem" >
       </div><!-- form-grupo -->

       <div class=form-grupo>
            <input type="submit" name="acao" value="Cadastrar">
       </div><!-- form-grupo -->


    </form><!-- Formulário de edição do usuário -->

</div><!-- box content -->

