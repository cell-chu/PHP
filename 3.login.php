<?php 
//讓login.html能呼叫.php
//是用post傳這邊就使用post 兩邊要一樣
if (($_POST["id"] == "luo") && ($_POST["pwd"]=="123456"))
    //如果輸入了正確的帳號密碼
        echo "Welcome back";
        //印出上方英文
    else
        echo "fail login";

//下方為初始 會印出輸入的帳號及密碼       
//echo $_POST["id"];
//echo "<br>";
//echo $_POST["pwd"];
?>

