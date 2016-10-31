<?php
session_start();
require_once './DBManager.php';
class UserManager{
    public function logincheck($userid,$pass){
        $dbm = new DBManager();
        $result = $dbm->getUserInfoTblByUserID($userid);
        if(isset($result)){
            $checkPass = $this->passwordCheck($pass,$result[0]->pass);
            
            if($checkPass == true){
                $_SESSION['userid'] = $result[0]->userid;
                $_SESSION['username'] = $result[0]->username;
                header('Location: ./index.php');

            }else{
                header('Location: ./login.php');

            }

            exit();

        }else{
            header('Location: ./login.php');
            exit();
        }
    }

    public function registUser($userid,$pass,$username){
        $dbm = new DBManager();
        $result = $dbm->getUserInfoTblByUserID($userid);
        if(empty($result)){
            $inPass = $this->passwordHash($pass);
            $dbm->insertUserInfo($userid,$inPass,$username);
            $_SESSION['userid'] = $userid;
            $_SESSION['username'] = $username;
            //index.phpにリダイレクト（移動）
            header('Location: ./ok.php');
            //終了
            exit();
        }else{
            //.phpにリダイレクト（移動）
            header('Location: ./no.php');
            //終了
            exit();

        }

    }
    public function passwordCheck($inPass,$hashPass){
        $pass = password_verify($inPass, $hashPass);

        return $pass;
    }
    public function passwordHash($inPass){
        $pass = password_hash($inPass, PASSWORD_DEFAULT);

        return $pass;

    }
}

?>