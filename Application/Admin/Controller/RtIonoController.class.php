<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Cache\Driver\Redis;
class RtIonoController extends AuthController{
	
	public function index(){
        $redis = new Redis();
        if($redis->exists('ionodcb') || $redis->exists('ionoresi')){
            $b = $redis->get('ionodcb');
            $resi = $redis->get('ionoresi');
            $ronoresi = unserialize($resi);
            $rs = unserialize($b);
            $this->assign('dcb',$rs);
            $this->assign('resi',$ronoresi);
        }else{
            $this->assign('ale','暂无数据');
        }
		$this->display();
	}
	public function refreshIonoDcbChart(){
	    $tim = date("Y-m-d H:i:s",time());
        $data = array(
            "epoch"=>$tim,
            "data"=>array(
                array("G01",  -(rand(0,10)*9),  0.00),array("G02",  9.46,  0.00),array("G03",  -4.68,  0.00),array("G04",  -0.41,  0.00),
                array("G05",   rand(0,10)*2,  0.00),array("C06",  -5.90,  0.00),array("C07",   4.05,  0.00),array("C08",  -(rand(0,10)*5),  0.00),
                array("G09",  -4.22,  0.00),array("G10",  -8.77,  0.00),array("G11",   4.26,  0.00),array("G12",   4.78,  rand(0,10)),
                array("G13",   3.58,  0.00),array("G14",   2.77,  0.00),array("G15",   rand(0,10)*3,  0.00),array("G16",   3.33,  0.00),
                array("G17",   3.62,  0.00),array("G18",   rand(0,10)*3,  0.00),array("G19",   5.94,  rand(0,10)*2),array("G20",   1.62,  0.00),
                array("G21",   3.51,  0.00),array("G22",   7.93,  0.00),array("G23",   rand(0,10)*4,  0.00),array("G24",  -4.99,  rand(0,10)),
                array("G25",  -6.50,  rand(0,10)),array("G26",  -8.22,  0.00),array("G27",  -4.10,  0.00),array("G28",   3.47,  0.00),
                array("G29",   3.63,  0.00),array("G30",  -5.50,  0.00),array("G31",   rand(0,10)*5,  0.00),array("G32",  -(rand(0,10)*7),  0.00),
                array("C01",  rand(0,10)*8+5,  0.45),array("C02",   5.00,  rand(0,10)),array("C03",   3.57,  0.45),array("C04",   1.51,  0.45),
                array("C05",  -2.01,  0.45),array("C06",  -0.29,  0.45),array("C07",   3.64,  0.45),array("C08",   2.25,  0.45),
                array("C09",  -7.36,  0.45),array("C10",  -(rand(0,10)*4),  0.45),array("C11",  -7.74,  0.45),array("C12",  -6.15,  0.45),
                array("C13", -22.75,  0.45),array("C14",  -4.01,  0.45),array("C15",   0.00,  rand(0,10))
            ),
            "mean std"=>0.04
        );
        $data = json_encode($data);
        $redis = new Redis();
        $redis->set('ionodcb',serialize($data));
        $this->ajaxReturn($data);
	}

    public function refreshIonoResiChart(){
        $redis = new Redis();
        $res = $redis->get('ionoresi');
        $data = unserialize($res);
        $this->ajaxReturn($data);
    }
}

