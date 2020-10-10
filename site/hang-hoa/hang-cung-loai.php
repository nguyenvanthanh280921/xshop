<!DOCTYPE html>
<html>
<body>
<div class="panel panel-default list-group mt-20">
    <div class="panel-heading list-group-item active"">HÀNG CÙNG LOẠI</div>
    <div class="panel-body list-group-item">
        <ul>
            <?php
            $hh_cung_loai = hang_hoa_select_by_loai($ma_loai);
            foreach ($hh_cung_loai as $hh) {
                echo "<li><a href='chi-tiet.php?ma_hh=$hh[ma_hh]'>$hh[ten_hh]</a></li>";
            }
            ?>
        </ul>
    </div>
</div>
</body>
</html>

