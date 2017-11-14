<?php
namespace Admin\Model;
use Think\Model;

class CateModel extends Model{
    protected $_validate = array(
        array('name','require','栏目名称必填！',1,'regex',3), //默认情况下用正则进行验证
        array('name','','栏目名称不能重复！',1,'unique',3), // 在新增的时候验证name字段是否唯一
    );

    //栏目排序

    public function catetree(){
        $data = $this->select();
        return $this->resort($data);
    }

    public function resort($data,$parentid=0,$level=0){
        static $ret = array();
        foreach ($data as $k=>$v){
            if($v['parentid']==$parentid){
                $v['level'] = $level;
                $ret[] = $v;
                $this->resort($data,$v['id'],$level+1);
            }
        }
        return $ret;
    }

    public function addCate(){
        if($this->add()){
            return true;
        }else{
            return false;
        }
    }

    public function editCate($cateid){
        $curcate = $this->find($cateid);
        return $curcate;
    }


}



?>