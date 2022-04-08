var $mdaeriAd;

$(document).ready(function(){

    $mdaeriAd=$(".playvideo");


    $mdaeriAd.on("click",function(){
        

    $("<div id='glayLayer'><iframe width='1024' height='640' src='https://www.youtube.com/embed/4xqyAfMd5RA' frameborder='0' allow='accelerometer; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>").prependTo($("body")) 


    $("#glayLayer").on("click",function(){
        $("#glayLayer").animate({"background":"rgba"+"(0,0,0,0"},300,"easeOutCubic", function(){
			$("#glayLayer").hide();
			})
    
        })

        })


   

})