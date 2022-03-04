<?php
require_once("./db_connect.php");

$id = $_GET["id"];

$sql="UPDATE comments SET valid=0 where id=$id";

if($conn->query($sql) === TRUE) {
    echo "刪除成功";
} else {
    echo "刪除失敗". $conn->error;
}
header("location: ./comment-list.php");

?>