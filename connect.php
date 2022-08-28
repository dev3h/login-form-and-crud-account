<?php

try {
    $connect = mysqli_connect('localhost', 'root', '', 'login');
    mysqli_set_charset($connect, 'utf8');
} catch (Exception $e) {
    session_start();
    $ERR = $e->getMessage();
    $_SESSION['error'] = $ERR;
    
    header("location:index.php");
}
