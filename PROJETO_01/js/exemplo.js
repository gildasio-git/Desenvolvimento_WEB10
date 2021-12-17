//Função para animação do BOX-ESPECIALIDADE 
$(function(){

    var atual = -1;
    var maximo = $('.box-especialidade').lenght -1; //Retorna quantos elementos box-especialidades poussui
    var timer;
    var animacaoDelay = 3;

    executarAnimacao();
    function executarAnimacao(){
        $('.box-especialidade').hide();
        timer = setInterval(logicaAnimacao,animacaoDelay*1000);

            function logicaAnimacao(){
                atual++;
                if(atual > maximo){
                    clearInterval(timer); //Pausa o LOOP
                    return false;
                }

                $('.box-especialidade').eq(atual).fadeIn();
        }

    }
})