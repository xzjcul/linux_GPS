<?php
use Workerman\Worker;
require_once __DIR__ . '/Workerman/Autoloader.php';

// 创建一个Worker监听2347端口，不使用任何应用层协议
$tcp_worker = new Worker("tcp://172.17.22.139:3456");

// 启动4个进程对外提供服务
$tcp_worker->count = 4;

// 当客户端发来数据时
$tcp_worker->onMessage = function($connection, $data)
{
    //连接本地的 Redis 服务
    $redis = new Redis();
    $redis->connect('0.0.0.0', 6379);
    $redis->set('ionoresi',$data);
    $connection->send($data);
};

// 运行worker
Worker::runAll();

?>