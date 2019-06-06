<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
<!--    <link rel="stylesheet" href="./css/style.css">-->
    <style>
        .header{
            position: relative;
            background-image: url('/media/temp_image.jpg');
            background-size: cover;
            background-position: center;
        }
        .overlay{
            position: absolute;
            min-height: 100%;
            min-width: 100%;
            left: 0;
            top: 0;
            background: rgba(244, 244, 244, 0.50);
        }

        .home_welcome{
            color: black;
        }
    </style>
    <title>深潜景色</title>
</head>
<body>
<?php
require_once("./inc/navigate-bar.php");
?>
<!-- header -->
<header class="header">
    <!--    <div class="overlay"></div>-->
    <div class="container">
        <h1 class="text-center home_welcome">
            A Deep Diver's Deep Dream
        </h1>
    </div>
</header>

<!-- Add JavaScript file from js file -->
<script src="./js/jquery-3.4.1.js"></script>
<script src="./js/bootstrap.js"></script>
<!--<script src="js/pagination.js"></script>-->
<script>
    $(document).ready(function () {
        $('.header').height($(window).height());
    })
</script>
</body>
</html>