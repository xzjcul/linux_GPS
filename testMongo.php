<?php
$m = new MongoClient();
//创建test的数据库
$db = $m->test;

//创建结合（表）
//$collection = $db->createCollection('sxf');

//选择集合
$collection = $db->sxf;
/*$document = array(
    "title"=>'Mongodb',
    "description" => "database",
    "likes" => 100,
    "url" => "http://www.runoob.com/mongodb/",
    "by",
    "sxf"
);

$collection->insert($document);*/

//查找文档
$resu = $collection->find();
foreach ($resu as $doc){
    echo $doc['title'].'---'.$doc['url'];
}

?>