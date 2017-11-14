<?php
namespace Admin\Controller;
use Think\Controller;
class AuthController extends Controller {
    public function _initialize(){
        header("Content-Type:text/html;charset=utf-8");
        $admin_id = session('id');
        if(!$admin_id){
            $this->redirect("Admin/Login/index");
        }
    }
}