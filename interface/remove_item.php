<?php
    include('model/_connect.php');
    
    $remove_id = $_REQUEST['id'];

    $sql = "DELETE FROM wq_list WHERE wd_id=$remove_id";

    $res = $mysqli->query($sql);
    
    if($res==1){
        echo '{"msg":"成功"}';
    }else{
        echo '{"msg":"失败"}';
    }

    $mysqli->close();
?>