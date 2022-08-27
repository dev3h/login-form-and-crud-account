<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
</head>
<body>
    <h1>Form sửa</h1>
    <?php 
    $userName = $_GET['username'];
    require './connect.php';

    $sql = "SELECT * FROM account WHERE userName = '$userName'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);

    $sql1 = "SELECT * FROM account_type";
    $account_types = mysqli_query($connect,$sql1);
    ?>
    <form action="./process_update.php" method="POST">
        <label for="">
            <input type="hidden" name="userName" value="<?php echo $each["userName"]?>">
        </label>
        <br>
        <label for="">
            Tên hiển thị
            <input type="text" placeholder="nhập tên hiển thị" name="displayName" value="<?php echo $each["displayName"]?>">
        </label>
        <br>
        <label for="">
            Quyền
            <select name="role">
                <?php foreach ($account_types as $account_type) { ?>
                   <option value="<?php echo $account_type['id']?>" 
                   <?php
                   if($account_type['id'] == $each['role']) { ?>
                    selected
                     <?php } ?> 
                     ><?php echo $account_type['type']?></option>
                <?php } ?>     
            </select>
        </label>
        <br>
        <button>Sửa</button>
    </form>
    <?php mysqli_close($connect) ?>
</body>
</html>