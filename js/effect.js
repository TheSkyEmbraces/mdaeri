var $model;
var $fisrtTit;
var $secondTit;
var $store;
var $whyImg;
var $whytxt;

$(document).ready(function(){

    $model=$(".first_inner>img");
    $firstTit=$(".first_show");
    $secondTit=$(".first_txtbox p span:last-child");
    $store=$(".store");
    $whyImg=$(".why_img img");
    $whytxt=$(".why_txt");
    
    $model.animate({"right":0,"opacity":1},1000,"easeOutCirc");
    $firstTit.animate({"opacity":1},500,"easeOutCubic",function(){
        $secondTit.animate({"opacity":1},500,"easeOutCubic",function(){
            $store.animate({"opacity":1},500,"easeOutCubic");
        });
    });
     $whyImg.animate({"left":0,"opacity":1},1000,"easeOutCubic");
    $whytxt.animate({"opacity":1},500)
   

})