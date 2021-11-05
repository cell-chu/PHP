<?php
    session_start(); //必須放在最上方,用於告知系統要使用此語法紀錄
    if (!isset($_SESSION["counter"])) //isset判斷變數 檢查變數是否設置
        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=reset_counter.php>重置counter</a>";

    //session跟cookie的比較:
    //Session：儲存於伺服器端，不用擔心用戶禁用session的問題，但計錄檔案的負荷由伺服器承擔。
    //Cookie：儲存於用戶端，可能有用戶端禁用cookie，但伺服器不需承擔計錄檔案的負荷。
?>