<?php
require_once "image.php";
list ($image,$_SESSION['image']) = image();
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>さむしんぐふぉーむ</title>
</head>
<form action="login.php" method="post">
    <label>メールアドレス</label>
    <input type="email" name="email">
    <label>パスワード</label>
    <input type="password" name="password">
    <label for="exampleInputEmail1">Captcha</label>
    <img width="220px" height="100px" src="<?php echo $image; ?>" />
    <input type="text" class="form-control" name="captcha" placeholder="Enter Captcha">
    <small id="captcha" class="form-text text-muted">Are you human?</small>
  <button type="submit" name="login_submit">送信</button>
</form>
</html>
