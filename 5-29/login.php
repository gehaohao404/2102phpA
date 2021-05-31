<?php
    $username=trim($_POST['username']);
    $pass=trim($_POST['pass']);

    $link=new mysqli('127.0.0.1','root','root','php2102');

    $sql="select * from users where username='{$username}' or email='{$username}' or mobile='{$username}'";

    $query=mysqli_query($link,$sql);

    $row=mysqli_fetch_all($query);
    print_r($row);die;

    if($row){
        echo"登录成功";
        header("Refresh:3;url=table.php");
    }else{
        echo"登录失败";
    }