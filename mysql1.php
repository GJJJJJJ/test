<?php
header("content-type:text/html;charset=utf-8");
$mysql_conf=array(
    'host'=>'127.0.0.1:3306',
    'db'=>'zhucebiao',
    'db_uesr'=>'root',
    'db_pwd'=>''
);
$mysqli = new mysqli($mysql_conf['host'],$mysql_conf['db_uesr'],$mysql_conf['db_pwd']);
if($mysqli->connect_errno){
    die("连接错误".$mysqli->connect_error);
}
$mysqli->query("set names 'utf8';");
$select_db=$mysqli->select_db($mysql_conf['db']);
if(!$select_db){
    die("数据选择错误".$mysqli->error);
}
$sql="select * from zhucebiao_uesr";
$res=$mysqli->query($sql);
$arr=array();
while($row=$res->fetch_assoc()){
    array_push($arr,$row);
}
$json=json_encode($arr);
echo $json;
?>