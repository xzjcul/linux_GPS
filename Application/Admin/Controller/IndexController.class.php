<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends AuthController {
    public function index(){

        $this->display();
    }

    public function logout(){
        session(null);
        $this->redirect('Login/index');
    }
}