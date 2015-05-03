<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
   public function dao(){
       for ($i=1; $i < 972; $i++) { 
           $f = fopen ("./1/{$i}", "r");
           $ln= 0;
           while (! feof ($f)) {
               $line= fgets ($f);
               ++$ln;
               if ($line===TRUE || $ln == 12) {
        	   $array = json_decode($line,TRUE);
                   if(is_array($array)){//过滤错误的文件
                       $array_all[] = $array['content'][0];
        	       $array_all[] = $array['content'][1];
                   }
               }
           }
           fclose ($f);
      }
      //$model = M('users');
      //$idNum = $model->addAll($array_all);
//print_r($array_all[1][0]);
      //dump($idNum);
      //print_r($array_all);
    }
}
