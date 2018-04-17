window.onload = function () {
  // sepExpressoes();
  $( "#tabs" ).css({display:'block'});
    
}




$(document).ready(function () {
    
    //alert('Jquery');
    
    $('.debug-var-dump').css({display:'none !important' });

    $('#tabs').css({display:'block', border:'0.5px solid #fff'});
    $( "#tabs" ).tabs();
    
  
   /* Módulo 5 - Tratamento  de Erros 
    * --------------------------------------------------------*/
   // 01-tipos-de-validacao.php
   
   $('#pwd').css({'display':''});
   $('[id="md6-01-submit"]').click(function(){
      // alert('wagenr');
       
   });

   
   /* Módulo 7 - Welpres
    * --------------------------------------------------------*/
   // 01-manipulação-e-validação.php
   
    var limitWord = $('.limitWord').text();
   // var limitWord = $('.limitWord').attr();
    var string    = $('.xdebug-var-dump small').text();
   // alert(string.length);
});



function sepExpressoes() {
    var idade = 6, sexo = "masculino", nac = "brasileiro";
    var x = (idade >= 18) ? "Maior de Idade" : sexo;
    alert(x);
}