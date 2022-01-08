
$(function(){

    $('body').on('submit','form',function(){
        var form = $(this);
                $.ajax({                  
                    /*Função executaa antes de enviar o formulário*/
                    beforeSend:function(){
                        $('.overlay-loading').fadeIn();
                    }, 
                    /**Função antes de enviar formulário */

                    url:INCLUDE_PATH+'ajax/formularios.php', //Destino para onde esta encaminhando a requisição
                    method:'post',
                    dataType:'json', //tipo de resposta do servidor - importa varíáveis.
                    data:form.serialize() //Carrega tudo que precisa do post para outra página 
                }).done(function(data){ //Varíaveis declaradas com json encode  
                    if(data.sucesso){
                        $('.overlay-loading').fadeOut();
                        $('.sucesso').fadeIn();
                        setTimeout(function(){
                            $('.sucesso').fadeOut();
                        },3000)
                }else{
                        $('.overlay-loading').fadeOut();
                }               
                    });
                  return false;                     
         })     
      })


