
<head>
    <link rel="stylesheet" href="../../content/css/bootstrap.min.css">
</head>

<h3>LIÊN HỆ</h3>
<?php
if(strlen($MESSAGE)){
    echo "<h5>$MESSAGE</h5>";
}
?>
<form action="dang-ky.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleInputPassword1"> Họ và tên </label>
        <input type="text" name="ho_ten"  class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Địa chỉ email</label>
        <input type="text" name="email"  class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Số Điện Thoại</label>
        <input type="text" name="sdt"  class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"> Hình</label>
        <input type="file" name="up_hinh" class="form-control" >
    </div>
    <!--Giá trị mặc định-->
    <input name="vai_tro" value="0" type="hidden">
    <input name="kich_hoat" value="0" type="hidden">
</form>

