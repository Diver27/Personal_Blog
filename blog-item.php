<?php
require_once("./model/db-connection.php");
$array = $db->getBlogContent($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <style>
        section {
            width: 100%;
            float: left;
        }

        .banner-section {
            background-image: url("/media/temp_image.jpg");
            background-size: cover;
            height: 380px;
            left: 0;
            position: absolute;
            top: 0;
            background-position: 0;
        }

        .post-title-block {
            padding: 100px 0;
        }

        .post-title-block h1 {
            color: #fff;
            font-size: 85px;
            font-weight: bold;
            text-transform: capitalize;
        }

        .post-title-block h3 {
            font-size: 20px;
            color: #fff;
        }

        .image-block {
            float: left;
            width: 100%;
            margin-bottom: 10px;
        }

        .footer-link a {
            color: #A9FD00;
            font-size: 18px;
            text-transform: uppercase;
        }

        #content {
            margin-top: 4em;
        }
    </style>
    <title><?php echo $array[1] . "-深潜景色" ?></title>
</head>
<body>
<?php
$tag = "b";
require_once("./inc/navigate-bar.php");
?>

<section class="banner-section">
</section>
<section class="post-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">

                <h1 class="text-center"><?php echo $array[1] ?></h1>
                <h3 class="text-center"><?php echo $array[2] ?></h3>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 m-auto" id="content">
                <?php
                echo $array[3];
                ?>
            </div>
        </div>
</section>

<!--<div style="text-align: right">-->
<!--    <button type="button" class="btn btn-primary" id="editBlog" >编辑博文</button>-->
<!--</div>-->

<!-- Add JavaScript file from js file -->
<script src="./js/jquery-3.4.1.js"></script>
<script src="./js/bootstrap.js"></script>
<script>
    $("#editBlog").click(function(event){

    });
</script>
</body>
</html>