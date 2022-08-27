<?php 

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if($username != "" && $password != "") {
    try {
        require './connect.php';

        $sql = "SELECT COUNT(*) FROM account WHERE userName = '$username' AND passWord = '$password' AND role = 1";

        $result = mysqli_query($connect,$sql);
        $each = mysqli_fetch_array($result);
        if($each[0] == 1){
            session_start();
            $_SESSION["username"] = $username;
            header("location:/baitapform/admin/");
        } else {
            header("location:index.php");
        }
    } catch (Exception $e) {
        echo "Loi: " . $e->getMessage();
    }
} else {
    header("location:index.php?error=phải nhập đầy đủ thông tin");
}



mysqli_close($connect);

