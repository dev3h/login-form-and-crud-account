<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <?php include '../error.php' ?>
    <?php
    require '../connect.php';

    $sql = "SELECT * FROM account_type";
    $result = mysqli_query($connect, $sql);
    ?>
    <div class="wrapper">
        <div class="card--base card--base-lg">
            <h1 class="card__title">Thêm</h1>
            <div class="form--base">
                <form action="./process_insert.php" method="POST">
                    <div class="field">
                        <input type="text" placeholder="nhập tên đăng nhập" name="userName">
                    </div>
                    <div class="field">
                        <input type="text" placeholder="nhập tên hiển thị" name="displayName">
                    </div>
                    <div class="field password-field">
                        <input type="password" id="password" placeholder="nhập mật khẩu" name="password">
                        <i class="bi bi-eye-slash-fill eye-close"></i>
                        <i class="bi bi-eye-fill eye-open hidden"></i>
                    </div>
                    <div class="field">
                        <select name="role" class="form-select form-select-lg">
                            <?php foreach ($result as $each) { ?>
                                <option value="<?php echo $each['id'] ?>"><?php echo $each['type'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <br>
                    <div class="d-flex justify-content-end"><button class="btn btn-primary">Thêm</button></div>
                </form>
            </div>
        </div>
    </div>
    <?php mysqli_close($connect) ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="../assets/javascript/handleEyePassWord.js"></script>
</body>

</html>