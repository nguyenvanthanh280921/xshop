
<div class="box mt-20">
    <div class="thumbnail card mb-3">
        <div class="row  col-12 col-md-12">
            <div class="cls-img col-7 col-md-7 col-sm-7" >
                <img style="width: 100%;height: auto"  src='<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>' />
            </div>
            <div class="cls-info col-5 col-md-5" style="padding-top: 20%;">
                <ul>
                    <li>MÃ HÀNG HÓA: <?=$ma_hh?></li>
                    <li>TÊN HÀNG HÓA: <?=$ten_hh?></li>
                    <li>ĐƠN GIÁ: <?=number_format($don_gia, 2)?></li>
                    <li>GIẢM GIÁ: <?=$giam_gia * 100 ?>%</li>
                </ul>
            </div>
        </div>
        <div class="row caption col-12">
            <div class="col-12"><?= $mo_ta ?></div>
        </div>
    </div>
    <?php require 'binh-luan.php';?>
    <?php require 'hang-cung-loai.php';?>
</div>

<!--<div class="card mb-3">-->
<!--    <img src="..." alt="Card image cap">-->
<!--    <div class="card-body">-->
<!--        <h5 class="card-title">Card title</h5>-->
<!--        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
<!--        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>-->
<!--    </div>-->
<!--</div>-->