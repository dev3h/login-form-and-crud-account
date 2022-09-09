<?php

$id = $_POST['id'];
$name =$_POST['name'];
$photo = $_POST['photo'];

if ($name != "" && $photo != "" ) {
    try {
        require '../../connect.php';
        $sql = "UPDATE products SET name='$name', photo='$photo' WHERE id='$id'";
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
