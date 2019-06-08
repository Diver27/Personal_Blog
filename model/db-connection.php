<?php

class DB
{
    private $conn;

    public function __construct($serverName, $userName, $password, $dbName)
    {
        $this->conn = new mysqli($serverName, $userName, $password, $dbName);
        $this->conn->query('set names utf8');
//        if ($this->conn->connect_error) {
//            die("连接失败: " . $this->conn->connect_error . "\n");
//        }
//        echo "连接成功\n";
    }

    function __destruct()
    {
        $this->conn->close();
    }

    public function createBlog($title, $short_desc, $content)
    {
        $sql = $this->conn->prepare("INSERT INTO Blog (title,short_desc,content) VALUE (?,?,?)");
        $sql->bind_param("sss", $title, $short_desc, $content);
        if ($sql->execute() === TRUE) {
            echo "新记录插入成功\n";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function createComment($idBlog){
        //TODO 评论
    }

    public function getBlogNum($category){
        if($category==0){
            $sql=$this->conn->prepare("SELECT COUNT(idBlog) FROM Blog");
        }else {
            $sql = $this->conn->prepare("SELECT COUNT(idBlog) FROM Blog WHERE idCategory=?");
            $sql->bind_param("i",$category);
        }
        $sql->execute();
        $sql->store_result();
        $sql->bind_result($num);
        $sql->fetch();
        return (int)$num;
    }

    public function getBlogList($page, $offset, $category){
        $limit=--$page*$offset;
        if($category==0) {
            $sql = $this->conn->prepare("SELECT idBlog, title, short_desc FROM Blog LIMIT ?, ?");
            $sql->bind_param("ii",$limit,$offset);
        }else{
            $sql = $this->conn->prepare("SELECT idBlog, title, short_desc FROM Blog WHERE idCategory = ? LIMIT ?, ? ");
            $sql->bind_param("iii",$category,$limit,$offset);
        }
        $sql->execute();
        $sql->store_result();
        $sql->bind_result($id, $title, $short_desc);
        $result=array();
        while($sql->fetch()){
            $tmp=array($id, $title, $short_desc);
            array_push($result,$tmp);
        }
        return $result;
    }

    public function getBlogContent($idBlog)
    {
        $sql = $this->conn->prepare("SELECT idBlog, title, short_desc, content from Blog WHERE idBLog=?");
        $sql->bind_param("i", $idBlog);
        $sql->execute();
        $sql->store_result();
        $sql->bind_result($id, $title, $short_desc, $content);
        $sql->fetch();
        $result = array($id, $title, $short_desc, $content);

        return $result;
    }

    public function getComment($idBlog){

    }

    public function searchItem($title){
        $sql=$this->conn->prepare("SELECT idBlog, title, short_desc FROM Blog WHERE title LIKE ?");
        $param="%".$title."%";
        $sql->bind_param("s",$param);
        $sql->execute();
        $sql->store_result();
        $sql->bind_result($id, $title, $short_desc);
        $result=array();
        while($sql->fetch()){
            $tmp=array($id, $title, $short_desc);
            array_push($result,$tmp);
        }
        return $result;
    }

    public function getBlogCategoryList(){
        $sql="SELECT idCategory, name FROM Category";
        $result = $this->conn->query($sql);
        $category=array();
        while($row=$result->fetch_assoc()){
            array_push($category,$row);
        }
        return $category;
    }
}

$serverName = "localhost";
$userName = "root";
$password = "root";
$dbName = "web";
$db = new DB($serverName, $userName, $password, $dbName);


switch($_GET['action']){
    case "getBlogCategoryList":
        $data=$db->getBlogCategoryList();
        echo $data[0]['name'];
    case "getBlogList":
        $data=$db->getBlogList(1,16,1001);
        echo $data[0][1];
}

switch ($_POST['action']){
    case "createBlog":
        $db->createBlog($_POST['title'],$_POST['short_desc'],$_POST['content']);
}