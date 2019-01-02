<?php
    include('model/_connect.php');

    $title = $_REQUEST['title'];
    $details = $_REQUEST['details'];
    $idea = $_REQUEST['idea'];
    $date = date('y/m/d h:i:s');

    $sql = "INSERT INTO wq_list (`wq_title`,`wq_details`,`wq_idea`,`submission_date`) VALUES ('$title','$details','$idea','$date')";

    $res = $mysqli->query($sql);

    // echo $res;
    if($res==="1"){
        echo '成功';
    }else{
        echo '失败';
    }

    $mysqli->close();
?>