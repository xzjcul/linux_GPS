<?php
namespace Home\Controller;
use Think\Controller;

class SysinfoController extends CommonController {
    public function index(){
        $cate = D('Cate');
        $cateid = I('cateid');
        $msg = $cate->field('content')->find($cateid);
        $this->assign('msg',$msg);
        $this->display();
    }

}