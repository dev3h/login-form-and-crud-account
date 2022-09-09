<header class="d-flex justify-content-between bg-info p-3">
    <div class="bg-success flex-fill">
         <h4>Xin chào <?php echo $_SESSION['displayName'] ?></h4>
    </div>
    <div class="d-flex flex-fill justify-content-end gap-3  bg-warning">
        <div>
            <a href="./manager.php">Trang chủ</a>
        </div>
        <div>
            <a href="./logout.php">Đăng xuất</a>
        </div>
    </div>
</header>