<?php
/**
 * 系统配文件
 * 所有系统级别的配置
 */
return array(
    /* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'cloud', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_PARAMS'    =>    array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),//数据库区分大小写
    //开启URL路由
    'URL_ROUTER_ON'       =>    true,
    //路由规则
    'URL_ROUTE_RULES'     =>    array(

    ),
    //设置预定座位等待时间
    'WAIT_TIME'   =>  array('hour'=>2),
);