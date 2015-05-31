<?php
namespace PKGame\Controller;
use Think\Controller;
class PKGameApiController extends Controller {
    public function index(){
        /**
    	$Users = M("Users");
    	$p = 0;
    	//$out = $Users->where('sex=0')->order('id')->limit(10)->select();
    	//$out = $Users->where('sex='.$p)->order('rand()')->limit(2)->select();
        $out = $Users->where('sex=0')->order('id')->limit(2)->field('nickname,school,sex,src_img')->select();
    	
    	print_r($out[0]);
        
        $user = D('user');
        $out = $user->index();
        print_r($out);
       */
        
    }

    public function newvote(){
        
    	header('Content-type: application/json; charset=utf-8');
    	
    	$user = D('user');
        $out = $user->newvote();
        $out[0]['src_img']  = $out[0]['src_img'].'/w/240/';//图片宽度设为240
        $out[1]['src_img']  = $out[1]['src_img'].'/w/240/';//图片宽度设为240
        $array = array('status' => 8000,
            'content' => $out);
        echo json_encode($array);
        
    }


    public function ranking(){
    	header('Content-type: application/json; charset=utf-8');
    	$user = D('user');
        $out = $user->ranking();
        $out[0]['src_img']  = $out[0]['src_img'].'/w/240/';//图片宽度设为240
        $out[1]['src_img']  = $out[1]['src_img'].'/w/240/';//图片宽度设为240
        if ($out) {
            $array = array('status' => 8200, 
                'content' => $out);
        }
        echo json_encode($array);

    }

    public function vote(){
    	header('Content-type: application/json; charset=utf-8');
    	/**
        if(!isset(cookie('num')){
            $num = 1;
            cookie('num',$num+1);
        }else{
            $num = cookie('num') + 1 ;
            cookie('num',$num);
            $num = cookie('num');
        }
*/

        if ($_POST['mugen']==1) {//从公众号出的链接
            setcookie('num',null);
            $user = D('user');
            $res = $user->vote();
            if ($res) echo '{"status":8100}';
        }else{
            if(!isset($_COOKIE['num'])){
                $num = 0;
                setcookie('num',$num+1);
            }else{
                $num = $_COOKIE['num'] + 1 ;
                setcookie('num',$num);
                $num = $_COOKIE['num'];
            }

            if ($num < 6) {//限制5次
                $user = D('user');
                $res = $user->vote();
                if ($res) echo '{"status":8100}';
            }else{
                echo '{"status":8102}';//限制浏览
            }
        }
        

        
        
        


    }

    public function report(){
    	
    }
}