<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <?php include '../error.php' ?>
    <?php
    $id = $_GET['id'];
    require '../../connect.php';

    $sql = "SELECT * FROM products WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);

    ?>
    <div class="wrapper">
        <div class="card--base card--base-lg">
            <h1 lass="card__title">Form sửa</h1>
            <div class="form--base">
                <form action="./process_update.php" method="POST">
                    <div class="field">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                    </div>
                    <div class="field">
                        Tên sản phẩm
                        <input type="text" placeholder="nhập tên sản phẩm" name="name" value="<?php echo $each["name"] ?>">
                    </div>
                    <div class="field">
                       ảnh
                        <input type="text" placeholder="nhập đường link ảnh" name="photo" value="<?php echo $each["photo"] ?>">
                    </div>
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