var effectScroll;
var $serviceTit;
var $serviceBackVideo;
var $serviceFrontVideo;
var $point;
var $specialPoint;
var $videoList1;
var $videoList2;



$(document).ready(function(){

   
    $serviceTit=$(".service_info");
    $serviceBackVideo=$(".playvideo");
    $serviceFrontVideo=$(".ad_exp");
    $point=$(".point_info");
    $specialPoint=$(".point_info2_img");
    $videoList1=$(".seventh_inner").children("ul").eq(0);
    $videoList2=$(".seventh_inner").children("ul").eq(1);



    $(document).on("scroll",function(){

        effectScroll=$(document).scrollTop();
        
        if(effectScroll>=800){
           
            $serviceTit.animate({"opacity":1},1000,"easeOutCubic")

            $serviceBackVideo.animate({"opacity":1},300,"easeOutCubic",function(){
                $serviceFrontVideo.animate({"right":0+"%","opacity":1},1000,"easeOutExpo");
            })
        }

        if(effectScroll>=1300){

            $point.children().eq(0).animate({"top":0},800,"easeOutCirc",function(){
                $point.children().eq(1).animate({"top":0},800,"easeOutCirc",function(){
                    $point.children().eq(2).animate({"top":0},800,"easeOutCirc")

                })
            })

        }

        if(effectScroll>=2100){

            $specialPoint.animate({"opacity":1},1000,)

        }

        if(effectScroll>=3600){

            $videoList1.children().eq(0).animate({"opacity":1,"top":0},300,"easeOutCirc",function(){
                $videoList1.children().eq(1).animate({"opacity":1,"top":0},300,"easeOutCirc",function(){
                    $videoList1.children().eq(2).animate({"opacity":1,"top":0},300,"easeOutCirc",function(){
                       
                            setTimeout(function(){

                                $videoList2.children().eq(0).animate({"opacity":1,"top":0},300,"easeOutCirc",function(){
                                    $videoList2.children().eq(1).animate({"opacity":1,"top":0},300,"easeOutCirc",function(){
                                        $videoList2.children().eq(2).animate({"opacity":1,"top":0},300,"easeOutCirc",function(){
                        
                                        })
                                    })
                                })

                            },300)

                    })
                })
            })

        }

    })
})