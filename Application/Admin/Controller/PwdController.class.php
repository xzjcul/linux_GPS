<?php
namespace Admin\Controller;
use Think\Controller;
class PwdController extends AuthController {
    public function index(){
        $admin = M('Admin');
        if(IS_POST){
            $data['id'] = I('id');
            $data['username'] = session('username');
            $data['password'] = md5(I('password'));
            $data['logintime'] = time();
            if($admin->save($data)){
                $this->success("密码修改成功",U('index'));
            }else{
                $this->error("密码修改失败");
            }
            return;
        }
        $this->display();
    }
}