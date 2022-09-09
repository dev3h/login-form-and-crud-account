<?php

$name = $_POST['name'];
$photo = $_POST['photo'];
if($name != "" && $photo != "") {
    try {
        require '../../connect.php';

        $sql = "INSERT INTO products(name, photo) 
        VALUES('$name', '$photo')";

        mysqli_query($connect, $sql);

        if(!mysqli_error($connect)) {
            header("location:index.php");
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