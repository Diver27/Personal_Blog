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
    <script src="js/ckeditor5-build-classic/translations/zh-cn.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
    <style>
        .ck-editor__editable {
            min-height: 400px;
        }
        .input-group{
            margin:4em 0;
        }
        .btn{
            margin: 10em 0;
        }
    </style>
    <title>编辑博文</title>
</head>
<body>
<?php
$tag = "b";
require_once('./inc/navigate-bar.php');
?>

<form>
    <div class="input-group mb-3 input-group-lg m-auto" style="width:30%">
        <input type="text" class="form-control" id="title" placeholder="输入标题">
    </div>

    <div class="input-group mb-3 m-auto" style="width:50%">
        <input type="text" class="form-control" id="short_desc" placeholder="输入简述">
    </div>

    <div class="form-group">
        <label for="name">博文分类</label>
        <select class="form-control" id="category">
            <option value=1001>技术笔记</option>
            <option value=1003>杂谈</option>
            <option value=1002>生活</option>
        </select>
    </div>
</form>

<textarea name="content" id="content">
        &lt;p&gt;输入博文内容&lt;/p&gt;
</textarea>
<button type="button" id="submit" class="btn btn-primary btn-lg btn-block m-auto" style="width:30%">提交</button>

<script src="/js/jquery-3.4.1.js"></script>
<script src="/js/bootstrap.js"></script>
<script>
    let editor;
    ClassicEditor
        .create( document.querySelector( '#content' ),{
            toolbar: ['heading','|','bold','italic','|','link','bulletedList','numberedList','ckfinder','blockQuote','insertTable','|','undo','redo'],
            ckfinder: {
                uploadurl:'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                options: {
                    resourceType: 'Images'
                }
            },
            language: "zh-cn"
        } ).then( newEditor => {
            editor=newEditor;
    } ).catch( error => {
        console.error( error );
    } );
    $("#submit").click(function(event){
        var title=document.getElementById("title").value;
        var short_desc=document.getElementById("short_desc").value;
        var category=document.getElementById("category").value;
        var content=editor.getData();
        $.post('/model/db-connection.php',{
            'action':"createBlog",
            'title':title,
            'short_desc':short_desc,
            'category':category,
            'content':content
        })
        alert("递交成功");
        window.location.href="blog.php";
    });
</script>

</body>
</html>
