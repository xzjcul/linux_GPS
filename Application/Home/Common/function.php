<?php
function SidType($sid){
    $Data=M('Cate');
    $where['parentid']=$sid;
    $list=$Data->where($where)->select();
    return $list;
}
function getSatById($id)
{
    if ($id >= 1 && $id <= 32) {
        return sprintf("G%02d", $id);
    } else if ($id >= 33 & $id <= 48) {
        return sprintf("C%02d", $id-32);
    }else{
        return sprintf("X%02d", $id);
    }
}
function echoSat($id){
    echo getSatById($id);
}

?>