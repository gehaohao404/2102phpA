<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <td>姓名</td>
        <td>年龄</td>
        <td>Email</td>
    </tr>
    
    <?php
    $list = [
        ["name"=>"zhangsan","age"=>11,"email"=>"zhangsan@qq.com"],
        ["name"=>"lisi","age"=>22,"email"=>"lisi@qq.com"],
        ["name"=>"wangwu","age"=>33,"email"=>"wangwu@qq.com"],
        ["name"=>"zhaoliu","age"=>44,"email"=>"zhaoliu@qq.com"],
    ];  
    foreach($list as $k=>$v){
        echo "<tr>
        <td>".$v['name']."</td>".
        "<td>".$v['age']."</td>".
        "<td>".$v['email']."</td>
        </tr>";
    }
    


    ?>
        
    </table>
</body>
</html>