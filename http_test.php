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
    // 向客户端发送hello $data
    //var_dump($data);
    //连接本地的 Redis 服务
    $redis = new Redis();
    $redis->connect('0.0.0.0', 6379);

    $strtoarr =explode(',',$data);
    $data = array();
    if($strtoarr [0] == 'epoch'){
        array_shift($strtoarr);
        $data['epoch'] = date("Y-m-d H:i:s",$strtoarr [0]);
        $data['std'] = floatval(end($strtoarr));
        array_pop($strtoarr);
        foreach($strtoarr as $k=>$v){
            $data['data'][$k] =floatval($v);
        }
        $data['data'] = array_slice($data['data'],1,count($data['data'])-1);
        $data = json_encode($data);
        $redis->set('ionoresi',serialize($data));
        $connection->send($data);
    }else{
        $connection->send('error');
    }
};

// 运行worker
Worker::runAll();

?>