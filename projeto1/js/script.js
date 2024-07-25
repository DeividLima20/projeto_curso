$(()=>{
   $('nav.mobile').click(()=>{
    var icone = $('.botao-menu-mobile').find('i');
        if($('nav.mobile ul').is(':visible') == false){
            
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            $('nav.mobile ul').slideToggle();
        }else{
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            $('nav.mobile ul').slideToggle();
        }
   })

   if($('target').length > 0){
    var elemento = '#'+$('target').attr('target');
    var divScroll = $(elemento).offset().top;
    $('html,body').animate({'scrollTop':divScroll},1000);
   }

   carregarDinamico();
   function carregarDinamico(){
    $('[realtime]').click(()=>{
        var pagina = $(this).attr('realtime');
        $('.container-principal').load('/Back-end/PHP%20PROJETO/projeto1/pages/'+pagina+'.php');
        return false;
    })
   }
   
})