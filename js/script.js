jQuery(document).ready(function($) {
 //no puedo usar $ en wordpress no me lo permite 
 //por eso lo tengo que implementar de otra forma


var flag = true

$(window).scroll(function(){
    var scrollTop = $(window).scrollTop()

   
    
    if(scrollTop >980){

        var valor = -((scrollTop - 400 ) * 0.1)

        if(valor > -74 && flag){
            $('.historia').css('margin-top', valor + 'px')

            flag = false
           
        }

        

        
     
    }
    
   
})
 /*
 $('.javascript').hover(function () { 
          $("body").css({'background-color' : 'yellow', "transition" : "all 0.5s ease-out"})
 },function(){
    $("body").css({'background-color' : 'white', "transition" : "all 0.5s ease-out"})

 });

 $('.jquery').hover(function () { 
    $("body").css({'background-color' : '#2e66bf', "transition" : "all 0.5s ease-out"})
},function(){
$("body").css({'background-color' : 'white', "transition" : "all 0.5s ease-out"})

});

$('.node').hover(function () { 
    $("body").css({'background-color' : '#3aba2f', "transition" : "all 0.5s ease-out"})
},function(){
$("body").css({'background-color' : 'white', "transition" : "all 0.5s ease-out"})

});

$('.wordpress').hover(function () { 
    $("body").css({'background-color' : 'black', "transition" : "all 0.5s ease-out"})
},function(){
$("body").css({'background-color' : 'white', "transition" : "all 0.5s ease-out"})

});
*/
  })