<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <a class="navbar-brand" href="../index.php">
        <img src="../media/logo.png" alt="Logo" style="width:40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-lg-auto">
            <li class="nav-item">
                <a class="nav-link<?php if($tag=="b") echo " active"; ?>" href="/blog.php?page=1&category=0">博文</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php if($tag=="a") echo " active"; ?>" href="/album-management.php">相册</a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?php if($tag=="abt") echo " active"; ?>" href="/about.php">关于</a>
            </li>
        </ul>
<!--        <div id="external"></div>-->

<!--        <button type="button" class="btn btn-primary" id="addBlog" onclick="location='/blog-edit.php'">新博文</button>-->
        <form class="form-inline my-2 my-lg-0" action="/search-result.php" method="get" target="_self">
            <input class="form-control mr-sm-2" type="search" placeholder="博文标题" aria-label="Search" name="keyword">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜索</button>
        </form>
    </div>
</nav>
