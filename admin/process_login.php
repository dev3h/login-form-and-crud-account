<?php 

$username = addslashes(trim($_POST['username']));
$password = md5(addslashes(trim($_POST['password'])));

if($username != "" && $password != "") {
    try {
        require '../connect.php';

        $sql = "SELECT * FROM account WHERE userName = '$username' AND passWord = '$password' AND role = 1";

        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) === 1){
            $each = mysqli_fetch_array($result);
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["displayName"] = $each['displayName'];
            header("location:./account/");
        } else {
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

