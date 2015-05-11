<?php
namespace PKGame\Model;
use Think\Model;
class UserModel extends Model{
	protected $tableName = 'users';

	public function index(){
		//echo 'haha';
		$Users = M("Users");
    	
    	$out = $Users->where('sex=0')->order('id')->limit(2)->field('nickname,school,sex,src_img')->select();
        return $out;
	}

	public function newvote(){
		$Users = M("Users");
    	
    	$out = $Users->where('sex='.$_POST['sex'])->order('rand()')->limit(2)->select();//因为vote中需要对应的id
    	
    	session('session_array',$out);
        unset($out[0]['id'],$out[1]['id']);//id不带入到json
        
        return $out;
    	
    	
	}

	public function ranking(){
		
    	$Users = M('Users');
    	if(isset($_POST['sex']))
    	    $out = $Users->where('sex='.$_POST['sex'])->order('rank desc')->limit(20)->field('nickname,school,sex,rank,src_img')->select();
    	else
    		$out = fales;
    	return $out;
	}

	public function vote(){
		$session_array = session('session_array');
		$Users = M("Users");
        $res = true;
        if ($_POST['id'] == 0 || $_POST['id'] == 1) {
        	$id = $_POST['id'];
        	$sqlid =$session_array[$id]['id'];
        	$res = $Users->where('id='.$sqlid)->setInc('rank');//+1
        }
        
        session(null);
        return $res;
	}

	public function report(){}
}