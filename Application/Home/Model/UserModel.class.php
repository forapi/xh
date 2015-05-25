<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
	protected $tableName = 'users';//需要制定数据表或protected $autoCheckFields =false;
	public function updataPic($data=null){
		
		$Users = M('Users');
		$res = false;
		$exist = $Users->Where('open_id = "'.$data['open_id'].'"')->find();
		if (false === $exist){//查询出错
			$res = false;
		}else{
			if ($exist) {//查询结果不为null
			    if($exist['allow'] == 1) {
				    $res = -1;
			    }else{//上传的图片没有审核前，用户可以更换图片
				    $save = $Users->Where('open_id = "'.$data['open_id'].'"')->save($data);
				    $res = false === $save ? false:8001;
			    }  
			
		    }else{//null
			    $add = $Users->add($data);
			    $res = false === $add ? false:8000;
			    
		    }
		}
		

		return $res;

	}

	public function updataInformation($data){
		$Users = M('Users');
		$exist = $Users->Where('open_id = "'.$data['open_id'].'"')->find();
		if ($exist['nickname'] == ''){
			$save = $Users->Where('open_id = "'.$data['open_id'].'"')->save($data);
		    if (false === $save) {
		    	$res = false;
		    }elseif($save == 0){//图片还没上传
		    	$res = -2;
		    }else{
		    	$res = true;
		    }
		}else{
			$res = -1;
		}
		
		return $res;
	}

	public function check(){
		$Users = M('Users');
		$NeedCheck = $Users->Where('allow = 0')->select();
		return $NeedCheck;
	}

	public function checkAllow($idArray=array()){
		$Users = M('Users');
		$arr_string = join(',', $idArray); //字符串(1,2,3)
		$allow = $Users->Where('id in ('.$arr_string.')')->setField('allow',1);
		if ($allow) {
			return true;
		}
	}
}