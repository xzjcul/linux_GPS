<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->getCate();
    }

    public function getCate(){
        $cates = D('Cate');
        $cates = $cates->where('parentid=0')->select();
        //var_dump($cates);
        $this->assign('topname',$cates);
    }

}