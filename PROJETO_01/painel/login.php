<!--Testa a existência do COOKIE -->

<?php
    if(isset($_COOKIE['lembrar'])){
        $user = $_COOKIE['user'];
        $password = $_COOKIE['password'];

        /**Testa existência dos dados  */
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_adm_usuarios` WHERE user =? AND password = ?");
        $sql->execute(array($user,$password));
        if($sql->rowCount()==1){
            $info = $sql->fetch();
            $_SESSION['login']= true;
            $_SESSION['user']=$user;
            $_SESSION['password']=$password;
            $_SESSION['nome'] = $info['nome'];/**Pega a coluna nome com base na var info */
            $_SESSION['cargo'] = $info['cargo']; /** Pega a coluna cargo com base na var info */
            $_SESSION['img']= $info['img'];/** Pega a imagem */
            header('Location: '.INCLUDE_PATH_PAINEL);
            die();
        }
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
    <title>login</title>
</head>
<body>    
    <div class="box-login"><!-- BOX-LOGIN -->
        <?php
            //$pdo = MySql::conectar();
            if(isset($_POST['acao'])){
                $user = $_POST['user'];
                $password = $_POST['password'];
                $sql = MySql::conectar()->prepare("SELECT * FROM `tb_adm_usuarios` WHERE user=? AND password=?");
                $sql->execute(array($user,$password));

                if($sql->rowCount()==1){
                    $info=$sql->fetch();/**Pega apenas uma coluna  */
                    //LOGADO
                    $_SESSION['login']= true;
                    $_SESSION['user']=$user;
                    $_SESSION['password']=$password;
                    $_SESSION['nome'] = $info['nome'];/**Pega a coluna nome com base na var info */
                    $_SESSION['cargo'] = $info['cargo']; /** Pega a coluna cargo com base na var info */
                    $_SESSION['img']= $info['img'];/** Pega a imagem */
                    /**Verifica caixa lembrar senha */
                    if(isset($_POST['lembrar'])){
                        setcookie('lembrar',true,time()+(60*60*24),'/');

                        //**Captura os campos  */
                        setcookie('user',$user,time()+(60*60*24),'/');
                        setcookie('password',$password,time()+(60*60*24),'/');
                    }
                    header('Location: '.INCLUDE_PATH_PAINEL);//Cai no painel, o PAINEL fara uma validação para verifdica se esta logado, caso esteja diretiona para página correta 
                    die(); //Considerando que o header é um script, precisamos matar a execução dele após concluir 
                }else{
                    //FALHOU
                    echo '<div  class="erro-box"><i class="fa fa-times"></i> Usuário não existente!</div>';
                }
            }
        ?>

      <h2>Efetue o login:</h2>
        <form method="post">
                <input type="text" name="user" placeholder="Login..." required>
                <input type="password" name="password" placeholder="Senha..." required>
                
                <!-- Lembrar login-->
                <div class="form-group-login left">
                    <input type="submit" name="acao" value="logar!">
                </div>

                <div class="form-group-login right">
                    <label>Lembrar-me</label>
                    <input type="checkbox" name="lembrar" />
                </div>
                <div class="clear"></div>
        </form>
    </div><!-- BOX-LOGIN -->
       
</body>
</html>