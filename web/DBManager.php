<?php
require_once "./db/DBLoginInfo.php";
require_once "./UserInfoTblDT.php";


class DBManager{

    private $myPDO;

    //接続のメソッド
    private function dbConnect(){
        try{
            $DBLI = new DBLoginInfo();
            $this->myPDO = new PDO('mysql:host=' . $DBLI->dbhost . ';dbname=' . $DBLI->dbname  . ';charset=utf8', $DBLI->user, $DBLI->password, array(PDO::ATTR_EMULATE_PREPARES => false));


        }catch(PDOException $e){
            print('データべース接続失敗'.$e->getMessage());
            throw $e;
        }
    }

    //切断のメソッド
    private function dbDisconnect(){
        unset($myPDO);
    }

    //ユーザー検索のメソッド
    public function getUserInfoTblByUserID($userid){
        try{
            //ｄｂに接続
            $this->dbConnect();
            //sql生成
            $stmt = $this->myPDO->prepare("
            SELECT * FROM slogintbl WHERE userid = :userid
            ");
            //ｐｈｐ変数からSQL変数へ変換
            $stmt->bindParam(':userid', $userid, PDO::PARAM_STR);
            //SQLを実行
            $stmt->execute();
            //結果を格納するLISTを作成
            $retList = array();
            //結果をLISTに格納する
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                //データ格納のクラスをnew
                $rowData = new UserInfoTblDT();
                //DBから取得したデータをカラム毎にクラスに挿入する
                $rowData->userid = $row['userid'];
                $rowData->pass = $row['pass'];
                $rowData->username = $row['username'];
                //取得した一件を配列に追加
                array_push($retList,$rowData);
            }
            //DB切断
            $this->dbDisconnect();
            //配列＄retListを返す
            return $retList;
        }catch(PDOException $e){
            //エラー処理
            print("検索に失敗" . $e->getMessage());
        }
    }

    public function insertUserInfo($userid,$pass,$username){
        try{
            //DB接続
            $this->dbConnect();
            $stmt = $this->myPDO->prepare("INSERT INTO slogintbl(userid,pass,username) VALUES (:userid, :pass, :user)");

            //php変数からSQL関数へ変換
            $stmt->bindParam(':userid', $userid, PDO::PARAM_STR);
            $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
            $stmt->bindParam(':user', $username, PDO::PARAM_STR);

            //SQL実行
             $stmt->execute();

             //DB切断
            $this->dbDisconnect();

        }catch(PDOException $e){
            //エラー処理
            print("挿入に失敗" . $e->getMessage());
        }
    }


    public function insertTODO($userid,$doday,$work){
        try{
            //DB接続
            $this->dbConnect();
            $stmt = $this->myPDO->prepare("sl")

        }
        
    }

    public function getTODOTblByDaySort($userid){

    }

    public function getExpireTODOTbl($userid,$today){

    }

    public function getCompToDo($userid,$todoid){

    }

    public function deleteTODOTbl($userid,$todoid){
        

    }

    public function updateTODOTbl($userid,$todoid,$doday,$work){

    }

}

?>