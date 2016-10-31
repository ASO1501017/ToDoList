<?php
require_once './UserManager.php';

if(isset($_POST['userid']) && isset($_POST['password']) && isset($_POST['username'])){
    $um = new UserManager();
    $um->registUser($_POST['userid'],$_POST['password'],$_POST['username']);
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="box">
    <form action="register.php" method="post">
        <table>
            <tr>
                <td>ユーザーID：</td>
                <td><input type="text" name="userid"></td>
            </tr>
            <tr>
                <td>パスワード：</td>
                <td><input type="password" name="password"></td>
            </tr>
             <tr>
                <td>名前：</style></td>
                <td><input type="text" name="username"></td>
            </tr>
        </table>
    <input class="btn" type="submit" value="登録">
    </form>
    </div>
</body>

</html>
