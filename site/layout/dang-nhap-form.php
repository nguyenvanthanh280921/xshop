<div class="list-group mt-20">
    <div class="list-group-item active">TÀI KHOẢN</div>
    <div class="list-group-item">
        <form action="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php" method="post">
            <div>
                <div>Tên đăng nhập</div>
                <input name="ma_kh" value="<?= $ma_kh ?>">
            </div>
            <div>
                <div>Mật khẩu</div>
                <input name="mat_khau" type="password" value="<?= $mat_khau ?>">
            </div>
            <div>
                <div>
                    <label>
                        <input name="ghi_nho" type="checkbox" checked>
                        Ghi nhớ tài khoản?
                    </label>
                </div>
            </div>
            <div>
                <button name="btn_login">Đăng nhập</button>
            </div>
            <div>
                <li><a href="<?= $SITE_URL ?>/tai-khoan/quen-mk.php">Quên mật khẩu</a></li>
                <li><a href="<?= $SITE_URL ?>/tai-khoan/dang-ky.php">Đăng ký thành viên</a></li>
            </div>
        </form>
    </div>
</div>