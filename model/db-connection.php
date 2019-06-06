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

    public function insertBlog($title, $short_desc, $content)
    {
        $sql = $this->conn->prepare("INSERT INTO Blog (title,short_desc,content) VALUE (?,?,?)");
        $sql->bind_param("sss", $title, $short_desc, $content);
        if ($sql->execute() === TRUE) {
            echo "新记录插入成功\n";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function getBlogNum(){
        $sql="SELECT COUNT(idBlog) FROM Blog";
        $result=$this->conn->query($sql);
        $count=$result->fetch_assoc()['COUNT(idBlog)'];
        return (int)$count;
    }

    public function getBlogList()
    {
        $sql = "SELECT idBlog, title, short_desc FROM Blog";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getBlogListPage($page){
        $offset=20;
        $limit=--$page*$offset;
        $sql=$this->conn->prepare("SELECT idBlog, title, short_desc FROM Blog LIMIT ?, ?");
        $sql->bind_param("ii",$limit,$offset);
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
        $sql = $this->conn->prepare("SELECT * from Blog WHERE idBLog=?");
        $sql->bind_param("i", $idBlog);
        $sql->execute();
        $sql->store_result();
        $sql->bind_result($id, $title, $short_desc, $content);
        $sql->fetch();
        $result = array($id, $title, $short_desc, $content);

        return $result;
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
}

$serverName = "localhost";
$userName = "root";
$password = "root";
$dbName = "web";
$db = new DB($serverName, $userName, $password, $dbName);