<?php
require_once './UserManager.php';

if(isset($_POST['userid'])&& isset($_POST['pass'])){
     $um = new UserManager();
    $um->logincheck($_POST['userid'],$_POST['pass']);
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="box">
    <form action="logincheck.php" method="post">
        <table>
            <tr>
                <td>ユーザーID：</td>
                <td><input type="text" name="userid"></td>
            </tr>
            <tr>
                <td>パスワード：</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
    <input class="btn" type="submit" value="ログイン">
    </form>
    </div>
</body>

</html>