<?php
$serverName="localhost";
$userName="root";
$password="root";
$dbName="web";

$conn=new mysqli($serverName,$userName,$password,$dbName);
$conn->query('set names utf8');

if($conn->connect_error){
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";

//
//$sql="INSERT INTO Blog (title,short_desc,content)
//VALUE ('{$title}','{$short_desc}','{$content}')";
$sql=$conn->prepare("INSERT INTO Blog (title,short_desc,content) VALUE (?,?,?)");
$sql->bind_param("sss",$title,$short_desc,$content);

$title="测试文章2";
$short_desc="样例内容2";
$content="样例内容2";


if ($sql->execute() === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();