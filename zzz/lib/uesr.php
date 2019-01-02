<?php
include('db.php');
$sql="select * from zhucebiao_uesr";
$res=$mysqli->query($sql);
if($res->num_rows>0){
    $dataArr=array();
    while($row=$res->fetch_assoc()){
        array_push($dataArr,$row);
    }
    $json=json_encode($dataArr);
}
if($json){
    echo $json;
}
else{
    echo '{"msg":"数据库暂无此数据"}'
}
$mysqli->close();
?>