<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends AuthController {
    public function lst(){
        $cate = D('Cate');
        $cates = $cate->catetree();
        $this->assign('cates',$cates);
        $this->display();
    }
    public function add(){
        $cate = D('Cate');
        if(IS_POST){
            if($cate->create()){
                if($cate->addCate()){
                    $this->success('栏目添加成功',U('lst'));
                }else{
                    $this->error('栏目新增失败');
                }
            }else{
                $this->error($cate->getError());
            }
            return;
        }

        $cates = $cate->catetree();
        $this->assign('cates',$cates);
        $this->display();
    }
    public function edit(){
        $cate = D('Cate');
        $cateid = I('cateid');
        if(IS_POST){
            if($cate->create()){
                if($cate->save()){
                    $this->success('栏目修改成功',U('lst'));
                }else{
                    $this->error('栏目修改失败');
                }
            }else{
                $this->error($cate->getError());
            }
            return;
        }
        $cates = $cate->catetree();
        $this->assign('cates',$cates);
        $msgcate = $cate->find($cateid);
        $this->assign('msgcate',$msgcate);
        $this->display();
    }

    public function del($cateid){
        $cate = D('Cate');
        if($cate->delete($cateid)){
            $this->success('删除成功',U('lst'));
        }else{
            $this->error("删除失败");
        }
    }
}