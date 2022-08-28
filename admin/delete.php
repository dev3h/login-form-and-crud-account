<?php
session_start();
$userNameLogin = $_SESSION["username"];
$userName = $_GET['username'];

require '../connect.php';

if($userNameLogin != $userName){
    $sql = "DELETE FROM account WHERE userName = '$userName'";
    mysqli_query($connect, $sql);
    mysqli_close($connect);
    header("location:index.php");
    exit;
} else {
    echo 'Bạn đang login bằng tài khoản này, không thể xóa tài khoản này';
}
