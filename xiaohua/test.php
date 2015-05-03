<?php
$array = array(
    		'status' => 8000,
    		'content' => array(
    			array('nickname' => '游花花', 'school' => '东莞理工学院', 'sex' => '0', 'src_img' => 'http://pkphoto.qiniudn.com/e322a257ad62fcde1fb1b207beb242a5?imageView/2/w/240'),
    			array('nickname' => 'panda', 'school' => '广医', 'sex' => '0', 'src_img' => 'http://pkphoto.qiniudn.com/1186342ec55297cb5c57c31b80de0114?imageView/2/w/240')
    			)
    		);
    	//var_dump($array);exit;
    	$json = json_encode($array);
    	echo $json;
