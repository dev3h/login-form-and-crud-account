<?php

$userName = addslashes(trim($_POST['userName']));
$displayName = addslashes(trim($_POST['displayName']));
$password = md5(addslashes(trim($_POST['password'])));
$role = $_POST['role'];
if ($userName != "" && $displayName != "" && $password != "" && $role != "") {
    try {
        require '../../connect.php';

        $sql = "INSERT INTO account(userName, displayName, password, role) 
        VALUES('$userName', '$displayName','$password', $role)";

        mysqli_query($connect, $sql);

        if (!mysqli_error($connect)) {
            header("location:index.php");
            exit;
        }
    } catch (Exception $e) {
        session_start();
        $_SESSION["error"] = "Lỗi: " . $e->getMessage();
        header("location:index.php");
    }
} else {
    session_start();
    $_SESSION["error"] = "Vui lòng nhập đầy đủ thông tin";
    header("location:index.php");
}

mysqli_close($connect);
