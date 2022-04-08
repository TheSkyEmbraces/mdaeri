</div>


<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript" src='./FlexSlider/jquery.flexslider.js'></script>
<script type="text/javascript" src='/script/common.js'></script>
<script src="script/popup.js"></script>
<script type="text/javascript" src='script/sub.js'></script>
<script type="text/javascript" src='script/main.js'></script>
<script type="text/javascript" src="script/ticker.js"></script>
<script src="../script/jquery.cryxpad.js"></script> -->

<script>
var renewURL = location.href.replace(/\&page=([0-9]+)/ig, '');
var onlyURL = renewURL.split('/');


// console.log(popupPath);

if ( ! Array.prototype.some ) {
    Array.prototype.some = function(callBack) {
        for (var i = 0, len = this.length; i < len; i++) {
            if (callBack(this[i])) {
                return true;
            }
        }
        return false;
    };
}

function keys(obj) {
   var arr = [];
   for (var i in obj) {
      arr[arr.length] = i;
   }
   return arr;
}


// history.pushState(null, null, location.href);
history.pushState(null, null, window.location.pathname);
window.addEventListener('popstate', function (event) {
    
    
    var urlInfo = {
        "dashboard.php" : [
            "exchange.php",
            "dashboard.php",
            "mypage_standard.php",
            "mypage_standard02.php",
            "receive_mir.php",
            "reserve01.php"            
        ],

        'reserve02.php' : ['reserve02_check.php'],
        'reserve01.php' : ['reserve02.php'],
        'send_mir.php' : ['send_mir_check.php'],
        'send_pay.php' : ['send_pay_check.php'],
        'receive_mir.php' : ['send_mir.php', 'send_pay.php']

    };

    var cache = null;
    var isHash = false;
    for (var i = 0, key = keys(urlInfo), len = key.length; i < len; i++) {
        if (urlInfo[key[i]].length > 1) {

            cache = urlInfo[key[i]].some(function(i){
                return i === onlyURL[3];
            });

            if (cache) {
                if ( ! location.hash ) {
                    cache = key[i];
                    isHash = true;
                    break;
                }
            }
        } else {

            if (urlInfo[key[i]][0] === onlyURL[3]) {
                if ( ! location.hash ) {
                    isHash = true;
                    cache = key[i];
                    break;
                }
            }
        }
    }

    if ($("#" + popupPath.popUpIdM + "").length || $("#" + popupPath.popUpId + "").length || $("#" + popupPath.popUp3 + "").length) {
        removeBack($("#" + popupPath.popUpIdM + ""));
        removeBack($("#" + popupPath.popUpId + ""));
        removeBack($("#" + popupPath.popUp3 + ""));
        removeBack($("#back"));
        return false;
        
    }

    if ($('#side-menu').attr('data-isOpen') === 'true') {
        closeSlideMenu();

        return false;
        
    } else {
        if (cache) {
            location.replace(cache);
        } else {
            history.go(-2);
        }
        // if (cac)
        return false;
    }
    return false;
}, false);



</script>

