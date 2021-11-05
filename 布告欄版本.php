<?php

//將user改為bulletin 只需變動from的部分

    #mysqli_connect() 建立資料庫連結
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from bulletin");
    #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
    $row=mysqli_fetch_array($result);
    //呼叫mysqli_fetch_array 直到所有資料被找完為止


    echo $row["bid"] . " " . $row["type"]. " " .$row["title"]." ".$row["content"]." ".$row["time"]; 
    echo "<br>";
    echo $row["bid"] . " " . $row["type"]. " " .$row["title"]." ".$row["content"]." ".$row["time"]; 
    echo "<br>";
    echo $row["bid"] . " " . $row["type"]. " " .$row["title"]." ".$row["content"]." ".$row["time"]; 
    echo "<br>";
    echo $row["bid"] . " " . $row["type"]. " " .$row["title"]." ".$row["content"]." ".$row["time"]; 
    echo "<br>";
    echo $row["bid"] . " " . $row["type"]. " " .$row["title"]." ".$row["content"]." ".$row["time"]; 
    echo "<br>";
    
    //$row=mysqli_fetch_array($result);
    //echo $row["id"] . " " . $row["pwd"]; 


    
?>