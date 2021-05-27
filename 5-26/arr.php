<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $list=[
          'zhangsan',
          'lisi',
          'wangwu',
          'zhaoliu'
      ];
    
    ?>
    <ul>
        <li>sdaf</li>
        
        <?php
        foreach($list as $k=>$v){
            echo "<li>".$list[$k]."</li>";
        }
        ?>
        
        <li>hstrjdh</li>
    </ul>
</body>
</html>