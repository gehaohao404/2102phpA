<?php

    $tel="./adc";
    //获取浏览量
    $b=file_get_contents($tel);
    echo "浏览量：".$b;
    //每次执行给浏览量加一
    $a=$b+1;
    //修改浏览量的值
    file_put_contents($tel,$a);