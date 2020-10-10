<!DOCTYPE html>
<html>
<body>
<h3>ĐỔI MẬT KHẨU</h3>
<?php
if(strlen($MESSAGE)){
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="doi-mk.php" method="post">
    <div class="form-group">
        <label for="exampleInputPassword1"> Tên đăng nhập</label>
        <input type="text" name="ma_kh"  class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mật khẩu cũ</label>
        <input type="password" name="mat_khau"  class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mật khẩu mới</label>
        <input type="password" name="mat_khau2"  class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Xác nhận mật khẩu mới</label>
        <input type="password" name="mat_khau3"  class="form-control" >
    </div>
    <div>
        <button class="btn btn-primary" name="btn_change">Đổi mật khẩu</button>
    </div>
</form>
</body>
</html>

