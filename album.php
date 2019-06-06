<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <style>
        .album{
            margin: 4em 0;
            position: relative;
        }

        .album img{
            height: 15rem;
            width: 100%;
            margin: 1em;
        }
    </style>
    <title>相册-深潜景色</title>
</head>
<body>
<?php
$tag="a";
require_once('./inc/navigate-bar.php');
?>

<div class="album">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="media/temp_image.jpg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="media/temp_image.jpg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="media/temp_image.jpg" class="img-fluid">
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="media/temp_image.jpg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="media/temp_image.jpg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="media/temp_image.jpg" class="img-fluid">
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="media/temp_image.jpg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="media/temp_image.jpg" class="img-fluid">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="media/temp_image.jpg" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div>
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</div>

<!-- Add JavaScript file from js file -->
<script src="./js/jquery-3.4.1.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="js/jquery.twbsPagination.js"></script>
</body>
</html>