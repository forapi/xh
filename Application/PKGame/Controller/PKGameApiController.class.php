<?php
namespace PKGame\Controller;
use Think\Controller;
class PKGameApiController extends Controller {
    public function index(){
    	$Users = M("Users");
    	$p = 0;
    	//$out = $Users->where('sex=0')->order('id')->limit(10)->select();
    	$out = $Users->where('sex='.$p)->order('rand()')->limit(2)->select();
    	
    	print_r($out);
        
    }

    public function newvote(){
    	header('Content-type: application/json; charset=utf-8');
    	
    	$Users = M("Users");
    	
    	$out = $Users->where('sex='.$_POST['sex'])->order('rand()')->limit(2)->select();
    	//print_r($out);
    	
    	//$sql = 'SELECT * FROM `xiaohua_users` WHERE `sex`= 0 ORDER BY rand() limit 2';
    	
    	$array = array('status' => 8000,
    		'content' => $out);
    	echo json_encode($array);
    	

    
        
    }


    public function ranking(){
    	header('Content-type: application/json; charset=utf-8');
    	$ranking_0 = '{"status":8200,"content":[{"nickname":"\u9648\u601d\u9896","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"0","rank":"1600","src_img":"http:\/\/pkphoto.qiniudn.com\/b37b0276ab6319735c8e00b4a4f8aa7d?imageView\/2\/w\/480"},{"nickname":"\u6731\u5723\u4f9d","school":"\u4e1c\u839e\u7406\u5de5\u5b66\u9662","sex":"0","rank":"1591","src_img":"http:\/\/pkphoto.qiniudn.com\/13eb624682415b6782c45184d0a6b1aa?imageView\/2\/w\/480"},{"nickname":"\u80d6\u58a9\u513f\uff5e","school":"\u4e1c\u839e\u804c\u4e1a\u6280\u672f\u5b66\u9662","sex":"0","rank":"1556","src_img":"http:\/\/pkphoto.qiniudn.com\/7419c9e9eef07a941c6813b9a33dcdca?imageView\/2\/w\/480"},{"nickname":"abbyabbiebaby","school":"\u5e7f\u4e1c\u79d1\u6280\u5b66\u9662","sex":"0","rank":"1546","src_img":"http:\/\/pkphoto.qiniudn.com\/44573ccb6f8f1fdd8486ea7b94e06ac3?imageView\/2\/w\/480"},{"nickname":"Fyin","school":"\u4e1c\u839e\u7406\u5de5\u5b66\u9662","sex":"0","rank":"1538","src_img":"http:\/\/pkphoto.qiniudn.com\/c726f9caf1ace7f88b81f913738cb745?imageView\/2\/w\/480"},{"nickname":"\u80e1\u742c\u7b1b","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"0","rank":"1534","src_img":"http:\/\/pkphoto.qiniudn.com\/c5c02a9379f55cc50df36e3b001a3d74?imageView\/2\/w\/480"},{"nickname":"\u8bb8\u4e39\u6d52","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"0","rank":"1520","src_img":"http:\/\/pkphoto.qiniudn.com\/ec29622139324ad03933683b81efec55?imageView\/2\/w\/480"},{"nickname":"fish","school":"\u5e7f\u4e1c\u79d1\u5b66\u804c\u4e1a\u6280\u672f\u5b66\u9662","sex":"0","rank":"1512","src_img":"http:\/\/pkphoto.qiniudn.com\/14a8ad0b991827b541a1c48464efcfbe?imageView\/2\/w\/480"},{"nickname":"\u5c0f\u9f99\u4eba","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"0","rank":"1511","src_img":"http:\/\/pkphoto.qiniudn.com\/d25076539800e1bba824120742bfe2c1?imageView\/2\/w\/480"},{"nickname":"sh","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"0","rank":"1508","src_img":"http:\/\/pkphoto.qiniudn.com\/4c35f5dc9c76ed13582d7e35a22b83c5?imageView\/2\/w\/480"},{"nickname":"terrible","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"0","rank":"1506","src_img":"http:\/\/pkphoto.qiniudn.com\/124decf861b046283f1c4b7fde24eeb4?imageView\/2\/w\/480"},{"nickname":"\u742a","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"0","rank":"1498","src_img":"http:\/\/pkphoto.qiniudn.com\/53e32cad0decb4f6b3ddf9c2c19c28ea?imageView\/2\/w\/480"},{"nickname":"Carrie","school":"\u5e7f\u4e1c\u79d1\u6280\u5b66\u9662","sex":"0","rank":"1493","src_img":"http:\/\/pkphoto.qiniudn.com\/d716daff9b3b467dc3a9a67ba0e84667?imageView\/2\/w\/480"},{"nickname":"Ramya","school":"\u4e1c\u839e\u7406\u5de5\u5b66\u9662","sex":"0","rank":"1492","src_img":"http:\/\/pkphoto.qiniudn.com\/b8c544ffd3f3f7369610e7a29ebb6d0e?imageView\/2\/w\/480"},{"nickname":"\u65b9\u6dd1\u8335","school":"\u4e1c\u839e\u7406\u5de5","sex":"0","rank":"1486","src_img":"http:\/\/pkphoto.qiniudn.com\/572157f1022bfe359cc8dc72dd63f713?imageView\/2\/w\/480"},{"nickname":"sajoky","school":"\u4e1c\u839e\u7406\u5de5\u57ce\u5e02\u5b66\u9662","sex":"0","rank":"1480","src_img":"http:\/\/pkphoto.qiniudn.com\/6c600e9d93b2bd5f86ad36ae42aab2b7?imageView\/2\/w\/480"},{"nickname":"selina","school":"\u7559\u5b66\u751f","sex":"0","rank":"1474","src_img":"http:\/\/pkphoto.qiniudn.com\/bc4bc2d3e1134977204857ad90e78208?imageView\/2\/w\/480"},{"nickname":"\u5c01\u9633\u683c\u683c","school":"\u7559\u5b66\u751f","sex":"0","rank":"1473","src_img":"http:\/\/pkphoto.qiniudn.com\/de79eb968b24be77d3cbd849cbe92746?imageView\/2\/w\/480"},{"nickname":"***","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"0","rank":"1470","src_img":"http:\/\/pkphoto.qiniudn.com\/0720f4f9abcf3179687a0f0b3693adf9?imageView\/2\/w\/480"},{"nickname":"\u9762\u9762","school":"\u4e1c\u839e\u7406\u5de5\u5b66\u9662","sex":"0","rank":"1470","src_img":"http:\/\/pkphoto.qiniudn.com\/9f3986556822bc6b2ad2d650a2e6bda2?imageView\/2\/w\/480"}]}';

    	$ranking_1 = '{"status":8200,"content":[{"nickname":"\u949f\u4fca\u654f","school":"\u5e7f\u4e1c\u79d1\u6280\u5b66\u9662","sex":"1","rank":"1523","src_img":"http:\/\/pkphoto.qiniudn.com\/0704023ade23522742ff830231ed3cba?imageView\/2\/w\/480"},{"nickname":"\u5e7f\u533b\u4e03\u680b\u2026\u6211\u7684\u5c0f\u7537\u795e","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1521","src_img":"http:\/\/pkphoto.qiniudn.com\/614bb1628c1536afc23999b4a6f54f01?imageView\/2\/w\/480"},{"nickname":"huangjuhang","school":"\u4e1c\u839e\u7b2c\u516b\u9ad8\u7ea7\u4e2d\u5b66","sex":"1","rank":"1464","src_img":"http:\/\/pkphoto.qiniudn.com\/5948e083c2300e22bb8b3f897175448d?imageView\/2\/w\/480"},{"nickname":"Ivan Lee","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1445","src_img":"http:\/\/pkphoto.qiniudn.com\/18e0d700fec4aeba3372b55db183266f?imageView\/2\/w\/480"},{"nickname":"\u621a\u6d01\u83b9","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1442","src_img":"http:\/\/pkphoto.qiniudn.com\/bbd33c4a5b70133c8287aaeb1c1b1a6f?imageView\/2\/w\/480"},{"nickname":"190","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1426","src_img":"http:\/\/pkphoto.qiniudn.com\/e78d3f6a4e4c28d0f297a5402dcd2d45?imageView\/2\/w\/480"},{"nickname":"\u756a\u85af","school":"\u5e7f\u827a","sex":"1","rank":"1419","src_img":"http:\/\/pkphoto.qiniudn.com\/76da7918f7588122ca95b49278fb36e6?imageView\/2\/w\/480"},{"nickname":"\u51bc\u5148\u751f","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1411","src_img":"http:\/\/pkphoto.qiniudn.com\/86d61d49573e56afcd83811a53bfe2e6?imageView\/2\/w\/480"},{"nickname":"JOSEPH","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1406","src_img":"http:\/\/pkphoto.qiniudn.com\/0743b99e1d5eed15a94f1a7d64942727?imageView\/2\/w\/480"},{"nickname":"\u5e84\u7965","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1404","src_img":"http:\/\/pkphoto.qiniudn.com\/53ae5535170fc5330aa7f789f38568dd?imageView\/2\/w\/480"},{"nickname":"cj\u4ed4","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1385","src_img":"http:\/\/pkphoto.qiniudn.com\/9d6e597de10f194cb408ab64f22889d4?imageView\/2\/w\/480"},{"nickname":"\u62cd\u62cd\u718a","school":"\u4e1c\u839e\u7406\u5de5\u5b66\u9662","sex":"1","rank":"1379","src_img":"http:\/\/pkphoto.qiniudn.com\/b890b1a5494a4c6abeef068873d21804?imageView\/2\/w\/480"},{"nickname":"\u52c3\u54e5","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1370","src_img":"http:\/\/pkphoto.qiniudn.com\/2a0177b02e6ee0dd5756665060f3fc26?imageView\/2\/w\/480"},{"nickname":"\u90b1\u2026\u2026","school":"\u5e7f\u533b","sex":"1","rank":"1370","src_img":"http:\/\/pkphoto.qiniudn.com\/e597e0d75e36dc160bf637e8320a1fc4?imageView\/2\/w\/480"},{"nickname":"\u7537\u6a21\u6b27","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1365","src_img":"http:\/\/pkphoto.qiniudn.com\/5de5f2e23222a0b66b033ca0caa0be1a?imageView\/2\/w\/480"},{"nickname":"\u658c\u658c\u658c","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1364","src_img":"http:\/\/pkphoto.qiniudn.com\/572f313159508986e47719c3f88f4a54?imageView\/2\/w\/480"},{"nickname":"\u90a6\u90a6","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1362","src_img":"http:\/\/pkphoto.qiniudn.com\/4840329017267ae8658a4100c58c0b41?imageView\/2\/w\/480"},{"nickname":"ice~\u5fd7\u5f3a","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1356","src_img":"http:\/\/pkphoto.qiniudn.com\/305797d45f2e012c4f95171d1ec4f568?imageView\/2\/w\/480"},{"nickname":"\u6ce2\u6ce2","school":"\u5e7f\u4e1c\u533b\u5b66\u9662","sex":"1","rank":"1353","src_img":"http:\/\/pkphoto.qiniudn.com\/08d11106968655d6222441d16b7e9b2e?imageView\/2\/w\/480"},{"nickname":"\u674e\u5b66\u53cb","school":"\u4ef2\u607a\u519c\u4e1a\u5de5\u7a0b\u5b66\u9662","sex":"1","rank":"1348","src_img":"http:\/\/pkphoto.qiniudn.com\/3cb0e3fb8a88afad0b2e3d84bca39f27?imageView\/2\/w\/480"}]}';
    	if ($_POST['sex'] == 0 ) {
    		echo $ranking_0;
    	}elseif ($_POST['sex'] == 1) {
    		echo $ranking_1;
    	}

    }

    public function vote(){
    	header('Content-type: application/json; charset=utf-8');
    	

    	echo '{"status":8100}';

    }

    public function report(){
    	
    }
}