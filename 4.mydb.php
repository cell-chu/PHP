<?php
    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);
    //呼叫mysqli_fetch_array 直到所有資料被找完為止


    echo $row["id"] . " " . $row["pwd"]; 
    echo "<br>";
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"]; 


    //select搜尋找出 從user表格這之中找出所有欄位
    //* 所有的意思
    //root 預設帳號
?>
