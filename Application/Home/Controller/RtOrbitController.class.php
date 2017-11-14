<?php
namespace Home\Controller;
use Think\Controller;
use Think\Cache\Driver\Redis;
class RtOrbitController extends CommonController{
    public function index(){
        $sat = "G01";
        $this->assign("currSat", $sat);
        $redis = new Redis();
        if($redis->exists('sat')){
            $b = $redis->get('sat');
            $rs = unserialize($b);
            //var_dump($rs);die();
            $this->assign('result',$rs);
        }else{
            $this->assign('ale','暂无数据');
        }
        $this->display();
    }
}