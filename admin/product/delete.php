<?php
$id = $_GET['id'];

try {
    require '../../connect.php';

    $sql = "DELETE FROM products WHERE id = '$id'";
    mysqli_query($connect, $sql);
    header("location:index.php");
    exit;
    
} catch (Exception $e) {
    session_start();
    $_SESSION["error"] = "Lỗi: " . $e->getMessage();
    header("location:index.php");
}
mysqli_close($connect);

