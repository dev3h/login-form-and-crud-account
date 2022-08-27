<?php

try {
    $connect = mysqli_connect('localhost', 'root', '', 'login');
    mysqli_set_charset($connect, 'utf8');
} catch (Exception $e) {
    $error = $e->getMessage();
    header("location:index.php?error=$error");
}
