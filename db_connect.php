<?php 

$servername = "localhost"; 
$username = "admin"; 
$password = "abc12345"; 
$dbname = "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); //檢查連線
if ($conn->connect_error) {
die("連線失敗: " . $conn->connect_error); }
else {
    echo "連線成功";
}
// $conn->close();
// 操作結束後關閉資料庫
?>