<?php
include('db.php');
$uname = $_REQUEST['usename'];
//$pwd = $_POST['password'];
//$email = $_POST['email'];
$sql = "select * from zhucebiao_uesr where uesr_name='$uname'";
$res = $mysqli->query($sql);
if($res->num_rows > 0){
    echo '{"msg":"用户名已存在","username":"'.$uname.'","has":true}';
}else{
    echo '{"msg":"用户名可以使用","username":"'.$uname.'","has":false}';
   // $sql = "insert into zhucebiao_uesr (uesr_name,uesr_password,uesr_email) values ('$uname','$pwd','$email')";
    

}

$mysqli->close();
?>