var $slidePanel;
var $slideList;
var $slideImg;
var $txtPanel;
var $txtList;
var $txtBox;
var $leftButton;
var $rightButton;
var slideWidth;
var txtWidth;
var currentPosition;
var currentPosition2;

$(document).ready(function(){

    $slidePanel=$(".slide_panel");
    $slideList=$(".slide_slide");
    $slideImg=$slideList.children("li");
    $txtPanel=$(".howtouse_txt");
    $txtList=$(".howtouse_txt_slide");
    $txtBox=$txtList.children("li");
    $leftButton=$(".howtouse_slide").children('img').eq(0);
    $rightButton=$(".howtouse_slide").children('img').eq(1);


    slideWidth=$slideImg.innerWidth();
    $slideList.css({"width":slideWidth*$slideImg.size()});
    $slidePanel.css({"width":slideWidth});
    $slideList.children().last().prependTo($slideList);
    $slideList.css("left", -slideWidth);

    txtWidth=$txtBox.innerWidth();
    $txtList.css({"width":txtWidth*$txtBox.size()});
    $txtPanel.css({"width":txtWidth});
    $txtList.children().last().prependTo($txtList);
    $txtList.css("left", -txtWidth);



    
    $leftButton.on("click",function(){

        currentPosition=parseInt($slideList.css("left"));
        currentPosition2=parseInt($txtList.css("left"));


        $(".slide_slide:not(:animated)").animate({"left":currentPosition+slideWidth},500,function(){

            $slideList.children().last().prependTo($slideList); 
			$slideList.css("left",-slideWidth);
			

        })
        $(".howtouse_txt_slide:not(:animated)").animate({"opacity":0},250,function(){
        $(".howtouse_txt_slide:not(:animated)").animate({"opacity":currentPosition2+txtWidth},0,function(){

            $txtList.children().last().prependTo($txtList); 
			$txtList.css("left",-txtWidth);
			
            $(".howtouse_txt_slide:not(:animated)").animate({"opacity":1},250)
        })
    })
    })



    $rightButton.on("click",function(){

        currentPosition=parseInt($slideList.css("left"));
        currentPosition2=parseInt($txtList.css("left"));

        $(".slide_slide:not(:animated)").animate({"left":currentPosition-slideWidth},500,function(){

            $slideList.children().first().appendTo($slideList);
			$slideList.css("left",-slideWidth);
			

        })

        $(".howtouse_txt_slide:not(:animated)").animate({"opacity":0},250,function(){
            $(".howtouse_txt_slide:not(:animated)").animate({"left":currentPosition2-txtWidth},0,function(){

                $txtList.children().first().appendTo($txtList);
                $txtList.css("left",-txtWidth);
                
                $(".howtouse_txt_slide:not(:animated)").animate({"opacity":1},250)
            })
        }

        )
    })



})