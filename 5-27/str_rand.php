<?php

    function str_rand($length=8){
        $str0='ABCDEFGHIJKMNPQRSTUVWXYZabcdefghijkmnnopqrstuvwxyz23456789';

        $str="";

        for($i=0;$i<$length;$i++){
            $num=mt_rand(0,55);
            echo"随机数：".$num;echo'<br>';
            echo"随机字母：".$str0[$num];echo'<br>';
            $c=$str0[$num];
            $str .= $c;
        }
        return $str;
    }
    var_dump(str_rand());