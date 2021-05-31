<?php
    //建立连接
    $link = new mysqli("localhost","root","root","php2102");
    // var_dump($link);
    //sql语句
    $sql="select * from goods";
    //执行查询
    $res=mysqli_query($link,$sql);
    //获取结果
    $rows=mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo '<pre>';print_r($rows);echo'</pre>';