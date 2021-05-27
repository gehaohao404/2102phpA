<?php

    $tel="./test";
    $a="Hello hh    ";
     file_put_contents($tel,$a,FILE_APPEND);
    echo file_get_contents($tel);