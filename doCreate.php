<?php 
if(!isset($_POST["titles"]) || ! isset($_POST["password"])){
    echo "請通過正常管道來到此頁 Error087: M T F !";
    exit;
}
require_once("db_connect.php");
$titles =$_POST["titles"];
$comment =$_POST["comment"];
// $password =$_POST["password"];古早加密法:$password =md5($_POST["password"]);知道就好不建議使用



// if(empty($account)){
//     echo "請輸入帳號";
//     // header("location: form.php");
//     exit;
// }
// if(empty($password)){
//     echo "請輸入密碼";
//     // header("location: form.php");
//     exit;
// }
// echo "account is  $account , password is $password.";
date_default_timezone_set("Asia/Taipei"); 
$now=date('Y-m-d H:i:s');
// $sql="INSERT INTO users(name, create_time) VALUES('Tom', '$now')"

$sql="INSERT INTO comments (titles, comment,  create_time, valid)
VALUES ('$titles', '$comment' ,'$now',1)";
// echo $sql;
if ($conn->query($sql) === TRUE) { 
    echo "新資料輸入成功<br> ";
    //以下為取得最新資料ID的方法
    // $last_id = $conn->insert_id;
    // echo"ID為$last_id";
    //以上為取得最新資料ID的方法


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
// 操作結束後關閉資料庫
// header("location: create-user.php");
?>
