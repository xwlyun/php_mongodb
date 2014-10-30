<?php

$m = new Mongo("127.0.0.1");
$db = $m->admin;
$tb = $db->users;

/**
 * insert
 */
//$insert_data = array(
//	array('user_id'=>3,'name'=>'Lucy','age'=>33),
//	array('user_id'=>4,'name'=>'Cat','age'=>41),
//	array('user_id'=>5,'name'=>'Dog','age'=>11),
//	array('user_id'=>6,'name'=>'Bob','age'=>16),
//	array('user_id'=>7,'name'=>'Tree','age'=>18),
//	array('user_id'=>3,'name'=>'Boom','age'=>29),
//);
//foreach($insert_data as $data){
//	$tb->insert($data);
//}

/**
 * count
 */
//$count = $tb->count();
//var_dump($count);

/**
 * getrow
 */
//$data = $tb->findOne();
//var_dump($data);

/**
 * getrows
 */
//$data = $tb->find();
//foreach ($data as $k=>$v){
//	var_dump($k);
//	var_dump($v);
//}

/**
 * where `user_id`=2
 */
//$condition = array('user_id'=>2);
//$data = $tb->find($condition);
//while($data->hasNext()){
//	var_dump($data->getNext());
//}

/**
 * where `age`>10 and `age`<20 limit 1,2
 */
//$condition = array('age'=>array('$gt'=>10,'$lte'=>20));
//$data = $tb->find($condition)->limit(2)->skip(1);
//while($data->hasNext()){
//	var_dump($data->getNext());
//}

/**
 * limit 0,10
 */
//$data = $tb->find()->limit(10)->skip(0);
//foreach($data as $k=>$v){
//	var_dump($v['name']);
//}

/**
 * order by `age` desc
 * 1 asc；-1 desc；
 */
$data = $tb->find()->sort(array('age'=>-1));
foreach($data as $k=>$v){
	var_dump($v['age']);
}

/**
 * close
 */
$m->close();

?>