<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   header('Location: index.html');
}
require_once('function.php');



   $nickname = $_POST['nickname'];
   if ($nickname == '') {
      $nickname_result = 'ニックネームが入力されていません。';
  } else {
      $nickname_result = 'ようこそ、' . $nickname .'様';
  }
  echo h($nickname_result); 
   echo '<br>';
   
   $email = $_POST['email'];
   if ($email == '') {
      $email_result = 'メールアドレスが入力されていません。';
  } else {
      $email_result = 'メールアドレス：' . $email;
  }
  echo h($email_result);
   echo '<br>';

   $content = $_POST['content'];
   if ($content == '') {
      $content_result =  'お問い合わせ内容が入力されていません。';
  } else {
      $content_result = 'お問い合わせ内容：' . $content;
  }
  echo h($content_result);
   echo '<br>';
?>


<!DOCTYPE html>
<html lang="ja">
<head>
   <title>入力内容確認</title>
   <meta charset="utf-8">
</head>
<body>
   <h1>入力内容確認</h1>
 

   <form method="POST" action="thanks.php">
   <input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">
        <input type="button" value="戻る" onclick="history.back()">
        <?php if ($nickname != '' && $email != '' && $content != ''): ?>
        <input type="submit" value="OK">

        <?php endif; ?>


   

</form>
</body>
</html>