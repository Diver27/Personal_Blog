<?php
$title="主页-深潜景色";
require_once("./inc/header.php");
?>
<!-- header -->
<header class="header">
    <div class="overlay"></div>
    <div class="container">
        <h1 class="text-center home_welcome">
            A Deep Diver's Deep Dream
        </h1>
    </div>
</header>

<!-- Add JavaScript file from js file -->
<script src="./js/jquery-3.4.1.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/script.js"></script>
<script>$(document).ready(function(){
        $('.header').height($(window).height());
    })</script>
</body>
</html>