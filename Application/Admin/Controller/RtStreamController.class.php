<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Cache\Driver\Redis;
class RtStreamController extends AuthController {
    public function index(){
        $redis = new Redis();
        if($redis->exists('rtstream')){
            $b = $redis->get('rtstream');
            $rs = unserialize($b);
            $this->assign('result',$rs);
        }else{
            $this->assign('ale','暂无数据');
        }
        $this->display();
    }

    public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('xls', 'xlsx');// 设置附件上传类
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =      '/'; // 设置附件上传目录
        // 上传文件
        $info   =   $upload->uploadOne($_FILES['rtstream']);
        $filename = $upload->rootPath.$info['savepath'].$info['savename'];
        $exts = $info['ext'];
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功后面保存数据
            $this->excel_import($filename, $exts);
        }
    }

    //提取数据返回一个二维数组
    public function excel_import($filename, $exts='xls'){
        //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能import导入
        import("Org.Util.PHPExcel");
        //创建PHPExcel对象，注意，不能少了\
        $PHPExcel=new \PHPExcel();
        //如果excel文件后缀名为.xls，导入这个类
        if($exts == 'xls'){
            import("Org.Util.PHPExcel.Reader.Excel5");
            $PHPReader=new \PHPExcel_Reader_Excel5();
        }else if($exts == 'xlsx'){
            import("Org.Util.PHPExcel.Reader.Excel2007");
            $PHPReader=new \PHPExcel_Reader_Excel2007();
        }
        //取出上传的excel里面的数据
        //载入文件
        $PHPExcel=$PHPReader->load($filename);
        //获取表中的第一个工作表，如果要获取第二个，把0改为1，依次类推
        $currentSheet=$PHPExcel->getSheet(0);
        //获取总列数
        $allColumn=$currentSheet->getHighestColumn();
        //获取总行数
        $allRow=$currentSheet->getHighestRow();
        //循环获取表中的数据，$currentRow表示当前行，从哪行开始读取数据，索引值从0开始
        $cell = array();
        for($currentRow=1;$currentRow<=$allRow;$currentRow++){
            //从哪列开始，A表示第一列
            for($currentColumn='A';$currentColumn<=$allColumn;$currentColumn++){
                //数据坐标
                $address=$currentColumn.$currentRow;
                //读取到的数据，保存到数组$arr中
                $cell[$currentRow][$currentColumn] =$currentSheet->getCell($address)->getValue();
                if($cell instanceof PHPExcel_RichText){
                    $cell = $cell->__toString();
                }
            }
        }
        $this->getCell($cell);
        //return $cell;
    }

    //把数据转换为json格式保存到redis数据库
    public function getCell($data){
        if(false !== $data || 0 !== $data){
            $redis = new Redis();
            $redis->set('rtstream',serialize($data));
            $this->success('上传成功');
        }else{
            $this->error('上传失败');
        }
    }
}