<?php
session_start();
if(!isset($_SESSION['userid']) && !isset($_SESSION['username'])){
  header('Location: ./login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
      <title>ログイン成功</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
  <div class="box">
      <?php echo "ようこそ" . $_SESSION['username'] ."さん"; ?>
         
        <div class="btn">
          <a href="./logout.php">ログアウト</a> 
        
        </div>

  </body>
</html>