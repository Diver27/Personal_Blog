<?php
include_once("model/db-connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="/js/ckeditor5-build-classic/ckeditor.js"></script>
    <title>编辑博文</title>
</head>
<body>
<?php
$tag = "b";
require_once('./inc/navigate-bar.php');
?>

<!--<textarea name="title" id="title">-->
<!--    &lt;p&gt;输入标题&lt;/p&gt;-->
<!--</textarea>-->
<!--<textarea name="short_desc" id="short_desc">-->
<!--    &lt;p&gt;输入简述&lt;/p&gt;-->
<!--</textarea>-->
<textarea name="content" id="content">
    &lt;p&gt;输入内容&lt;/p&gt;
</textarea>

<script src="/js/bootstrap.js"></script>
<script src="/js/jquery-3.4.1.js"></script>

<script>
    // InlineEditor
    //     .create(document.querySelector("#title"),{
    //         language:'zh-cn'
    //     })
    //     .catch(error=>{
    //         console.error(error);
    // });
    // InlineEditor
    //     .create(document.querySelector("#short_desc"),{
    //         language:'zh-cn'
    //     })
    //     .catch(error=>{
    //     console.error(error);
    // });
    ClassicEditor
        .create(document.querySelector('#content'), {
            language: 'zh-cn'
        })
        .catch(error = > {
        console.error(error);
    });
</script>
</body>
</html>
