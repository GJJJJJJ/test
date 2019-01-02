<?php
    include('db.php');

    $uname = $_POST['username'];
    $pwd = $_POST['password'];
    $email = $_POST['email'];

    $sqlSelect = "select * from zhucebiao_uesr where uesr_name='$uname'";
    $result = $mysqli->query($sqlSelect);
    // var_dump($result);
    if($result->num_rows>0){
        die('用户名已存在');
    } 
    

    $sql = "insert into zhucebiao_uesr (uesr_name,uesr_password,uesr_email) values ('$uname','$pwd','$email')";
    
    $res = $mysqli->query($sql); // 受影响的行数
    
    if($res){
        echo '<script>alert("注册成功");location.href="login.html";</script>';
    }
    $mysqli->close();
?>  