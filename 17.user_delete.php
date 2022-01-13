<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";//在三秒內重新整理頁面
    }
    else{   
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="delete from user where id='{$_GET['id']}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){ //執行針對數據庫的查詢
            echo "使用者刪除錯誤";
        }else{
            echo "使用者刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
    }
?>