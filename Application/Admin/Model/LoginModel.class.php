<?php
namespace Admin\Model;
use Think\Model;

class LoginModel extends Model{
    protected $tableName = 'admin';

    protected $_validate = array(
        array('username','require','名称不得为空！',1),
        array('password','require','密码不得为空！',1),
        array('verify','verify','验证码错误！',1,'callback'), //默认情况下用正则进行验证
    );

    public function checkLogin(){
        $user = M('Admin');
        $map = array(
            'username' => I('username'),
        );
        $password = md5(I('password'));
        $info = $user->where($map)->find();
        if($info){
            if($info['password']==$password){
                session('id',$info['id']);
                session('username',$info['username']);
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }


    public function verify($code){
        $verify = new \Think\Verify();
        return $verify->check($code, '');
    }

}







?>