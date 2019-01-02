<?php
    include('model/_connect.php');

    $sql = "SELECT * FROM wq_list";

    $res = $mysqli->query($sql);

    $res_arr = array();
    if($res->num_rows>0){
        while($row=$res->fetch_assoc()){
            array_push($res_arr,$row);
        }
    }else{
        array_push($res_arr,null);
        echo '{"msg":"error"}';
        die('error');
    }

    echo json_encode($res_arr);

    $mysqli->close();
?>