$(function(){

    /**FUNÇÃO PARA FECHAR O MENU SIDEBAR */

    var open = true; /**por padrão menu sempre aberto */
    var windowSize = $(window)[0].innerWidth; /*Indice[0] permite trab. funções nativas do java script, caso nã tivesse apenas funções do JQUERY */
   
    //condição if em linha que esta a dimensão da jenela do navegador.
    //e aplica uma resolução.
    var targetSizeMenu = (windowSize <= 400 ) ? 200 : 300;


    if(windowSize <=768){
        $('.menu').css('width','0').css('padding','0');
        open = false;
    }

    $('.menu-btn').click(function(){/**Função se o menu for clicado */
        if(open){
          //O menu esta aberto, precisamos fechar e adaptar nosso conteúdo geral do painel 
          $('.menu').animate({'width':0,'padding':0},function(){
              open = false;
          }); //Remove o padding de 10px assim o menu lateral n
          $('.content,header').css('width','100%');//Adequa a classe CONTENT e o HEADER em 100% de largura 
          $('.content,header').animate({'left':0},function(){
                open = false;
          }); //Aplica a animação deixando o  LEFT ->HEADER/CONTENT em 0
        
        }else{
            //O menu esta fechado 
            $('.menu').css('display','block');
            $('.menu').animate({'width':targetSizeMenu+'px','padding':'10px'},function(){
                open = true;
            }); //Remove o padding de 10px assim o menu lateral n
            //$('.content,header').css('width','calc(100% -300px)');//Adequa a classe CONTENT e o HEADER em 100% de largura 
            $('.content,header').animate({'left':targetSizeMenu+'px'},function(){
                  open = true;
            });
        }
    })

})


/*

//Evento abaixo executado quando o usuário redimencionar a janela do navegador
$(window).resize(function(){
    windowSize = $(window)[0].innerWidth;
    if(windowSize  <= 768){
        $('.menu').css('width','0').css('padding','0');
        $('.content,header').css('width','100%').css('left','0');
        open = false;
    }else{
        open = true;
        $('.content,header').css('width','calc(100% - 250px)').css('left','250px');
        $('.menu').css('width','250px)').css('padding','10px 0');
    }

  })
*/

