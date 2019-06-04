<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>博文-深潜景色</title>
</head>
<body>

<?php
$tag="b";
require_once('./inc/navigate-bar.php');
?>

<!-- Posts section -->
<div class="blog" id="blog">
    <div class="container">
        <div class="row">
            <?php
            $conn = new mysqli('localhost', 'root', 'root', 'web');
            $conn->query('set names utf8');
            $sql = "SELECT idBlog, title, short_desc FROM Blog";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4 col-lg-3 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img src="media/temp_image.jpg" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $row['title'] ?></h4>
                            <p class="card-text">
                                <?php echo $row['short_desc'] ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a class="card-link">Read more</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
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
<script src="./js/script.js"></script>
<script>
    $(function(){

    })
</script>
</body>
</html>