<?php
include_once ('./m_head.php');
?>
<!-- <img src="../mdaeli/some.png" alt=""> -->
<style>
body{
    font-size:0;
    margin:0;
    padding:0;
    background:#000;
}
html,body {
    width: 100%;
    height: 100%;
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;
}
    .txt {
        /* display: none; */
        position: absolute;
        left: -999px
    }

    .footer {
        display: none;
        text-align: center;
        background: #fbcf2f;
        padding: 1rem;
        word-break: keep-all;

    }

    .downBox {
        position: absolute;
        font-size: 0;
        width: 100%;
        height: 100%;
    }

    .downBox a {
        display: inline-block;
        /* background:red; */
        width: 50%;
        height: 100%;
    }
</style>
<img src="images/onetouch.png" alt="" style="width:100%">

<div style="position:relative;">
    <!-- <a href="https://app.gachita.co.kr/launch.php" target="_blank" class="mb1">
testtesttesttesttesttesttesttesttesttesttest
</a> -->

    <div class="downBox">


        <?php
    if( strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false ){
    ?>
        <a href="intent://uhan#Intent;scheme=drivecall;package=kr.app.drivem.chauffeur;end" class="a1">

            <p class="txt">안드로이드 사용자는 구글 플레이에서 다운받으세요</p>
        </a>

        <a href="#void" class="a2">

            <!-- <a href="javascript:alert('asd')">asd</a> -->

            <p class="txt">아이폰 사용자는 앱스토어에서 다운받으세요</p>
        </a>


        <script>
            $('.a2').on('click', function () {
                alert('아이폰에서 다운받으세요');
            });
        </script>
  
        <?php
    } else if( strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== false){
  ?>
        <a href="#void" class="a1">
            <p class="txt">안드로이드 사용자는 구글 플레이에서 다운받으세요</p>
        </a>

        <script>
            $('.a1').on('click', function () {
                alert('안드로이드에서 다운받으세요');
            });
        </script>

  

        <a href="https://apps.apple.com/kr/app/m%EB%8C%80%EB%A6%AC%EC%9A%B4%EC%A0%84/id1478592439">
            <p class="txt">아이폰 사용자는 애플 앱스토어에서 다운받으세요</p>
        </a>

        <?php
    }
    ?>




    </div>
    <img src="images/event02.png" alt="" style="width:100%">

</div>


<!-- <a href="https://play.google.com/store/apps/"> -->















<div class="footer">


    <p>회사명 : <?=$valueArray['mDaeli']['company'];?> ｜ 대표자 : <?=$valueArray['mDaeli']['owner'];?></p>
    <p>주소 : <?=$valueArray['mDaeli']['companyAddress'];?></p>
    <p>사업자등록번호 : <?=$valueArray['mDaeli']['companyNumber'];?></p>
    <p><?=$valueArray['mDaeli']['copy'];?></p>
</div>
<?php
include_once ('./footer.php');
?>