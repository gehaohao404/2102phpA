<?php
    $username=trim($_POST['username']);
    $pass=trim($_POST['pass']);

    $link=new mysqli('127.0.0.1','root','root','php2102');

    $sql="select * from users where username='{$username}' or email='{$username}' or mobile='{$username}'";

    $query=mysqli_query($link,$sql);
    $row=mysqli_fetch_all($query);
    // print_r($row);die;

    foreach($row as $k=>$v){
        // echo $v['4'];die;
        $p = password_verify($pass,$v['4']);
    
    
    
    if($p){
        echo"登录成功";
        session_start();
        $_SESSION['username']=$v['1'];
        header("Refresh:3;url=table.php");
    }else{
        echo"登录失败";
        header("Refresh:2;url=login.html");
    }
}