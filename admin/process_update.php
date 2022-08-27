<?php

$userName = $_POST['userName'];
$displayName = $_POST['displayName'];
$role = $_POST['role'];

require './connect.php';

$sql = "UPDATE account SET displayName='$displayName', role='$role' WHERE userName='$userName'";

mysqli_query($connect, $sql);

mysqli_close($connect);