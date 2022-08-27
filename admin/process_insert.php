<?php

$userName = trim($_POST['userName']);
$displayName = trim($_POST['displayName']);
$role = $_POST['role'];
if($userName != "" && $displayName != "" && $role != "") {
    try {
        require '../connect.php';

        $sql = "INSERT INTO account(userName, displayName, role) VALUES('$userName', '$displayName', $role)";

        mysqli_query($connect, $sql);
    } catch (Exception $e) {
        echo "Loi: " . $e->getMessage();
    }
} else {
    header("location:index.php?error=phải nhập đầy đủ thông tin");
}

mysqli_close($connect);