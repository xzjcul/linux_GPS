<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        if(IS_POST){
            $admin = D('Login');
            if($admin->create()){
                if($admin->checkLogin()){
                    $this->success('登录成功',U('Index/index'));
                }else{
                    $this->error("登录失败");
                }
            }else{
                $this->error($admin->getError());
            }

            return;
        }
        $this->display();
    }
    public function verify(){
        $config =    array(
            'fontSize'    =>    30,    // 验证码字体大小
            'length'      =>    3,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify =     new \Think\Verify($config);
        $Verify->entry();
    }

}