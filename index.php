<!DOCTYPE html>
<?php
function MobileCheck() {
	//mozilla/5.0 (windows nt 6.1; win64; x64) applewebkit/537.36 (khtml, like gecko) chrome/60.0.3112.113 safari/537.36
	$HTTP_USER_AGENT = strtolower($_SERVER['HTTP_USER_AGENT']);
	$os="Computer";
	$MobileArray  = array("lg","iphone","lgtelecom","skt","mobile","samsung","nokia","blackberry","android","android","sony","phone",
		 "LG","IPHONE","LGTELECOM","SKT","MOBILE","SAMSUNG","NOKIA","BLACKBERRY","ANDROID","ANDROID","SONY","PHONE");
	$Len = sizeof($MobileArray);
	for($i=0; $i < $Len; $i++){
    if (strpos($HTTP_USER_AGENT, $MobileArray[$i])) {
      $os= "Mobile";
    }
	} 
	return $os === "Mobile" ? TRUE :FALSE;   
}

?>


<?php
   if(MobileCheck()){ // 모바일일 경우  아래 실행
   
    include "../mdaeri/include/m_head.php";
}else{ // PC 일경우 아래 실행
  include "../mdaeri/include/head.php";
}
?>



  <body style="overflow-x:hidden">
 <?php
   if(MobileCheck()){ // 모바일일 경우  아래 실행
   
    include "../mdaeri/m/index_m.php";
}else{ // PC 일경우 아래 실행
  include "../mdaeri/pc/index_pc.php";
}

?>

</body>



  </html>