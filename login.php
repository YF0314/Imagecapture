<?php
//送信されてきた値の検証のコードを適当に書いてください。ここでは画像キャプチャの値の検証以外省きます。
if($_SESSION['image'] === $_POST['captcha']){
//認証OK
}else{
//認証失敗。おこだよぷんぷん。
}
