<?php

    $tel="./test";
    $a="Hello hh";
     file_put_contents($tel,$a);
     echo file_get_contents($tel);