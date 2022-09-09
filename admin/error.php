<?php
if (isset($_SESSION['error'])) { ?>
    <div class="alert alert-danger position-absolute"><?php echo $_SESSION['error'] ?></div>
<?php
    unset($_SESSION['error']);
}
?>