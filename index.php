<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
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