<?php
namespace Home\Controller;
use Think\Controller;
use Com\Wechat;
use Org\Net\Http;
header("Content-type: text/html; charset=utf-8"); 
class IndexController extends Controller {
    public function index(){
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        //$this->show('<head><meta http-equiv="refresh" content="0;url=http://shop113647820.taobao.com/"></head>');
        $this->show('<script>window.location.href="http://shop113647820.taobao.com/"</script>');
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

    

    public function getImage($remote=null,$filename=null){

        //$remote = 'http://mmbiz.qpic.cn/mmbiz/O2A1ZMEIfaibVwMOxQdJPSibAvyRlDkNEuEUZDqwDdo11O90y16vNaRNmphne9INYQq0lyyLhsWogiaJbcY3hlwog/0';
        //$filename = time();
        $local = './Upload2/'.$filename;//因为“此图片来自微信公众平台 未经允许不得引用”，所以下载到本地
        //静态方法不用实例化类
        Http::curlDownload($remote,$local);
        //返回值怎么弄？？？
        //echo 'ok';
    }

    public function imageView($imagename=null,$w=null){
        $h=1280;
        $PicUrl = "http://www.putuo3.com/Upload2/".$imagename;
        //$PicUrl = 'http://mmbiz.qpic.cn/mmbiz/'.$imagename.'/0';

        $image = new \Think\Image(\Think\Image::IMAGE_GD,$PicUrl);        
        $image->thumb($w, $h,\Think\Image::IMAGE_THUMB_SCALE)->save();//等比例缩放类型并显示
        
    }

    public function weChat($id = ''){

        $token = 'wechatplay76'; //微信后台填写的TOKEN

        /* 加载微信SDK */
        $wechat = new Wechat($token);

        /* 获取请求信息 */
        $data = $wechat->request();

        if($data && is_array($data)){
            /**
             * 你可以在这里分析数据，决定要返回给用户什么样的信息
             * 接受到的信息类型有9种，分别使用下面九个常量标识
             * Wechat::MSG_TYPE_TEXT       //文本消息
             * Wechat::MSG_TYPE_IMAGE      //图片消息
             * Wechat::MSG_TYPE_VOICE      //音频消息
             * Wechat::MSG_TYPE_VIDEO      //视频消息
             * Wechat::MSG_TYPE_MUSIC      //音乐消息
             * Wechat::MSG_TYPE_NEWS       //图文消息（推送过来的应该不存在这种类型，但是可以给用户回复该类型消息）
             * Wechat::MSG_TYPE_LOCATION   //位置消息
             * Wechat::MSG_TYPE_LINK       //连接消息
             * Wechat::MSG_TYPE_EVENT      //事件消息
             *
             * 事件消息又分为下面五种
             * Wechat::MSG_EVENT_SUBSCRIBE          //订阅
             * Wechat::MSG_EVENT_SCAN               //二维码扫描
             * Wechat::MSG_EVENT_LOCATION           //报告位置
             * Wechat::MSG_EVENT_CLICK              //菜单点击
             * Wechat::MSG_EVENT_MASSSENDJOBFINISH  //群发消息成功
             */
            $type = $data['MsgType'];
            switch ($type) {
                case Wechat::MSG_TYPE_TEXT:
                    //$content = "text";
                    $key = strtolower($data['Content']);
                    //bd+张三+北京大学+男
                    $arr = explode('+', $key);
                    if ($arr[0] == 'bd'){
                        if (count($arr) == 4) {//格式
                            $wx_data['nickname'] = $arr[1];
                            $wx_data['school'] = $arr[2];
                            $wx_data['sex'] = $arr[3] == '男' ? 1:0;
                            $wx_data['open_id'] = $data['FromUserName'];
                            $user = D('user');
                            $res = $user->updataInformation($wx_data);
                            if ($res) {
                                if (-1 === $res) {
                                    $out = '您已经绑定过了';
                                }elseif (-2 === $res) {
                                    $out = '请先上传图片';
                                }else{
                                    $out = 'success';
                                }
                            }else{
                                $out = 'error';
                            }
                        }else{
                            $out = '您输入的格式有问题，请重新输入';
                        }
                        
                        //$out = false === $res ? 'eroor':'success'; 
                        $wechat->replyText($out);
                    }
                    
                    break;
                case Wechat::MSG_TYPE_IMAGE:
                    $user = D('user');
                    
                    $PicUrl = $data['PicUrl'];
                    $FromUserName = $data['FromUserName'];
                    $filename = md5($FromUserName);
                    
                      $wx_data['open_id'] = $data['FromUserName'];
                      $imageViewUrl = "http://www.putuo3.com/?s=/home/Index/imageView/imagename/";
                      $wx_data['src_img'] = $imageViewUrl.$filename.'/w/240/';
                      $res = $user->updataPic($wx_data);
                      //报名信息也填在微信吧
                    
                      switch ($res) {
                          case 8000:
                              $this->getImage($PicUrl,$filename);
                              $text = "图片上传成功！\n请回复“bd+姓名+学校+性别”来绑定，\n例如：bd+张三+北京大学+男";
                              break;

                          case 8001:
                              $this->getImage($PicUrl,$filename);
                              $text = "图片更换成功";
                              break;

                          case -1:
                              $text = "图片已经审核，不可再修改";
                              break;
                            
                          default:
                              $text = "数据出错";
                              break;
                      }
                      
                      
                    $wechat->replyText($text);
                    
                    break;
                case Wechat::MSG_TYPE_VOICE:
                    $content = "voice";
                    break;
                case Wechat::MSG_TYPE_VIDEO:
                    $content = "video";
                    break;
                case Wechat::MSG_TYPE_MUSIC:
                    $content = "music";
                    break;
                case Wechat::MSG_TYPE_NEWS:
                    $content = "news";
                    break;
                case Wechat::MSG_TYPE_LOCATION:
                    $content = "location";
                    break;
                case Wechat::MSG_TYPE_LINK:
                    $content = "link";
                    break;
                case Wechat::MSG_TYPE_EVENT:
                    $content = "event";
                    break;
              
                default:
                    # code...
                    break;
            }

            

            //$content = $data['FromUserName']; //回复内容，回复不同类型消息，内容的格式有所不同
            //$type    = 'text'; //回复消息的类型

            /* 响应当前请求(自动回复) */
            //$wechat->response($content, $type);

            /**
             * 响应当前请求还有以下方法可以只使用
             * 具体参数格式说明请参考文档
             * 
             * $wechat->replyText($text); //回复文本消息
             * $wechat->replyImage($media_id); //回复图片消息
             * $wechat->replyVoice($media_id); //回复音频消息
             * $wechat->replyVideo($media_id, $title, $discription); //回复视频消息
             * $wechat->replyMusic($title, $discription, $musicurl, $hqmusicurl, $thumb_media_id); //回复音乐消息
             * $wechat->replyNews($news, $news1, $news2, $news3); //回复多条图文消息
             * $wechat->replyNewsOnce($title, $discription, $url, $picurl); //回复单条图文消息
             * 
             */
        }
    }
}
