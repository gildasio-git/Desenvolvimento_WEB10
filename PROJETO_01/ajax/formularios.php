<?php 
//Formulário chamado via POST.

//AJAX - nada mais é que uma recquisição em java script que enviamos para algum arquivo 
//no caso para o PHP e podemos enviar um POST junto e ai o arquivo retorna se houve sucesso ou erro

include('../config.php');
$data = array();

$assunto = 'Nova mesnagem do site!';
$corpo = '';
foreach ($_POST as $key => $value) {
    $corpo.=ucfirst($key). ": ".$value;
    $corpo.="<hr>";
}

$info = array('assunto'=>$assunto,'corpo'=>$corpo);
$mail = new Email('mail.mimosariquemes.host','neide@mimosariquemes.host','Senha123','neide');
$mail->addAdress('contato@mimosariquemes.host','neide');
$mail->formatarEmail($info);

if($mail->enviarEmail()){
                $data['sucesso'] = 'true';
            }else{
                $data['erro'] = 'true';
                }

//$data['retorno'] = 'sucesso';
die(json_encode($data)); //json_encode Permite que nosso array retorne um formato que o java script possa entender

?>

