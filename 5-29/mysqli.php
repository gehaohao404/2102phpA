<?php
    $user_name=trim($_GET['name']);
    $userid=trim(intval($_GET['id']));
    echo "传过来的参数：".$user_name."<br>";
    echo"传过来的id：".$userid;
    
    
    $host="127.0.0.1";
    $user="root";
    $pass="root";
    $db="php2102";

    $link=new mysqli($host,$user,$pass,$db);
    
    $sql="select * from users where userid='{$userid}' or username='{$user_name}'";

    $res=mysqli_query($link,$sql);

    $row=mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo"<pre>";print_r($row);echo"</pre>";