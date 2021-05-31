<?php
 $link=mysqli_connect('127.0.0.1','root','root','php2102');
 $sql="select * from users";
 $query=mysqli_query($link,$sql);
 $row=mysqli_fetch_all($query,1);
//  print_r($row);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
    <h1>用户列表</h1>
    <table border="1">
        <tr>
            <td>用户id</td>
            <td>名称</td>
            <td>email</td>
            <td>手机号</td>
            <td>密码</td>
            <td>月薪</td>
        </tr>
        <?php foreach($row as $k => $v){ ?>
        <tr>
            <td><?php echo $v['userid']?></td>
            <td><?php echo $v['username']?></td>
            <td><?php echo $v['email']?></td>
            <td><?php echo $v['mobile']?></td>
            <td><?php echo $v['pass']?></td>
            <td><?php echo $v['account']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>