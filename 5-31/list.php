<?php
    $link=new mysqli('127.0.0.1','root','root','php2102');

    $sql="select * from student";

    $query=mysqli_query($link,$sql);
    $row=mysqli_fetch_all($query,1);
    // print_r($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>学生姓名</td>
            <td>年龄</td>
            <td>住址</td>
        </tr>
        <?php foreach($row as $k=>$v){?>
        <tr>
            <td><?php echo $v['u_name'] ?></td>
            <td><?php echo $v['u_age'] ?></td>
            <td><?php echo $v['u_zhi'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>