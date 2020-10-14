<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Shopping Center</title>
        <script src="<?= $CONTENT_URL ?>/js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
        <script src="<?= $CONTENT_URL ?>/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/style.css" type="text/css">
    </head>
    <style>
        .container h1 {
            text-align: center;
        }

        nav {
            padding-top: 20px;
        }
    </style>
    <body>
        <div class="container">
            <h1 class="list-group-item list-group-item-success">SIÊU THỊ TRỰC TUYẾN</h1>
            <nav>
                <?php require 'layout/menu.php'; ?>
            </nav>

            <div class="row">
                <div class="col-9">
                    <?php require $VIEW_NAME; ?>
                </div>
                <!--LOGIN-->
                <div class="col-3">
                    <?php require 'layout/dang-nhap.php'; ?>
                    <!--CATALOG-->
                    <?php require 'layout/loai-hang.php'; ?>
                    <!--FAVORITE-->
                    <?php require 'layout/top10.php'; ?>
                </div>

                    <!-------------------- Footer ------------------------->
                    <footer class="page-footer font-small unique-color-dark">

                        <section style="background-color: #6351ce;">
                            <section class="container">

                                <!-- Grid row-->
                                <section class="row py-4 d-flex align-items-center">

                                    <!-- Grid column -->
                                    <section class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                                        <h6 class="mb-0">Get connected with us on social networks!</h6>
                                    </section>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <section class="col-md-6 col-lg-7 text-center text-md-right">

                                        <!-- Facebook -->
                                        <a class="fb-ic">
                                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                                        </a>
                                        <!-- Twitter -->
                                        <a class="tw-ic">
                                            <i class="fab fa-twitter white-text mr-4"> </i>
                                        </a>
                                        <!-- Google +-->
                                        <a class="gplus-ic">
                                            <i class="fab fa-google-plus-g white-text mr-4"> </i>
                                        </a>
                                        <!--Linkedin -->
                                        <a class="li-ic">
                                            <i class="fab fa-linkedin-in white-text mr-4"> </i>
                                        </a>
                                        <!--Instagram-->
                                        <a class="ins-ic">
                                            <i class="fab fa-instagram white-text"> </i>
                                        </a>

                                    </section>
                                    <!-- Grid column -->

                                </section>
                                <!-- Grid row-->

                            </section>
                        </section>

                        <!-- Footer Links -->
                        <section class="container text-center text-md-left mt-5">

                            <!-- Grid row -->
                            <section class="row mt-3">

                                <!-- Grid column -->
                                <section class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                                    <!-- Content -->
                                    <h6 class="text-uppercase font-weight-bold">Men's Fashion37</h6>
                                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                    <p>This shop is rated by customers as a shop selling office shirts with good quality
                                        fabrics, full
                                        size
                                        sizes.
                                        Very suitable for all audiences and meet the needs of each customer.</p>

                                </section>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <section class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                                    <!-- Links -->
                                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                    <p>
                                        <a href="#!">Office fashion</a>
                                    </p>
                                    <p>
                                        <a href="#!">Four-season fashion</a>
                                    </p>
                                    <p>
                                        <a href="#!">Summer fashion</a>
                                    </p>
                                    <p>
                                        <a href="#!">Fashion style outing</a>
                                    </p>

                                </section>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <section class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                                    <!-- Links -->
                                    <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                    <p>
                                        <a href="#!">Your Account</a>
                                    </p>
                                    <p>
                                        <a href="#!">Become an Affiliate</a>
                                    </p>
                                    <p>
                                        <a href="#!">Shipping Rates</a>
                                    </p>
                                    <p>
                                        <a href="#!">Help</a>
                                    </p>

                                </section>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <section class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                                    <!-- Links -->
                                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                    <p>
                                        <i class="fas fa-home mr-3"></i> New York, 888888, US</p>
                                    <p>
                                        <i class="fas fa-envelope mr-3"></i> Men's Fashion37@gmail.com</p>
                                    <p>
                                        <i class="fas fa-phone mr-3"></i> + 06 66 666 666</p>
                                    <p>
                                        <i class="fas fa-print mr-3"></i> + 08 88 888 888</p>
                                </section>
                                <!-- Grid column -->
                            </section>
                            <!-- Grid row -->
                        </section>
                    </footer>
                <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
                <script type="text/javascript" src="./js/bootstrap.min.js"></script>
                <script type="text/javascript" src="./js/mdb.min.js"></script>
            </div>
        </div>
    </body>
</html>
