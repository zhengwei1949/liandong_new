<?php 
header('content-type:text/html;charset=utf-8');
$link = @mysql_connect('localhost', 'root', 'root') or die('数据库服务器连接失败');
mysql_query('set names utf8');
@mysql_query('use city') or die('选择数据库失败');