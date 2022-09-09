<?php

$userName = addslashes($_POST['userName']);
$displayName = addslashes($_POST['displayName']);
if($_POST['password'] == "" ) {
    session_start();
    $_SESSION["error"] = "Vui lòng nhập mật khẩu để sửa";
    header("location:index.php");
    exit;
} else {
    $password = md5(addslashes(trim($_POST['password'])));
}
$role = $_POST['role'];

if ($userName != "" && $displayName != "" && $password != "" && $role != "") {
    try {
        require '../../connect.php';
        $sql = "UPDATE account SET displayName='$displayName', role='$role' WHERE userName='$userName' AND password='$password'";
        mysqli_query($connect, $sql);
        if(!mysqli_error($connect)) {
             header("location:index.php");
        }
    } catch (Exception $e) {
        echo "Loi: " . $e->getMessage();
    }
} else {
    session_start();
    $_SESSION["error"] = "Vui lòng nhập đầy đủ thông tin";
    header("location:index.php");
}
mysqli_close($connect);
