<?php
    $uname=trim($_POST['uname']);
    $mobile=trim($_POST['mobile']);
    $email=trim($_POST['email']);
    $pass=trim($_POST['pass']);

    $link=new mysqli('127.0.0.1','root','root','php2102');
    $sql1="select * from users where username='{$uname}'";
    if($sql1==$uname){
        echo "用户名已存在";
        header("Refresh:2;url=reg.html");
    }

    $sql="insert into users (username,email,mobile,pass)values('{$uname}','{$email}','{$mobile}','{$pass}')";

    $stmt=mysqli_prepare($link,$sql);

    $result=mysqli_stmt_execute($stmt);

    if($result){
        echo "注册成功";
        header("Refresh:3;url=login.html");
    }else{
        echo "注册失败";
    }