create table `users` (
    `userid` int unsigned auto_increment primary key,
    `username` varchar(64),
    `email` varchar(64),
    `mobile` char(11),
    `pass` varchar(64),
    `account` int
);

//向表中插入记录  insert into
insert into users (username,email,mobile,pass,account) values('zhangsan',"zhangsan@qq.com",'18012341234','afgenstrbhraeb',10000);

create table `goods` (
    `g_id` int unsigned auto_increment primary key,
    `g_name` varchar(64),
    `g_price` int,
    `g_time` varchar(64),
    `page_view` int,
    `g_delete` int
);

create table `student` (
    `u_id` int unsigned auto_increment primary key,
    `u_name` varchar(64),
    `u_age` int,
    `u_zhi` varchar(64)
);

insert into goods (g_name,g_price,g_time,page_view,g_delete) values ('socks','10','2021-5-28 18:48:28','100','1');