<?php
namespace Home\Controller;
use Think\Controller;
use Think\Cache\Driver\Redis;
class RtIonoController extends CommonController{
	
	public function index(){
        $redis = new Redis();
        if($redis->exists('ionodcb') || $redis->exists('ionoresi')){
            $dcb = $redis->get('ionodcb');
            $resi = $redis->get('ionoresi');
            $ronodcb = unserialize($dcb);
            $ronoresi = unserialize($resi);
            $this->assign('dcb',$ronodcb);
            $this->assign('resi',$ronoresi);
        }else{
            $this->assign('ale','暂无数据');
        }
		$this->display();
	}
	public function refreshIonoDcbChart(){
        $redis = new Redis();
        $res = $redis->get('ionodcb');
        $data = unserialize($res);
        $this->ajaxReturn($data);
	}

	public function refreshIonoResiChart(){
        $redis = new Redis();
        $res = $redis->get('ionoresi');
        $data = unserialize($res);
        $this->ajaxReturn($data);
    }
}

