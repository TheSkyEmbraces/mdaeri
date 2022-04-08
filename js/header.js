var $header;
var headerScroll;


$(document).ready(function(){

    $header=$('header');




    $(document).on("scroll",function(){

        headerScroll=$(document).scrollTop();

        $header.css({"position":"fixed","background-color":"rgba(254,222,66,1)"});


        if(headerScroll<=0){
            $header.css({"position":"absolute","background-color":"rgba(254,222,66,0)"});
        }

    })


})