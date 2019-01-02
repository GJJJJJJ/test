<?php
   include('db.php');
   $uname = $_GET['usename'];
   $sql = "select * from zhucebiao_uesr where uesr_name='$uname'";
   $res = $mysqli->query($sql);
   if($res->num_rows>0){
       echo '{"msg":"用户名已存在","usename":"'.$uname.'","has":true}';
   }else{
       echo '{"msg":"用户名可以使用","usename":"'.$uname.'","has":false}';
   }
   $mysqli->close();

?>