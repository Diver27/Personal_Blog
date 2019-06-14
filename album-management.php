<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>相册-深潜景色</title>
</head>
<body>

<?php
$tag="a";
require_once('./inc/navigate-bar.php');
?>

<div id="ckfinderModule"></div>

<!-- Add JavaScript file from js file -->
<script src="./js/jquery-3.4.1.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="ckfinder/ckfinder.js"></script>
<script>
    CKFinder.widget('ckfinderModule',{
        height:window.outerHeight
    });
</script>
</body>
</html>
