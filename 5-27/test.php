<?php
    $name=$_POST['u_name'];
    
    $email=$_POST['u_email'];
    $tel=$_POST['u_tel'];
    $password=$_POST['u_password1'];
    $password2=$_POST['u_password2'];

                                             //验证用户名是否符合规则     用户名用英文名 长度不少于5 不大于10
    if($name==""){
        echo"用户名不能为空";die;
    }
    $patten_name="/^[A-z]{5,10}$/";
                    //preg_match  执行匹配正则表达式
    if(!preg_match($patten_name,$name)){
        echo "用户名不符合规则";die;
    }

                                                    //验证email是否符合规则
    if($email==""){
        echo"email不能为空";die;
    }
    $patten_email="/^[1-9][0-9]{4,9}@[a-z]{2,5}.com$/";
    if(!preg_match($patten_email,$email)){
        echo "email输入有误";die;
    }

                                                //验证手机号是否符合规则
    if($tel==""){
        echo"手机号不能为空";die;
    }
    $patten_tel="/^[1][0-9]{10}$/";
    if(!preg_match($patten_tel,$tel)){
        echo"手机号输入有误";die;
    }

                                                //判断密码与确认密码是否一致
    if($password==""){
        echo"密码不能为空";die;
    }
    if($password2==""){
        echo"确认密码不能为空";die;
    }
    if($password!=$password2){
        echo"密码与确认密码不相符";die;
    }

    echo "注册成功";


    // //接收 POST传参
    // if(empty($_POST)){
    //     die("没有提交数据");
    // }

    // $user_info = [];
    // //判断字段不能为空
    // foreach($_POST as $k=>$v){
    //     $input = trim($v);      //去空格
    //     if( empty($input) ){
    //         die( $k." 字段不能为空");
    //     }
    //     //用户信息保存在新数组中
    //     $user_info[$k] = $input;
    // }
    
    // //验证用户名是否符合用户名规则   大小写英文字母 不少于6
    // $patten = "/^[a-zA-Z]{6,}$/";
    // if( !preg_match($patten,$user_info['u_name']) ){
    //     die("用户名不符合规则");
    // }

    // //验证Email
    // if( !filter_var($user_info['u_email'],FILTER_VALIDATE_EMAIL) ){
    //     die("EMail不符合规则");
    // }

    // //验证手机号
    // $patten = "/^1[34578]\d{9}$/";
    // if( !preg_match($patten,$user_info['u_tel']) ){
    //     die("手机号不符合规则");
    // }

    // //验证密码
    // if($user_info['u_password1'] !== $user_info['u_password2']){
    //     die("密码与确认密码不一致");
    // }


    // echo "注册成功";