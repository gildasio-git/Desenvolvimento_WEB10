<?php
/**
 * 
 * SESSÕES: É quando armazenamos valor em uma varíavel SESSÃO e mesmo que o usuário feche 
 * a aba do navegador , quado voltar novamente ao site, essa variável ainda estará armazenada.
 * sendo somente destruida no momento que o usuiário fecha o navegador.
 */

 /**
  * 
  * COOKIES: É quando cria-se uma variável e setar quando tempo quer que fique armazenada no
  * computador da pessoa, ou seja mesmo que o usuário feche o navegador ainda estará armazanada.
  * e podemos definir o tempo que será expirada.
  */

  //Declarando SESSÕES
  session_start(); //primeira linha obrigatório quando vamos trabalhar com SESSÕES
  $_SESSION['nome'] = 'Gildasio'; //Definino uma sessão 

?>