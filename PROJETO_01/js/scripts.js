$(function(){
     //Toodo código JAVASCRIPT
     $('nav.mobile').click(function(){
         //Oque vai acontecer quando clicarmos na nav.mobile
             var listaMenu = $('nav.mobile ul');
    //        if(listaMenu.is(':hidden')== true)//Verficia se a lista esta oculta, caso esteja apareça
    //            listaMenu.fadeIn(); //Abrir menu através do FADEIN
    //            else
    //                listaMenu.fadeOut(); //caso contrário fica oculto

    //Abrir sem efeito 
             if(listaMenu.is(':hidden')== true){
                var icone = $('.botao-menu-mobile').find('i');
                icone.removeClass('fa-bars');
                icone.addClass('fa-times');
                listaMenu.slideToggle(); // Usando apenas uma linha com slideToggle
             }
                else{
                var icone = $('.botao-menu-mobile').find('i');
                icone.removeClass('fa-times');
                icone.addClass('fa-bars');    
                listaMenu.slideToggle();
        }

    //<i class="far fa-times-circle"></i>
    //fa fa-bars

     });


     /** SISTEMA DE ROLAGEM DE PÁGINAS  */
     if($('target').length > 0){
        //O elemento existe, portando precisamos dar o SCROOL EM ALGUM ELEMENTO 
        //attr-> para pegar o atribubo
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({scrollTop:divScroll},2000);
     }

     /** Função para navegação sem atualizar*/
     carregarDinamico();
     function carregarDinamico(){
            $('[realtime]').click(function(){
                var pagina=$(this).attr('realtime');
                $('.container-principal').hide();
                $('.container-principal').load(INCLUDE_PATH+'pages/'+pagina+'.php');

                //Carrega o googlempas dinamicamente na página de contato               
                setTimeout(function(){
                initialize();
                addMarker(-9.923870,-63.041510,'',"Minha Casa",undefined,true);
                },1000);
    
                $('.container-principal').fadeIn(1000);

                return false;
            })
     }

})
