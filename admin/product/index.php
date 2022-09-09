<?php
session_start();
if (empty($_SESSION['username'])) {
    header('location: ./index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <?php include '../header.php' ?>
    <main class="d-flex justify-content-between gap-4 p-5">
        <?php include '../sideBar.php' ?>
        <div class="flex-fill border">
    <?php include '../error.php' ?>
    <h1 class="text-center">Quản lý sản phẩm</h1>
    <?php
    require '../../connect.php';
    $sql = "SELECT * FROM products";
    $result = mysqli_query($connect, $sql);
    ?>
    <div class="d-flex justify-content-end m-3">
        <a class="btn btn-primary" href="../product/form_insert.php">Thêm</a>
    </div>
    <table class="table table-bordered table-hover table-responsive">
        <thead class="table-dark">
            <tr>
                <th>id</th>
                <th>Tên sản phẩm</th>
                <th>Ngày tạo</th>
                <th>ảnh</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $each) { ?>
                <tr>
                    <td><?php echo $each['id'] ?></td>
                    <td><?php echo $each['name'] ?></td>
                    <td><?php echo $each['create_at'] ?></td>
                    <td>
                        <img src="<?php echo $each['photo'] ?>" alt="" height=200>
                    </td>
                    <td>
                        <a href="./form_update.php?id=<?php echo $each['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                    </td>
                    <td>
                        <a href="./delete.php?id=<?php echo $each['id'] ?>"><i class="bi bi-trash3-fill"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php mysqli_close($connect) ?>
</div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
