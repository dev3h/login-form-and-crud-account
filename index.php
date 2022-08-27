<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
    <?php
    if (isset($_GET['error'])) { ?>
       <p style="color: red; position: absolute; "><?php echo $_GET['error'] ?></p>
    <?php } ?>
    <div class="wrapper">
        <div class="card--base">
            <h1>đăng nhập</h1>
            <div class="form--base login-form">
                <form action="./process_login.php" method="post">
                    <div class="field">
                        <input type="text" id="username" placeholder="nhập tên đăng nhập" name="username">
                    </div>
                    <div class="field password-field">
                        <input type="password" id="password" placeholder="nhập mật khẩu" name="password">
                        <i class="bi bi-eye-slash-fill eye-close"></i>
                        <i class="bi bi-eye-fill eye-open hidden"></i>
                    </div>
                    <br>
                    <button class="btn btn-outline-primary btn-login">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        const eyeClose = document.querySelector('.eye-close');
        const eyeOpen = document.querySelector('.eye-open');
        const inputPassword = document.querySelector('#password');
        const inputUserName = document.querySelector('#username');

        eyeClose.addEventListener('click', () => {
            eyeClose.classList.add('hidden');
            eyeOpen.classList.remove('hidden');
            inputPassword.type = 'text';

        })
        eyeOpen.addEventListener('click', () => {
            eyeOpen.classList.add('hidden');
            eyeClose.classList.remove('hidden');
            inputPassword.type = 'password';

        })
        window.addEventListener('load', () => {
            inputUserName.focus();
        })
    </script>
</body>

</html>