<?php
session_start();
if (isset($_SESSION['error'])) { ?>
    <p style="color: red; position: absolute; "><?php echo $_SESSION['error'] ?></p>
<?php
    unset($_SESSION['error']);
}
?>