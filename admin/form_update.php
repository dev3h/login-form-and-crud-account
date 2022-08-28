<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <?php include '../error.php' ?>
    <?php
    $userName = $_GET['username'];
    require '../connect.php';

    $sql = "SELECT * FROM account WHERE userName = '$userName'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);

    $sql1 = "SELECT * FROM account_type";
    $account_types = mysqli_query($connect, $sql1);
    ?>
    <div class="wrapper">
        <div class="card--base card--base-lg">
            <h1 lass="card__title">Form sửa</h1>
            <div class="form--base">
                <form action="./process_update.php" method="POST">
                    <div class="field">
                        <input type="hidden" name="userName" value="<?php echo $each["userName"] ?>">
                    </div>
                    <div class="field">
                        Tên hiển thị
                        <input type="text" placeholder="nhập tên hiển thị" name="displayName" value="<?php echo $each["displayName"] ?>">
                    </div>
                    <div class="field password-field">
                        Mật khẩu
                        <input type="password" id="password" placeholder="nhập mật khẩu" name="password">
                        <i class="bi bi-eye-slash-fill eye-close"></i>
                        <i class="bi bi-eye-fill eye-open hidden"></i>
                    </div>
                    <label for="">
                        Quyền
                        <div class="field">
                            <select name="role" class="form-select form-select-lg">
                                <?php foreach ($account_types as $account_type) { ?>
                                    <option value="<?php echo $account_type['id'] ?>" 
                                    <?php
                                        if ($account_type['id'] == $each['role']) { ?> selected <?php } 
                                        ?> >
                                        <?php echo $account_type['type'] ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </label>
                    <br>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-primary">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php mysqli_close($connect) ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="../assets/javascript/handleEyePassWord.js"></script>                                    
</body>

</html>