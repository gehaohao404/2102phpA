<?php
    $name=trim($_POST['username']);
    $age=trim($_POST['age']);
    $zhi=trim($_POST['zhi']);

    if($age<18){
        $age="nonage";
    }

    $link=new mysqli('127.0.0.1','root','root','php2102');

    $sql="insert into student (u_name,u_age,u_zhi) values ('{$name}','{$age}','{$zhi}')";
    // echo $sql;die;

    $query=mysqli_prepare($link,$sql);

    $reg=mysqli_stmt_execute($query);

    if($reg){
        echo "添加成功";
        header("Refresh:2;url=list.php");
    }else{
        echo "添加失败";
    }