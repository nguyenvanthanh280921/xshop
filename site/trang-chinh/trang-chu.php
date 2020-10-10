<div class="row mt-20">
<?php
    foreach ($items as $key => $item) {
        ?>
        <div class="col-sm-4"  >
            <div class="card bg-light mb-4" >
                <div class="card-body" >
                    <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$item['ma_hh']?>">
                    <img style="width: 285px ; height: 225px" class="img-fluid" src="<?=$CONTENT_URL?>/images/products/<?=$item['hinh']?>" />
                    </a>
                    <h5 class="card-title"><?php  echo $item['ten_hh']; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <p class="bloc_left_price">99.00 $</p>
                </div>
            </div>
        </div>
<!--        <div class="prd">-->
<!--            <h1>--><?php // echo $item['ten_hh']; ?><!--</h1>-->
<!--        <a href="../hang-hoa/chi-tiet.php?ma_hh=--><?//=$item['ma_hh']?><!--">-->
<!--            <img src="--><?//=$CONTENT_URL?><!--/images/products/--><?//=$item['hinh']?><!--" />-->
<!--        </a>-->
<!--        </div>-->
        <?php
    }
?>
</div>
