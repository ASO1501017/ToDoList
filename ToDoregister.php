<?php/*

if(!isset($_SESSION['userid']) && !isset($_SESSION['username'])){
}
*/?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
      <title>ToDo登録画面</title>
    <link rel="stylesheet" href="./style.css">
</head>
    <body>
        <div class="box2">
        <div class="right"> 
        <a href="./ToDoList.php" class="btn3">通常表示</a>
        </div>
            <h3>ToDo登録</h3>
            <table>
               
                <tr>
                    <td class="bluekasen"><a5>内容</a5><input type="text" style="border-style:none;" ></td>
                    
                </tr>

                <tr>
                    <td class="bluekasen"><a5>期限</a5><input type="text" style="border-style:none;" ></td>
                </tr>
                
                <tr>
                     <td colspan="2">
                     <div class="center">
                        <br>
                        <br>
                        <br>
                        <br>
                        
                        
                        <a href="#" class="btn4">登録</a>
                    </div>
                    </td>
                </tr>
        </table>
        </div>
   </body>
</html>