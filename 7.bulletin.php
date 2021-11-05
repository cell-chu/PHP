<?php
    error_reporting(0);
    //隱藏錯誤提示
    //如果參數未指定，當前報錯級別將被返回
    $conn=mysqli_connect("localhost","root","", "mydb");
    $result=mysqli_query($conn, "select * from bulletin");
    //做成一個表格 讓版面比較好看
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    //while迴圈
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    echo "</table>"
?>
