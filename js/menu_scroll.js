var $topMenu;
var menuClickNum;
var topScroll;
var scrollPosition=[1257,2000,2560,4042]


$(document).ready(function(){

$topMenu=$(".gnb li")

$topMenu.on("click",function(){

    menuClickNum=$topMenu.index($(this));

    $("body,html").stop();
	$("body,html").animate({"scroll-top":scrollPosition[menuClickNum]},500,"easeOutCubic")

})




})