$(function(){

    var curSlide = 0; //Current Slider

    var maxSlide = $('.banner-single').length - 1;
    
    var delay = 3; //Tempo de espera transição entre sliders

    initSlider();
    changeSlide();

    function initSlider(){
        $('.banner-single').hide();
        $('.banner-single').eq(0).show();

        /*Inclemento dos bullets de navegação*/
        for(var i=0; i< maxSlide+1; i++){
            var content = $('.bullets').html(); //.html pega todo  conteudo do HTML dentro da class identificada
            
            if(i==0)
                content+='<span class="active-slider"></span>';
                    else
                    content+='<span></span>';
            $('.bullets').html(content);//aqui o parâmetro CONTENT será substituído o conteúdo 

        }
    }

    function changeSlide(){
         setInterval(function(){
             $('.banner-single').eq(curSlide).fadeOut(2000);
             curSlide++;
             if(curSlide > maxSlide)
                curSlide = 0;
                $('.banner-single').eq(curSlide).fadeIn(2000);
              //Trocar bullets da navegação do slider  
              $('.bullets span').removeClass('active-slider');
              $('.bullets span ').eq(curSlide).addClass('active-slider');
         },delay * 1000);
    }

    //Navegação 
    $('body').on('click','.bullets span',function(){
        var CurrentBullet = $(this); //THIST -> faz referência ao objeto que foi clicado

        //Alterando o slider de acordo com a bullet clicada 
        $('.banner-single').eq(curSlide).stop().fadeOut(2000);
        curSlide = CurrentBullet.index();
        $('.banner-single').eq(curSlide).stop().fadeIn(2000);

        $('.bullets span').removeClass('active-slider');
        CurrentBullet.addClass('active-slider');
    })
})
