<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Quản trị website</title>
        <script src="<?=$CONTENT_URL?>/js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
        <script src="<?=$CONTENT_URL?>/js/bootstrap.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="<?=$CONTENT_URL?>/css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="<?=$CONTENT_URL?>/css/style.css" type="text/css">
    </head>
    <style>
        .container h1{
            text-align: center;
        }
    </style>
    <body>
        <div class="container">
            <h1>QUẢN TRỊ WEBSITE</h1>
            <nav>
                <?php require 'menu.php';?>
            </nav>
            <?php
                require $VIEW_NAME;
            ?>
        </div>
    </body>
</html>
<?php

