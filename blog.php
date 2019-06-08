<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="/css/side-bar.css">
    <style>
        .blog{
            margin:4em 0;
        }

        .card{
            margin:1em 0;
        }
    </style>
    <title>博文-深潜景色</title>
</head>
<body>

<?php
$tag="b";
require_once('./inc/navigate-bar.php');
//require_once('./inc/side-menu.php'); ?
?>

<!-- Posts section -->
<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 px-1 bg-light">
                <div class="py-2 flex-grow-1">
                    <div class="nav flex-sm-column">
                        <a href="" class="nav-link d-none d-sm-inline disabled">目录</a>
                        <a href="" class="nav-link">分类一</a>
                        <a href="" class="nav-link">分类二</a>
                        <a href="" class="nav-link">分类三</a>
                        <a href="" class="nav-link">分类四</a>
                        <a href="" class="nav-link">分类五</a>
                    </div>
                </div>
            </div>
            <div class="col col-sm-9">
                <div class="row">
                    <?php
                    include_once("./model/db-connection.php");
                    $page = $_GET['page'];
                    $result = $db->getBlogListPage($page);
                    $totalBlogNum = $db->getBlogNum();
                    if ($totalBlogNum % 20 == 0) {
                        $totalPageNum = $totalBlogNum / 20;
                    } else {
                        $totalPageNum = $totalBlogNum / 20 + 1;
                    }
                    for ($i = 0; $i < sizeof($result, 0); $i++) {
                        ?>
                        <div class="col-md-4 col-lg-3 col-sm-12">
                            <div class="card">
                                <div class="card-img">
                                    <img src="media/temp_image.jpg" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $result[$i][1] ?></h4>
                                    <p class="card-text">
                                        <?php echo $result[$i][2] ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="blog-item.php?id=<?php echo $result[$i][0] ?>" target="_blank" p
                                       class="card-link">Read more</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <ul class="pagination justify-content-center">
<!--        <li class="page-item"><a class="page-link" href="#" >前页</a></li>-->
<!--        <li class="page-item"><a class="page-link" href="#">1</a></li>-->
<!--        <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--        <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--        <li class="page-item"><a class="page-link" href="#">后页</a></li>-->
        <li class="page-item <?php if($page==1) echo "disabled" ?>"><a class="page-link" href="/blog.php?page=<?php echo $page-1 ?>" >前页</a></li>
        <?php
        for($i=1;$i<=$totalPageNum;$i++){
            if($page==$i){
                $ifActive=" active";
            }else{
                $ifActive="";
            }
            echo "<li class=\"page-item".$ifActive."\"><a class=\"page-link\" href=\"/blog.php?page=".$i."\">".$i."</a></li>";
        }
        ?>
        <li class="page-item <?php if($page==$totalPageNum) echo "disabled" ?>"><a class="page-link" href="/blog.php?page=<?php echo $page+1 ?>">后页</a></li>
    </ul>
</div>

<!-- Add JavaScript file from js file -->
<script src="./js/jquery-3.4.1.js"></script>
<script src="./js/bootstrap.js"></script>
</body>
</html>