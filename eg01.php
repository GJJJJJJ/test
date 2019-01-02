<?php
    header("content-type:text/html;charset=utf-8");
    echo "你好，欢迎学习PHP";
    echo "<br>今天是12月17日","随便写";
    echo "<br>";
    print "今天天气很好";

    echo "<br>";
    $username = '小明';
    $age = 16;
    // echo "你好，我叫".$username.'我今年'.$age.'岁';
    echo "你好，我叫 $username ,我今年 $age 岁"; // 双引号字符串中可以识别变量
    // die; 停止下面代码执行
    echo "<br>";
    if($age>=18){
        echo '可以学习编程了';
    }else{
        echo '好好学习';
    }

    echo "<br>";
    $day = 5;
    $str = '';
    switch($day){
        case 1:
        $str="xingqiyi";
        break;
        case 2:
        $str="xingqier";
        break;
        case 3:
        $str = "xingqisan";
        break;
        default:
        $str="输入错误";
    }
    echo $str;

    echo "<br>";
    // for do-while while...
    // $i = 1;
    // $sum = 0;
    // do{
    //     $sum+=$i;
    //     $i++;
    // }while($i<=100);
    // echo $sum;

    $count = 0;
    for($i=100;$i<=200;$i++){
        for($j=2;$j<$i;$j++){
            if($i%$j==0){
                break;
            }
        }
        if($j == $i){
            $count++;
        }
    }
    echo $count;
?>
