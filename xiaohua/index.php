<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>微信 7栋空间</title>

    <!--<link href="template/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="template/css/bootstrap.css" rel="stylesheet">
    <!--<link href="template/css/bootstrap-theme.css" rel="stylesheet">-->
    <!--<link href="template/css/bootstrap-theme.min.css" rel="stylesheet">-->
    <link href="template/css/xiaohuastyle.css" rel="stylesheet">
	<script src="jquery-1.9.1.min.js"></script>
	<script src="template/js/bootstrap.min.js"></script>

		<script src="xiaohua.js"></script>
	<script>
	$(function(){
			PKGameInitialization({function:"newvote",argument:<?if(!isset($_GET['s']))  echo 0 ; else  echo $_GET['s']; ?>,mugen:0});
		})
	</script>
</head>
<body>

<div class="container2 projects">


    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">

            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php?s=0">女生PK</a></li>
                <li ><a href="index.php?s=1">男生PK</a></li>
                <li><a href="list.php?s=0">女生榜</a></li>
                <li><a href="list.php?s=1">男生榜</a></li>
            </ul>

    </nav>

    <h3 class="text-center" style="margin: 10px 0">全民自拍比赛<br></h3>
<div class="row">
    <div id="user0" class="col-xs-6 col-md-6 pxbox">
        <div class="thumbnail">
            <div class="imgheight"><a class="votebtn" href="javascript:void(0)"><img class="thumb" src="Preloader_4.gif"></a><s></s></div>
            <div class="caption" style="padding-bottom: 0px;">
                <p style="text-align: center;"><span class="nickname"></span> <span class="school"></span></p>
                <p class="text-center"><a href="javascript:void(0)" who=0 class="btn_zan" role="button"></a></p>

            </div>
        </div>
        <p class="report"><a class="reportBtn" who="0" href="javascript:void(0)">举报</a></p>
    </div>
    <div id="user1" class="col-xs-6 col-md-6 pxbox">
        <div class="thumbnail">
            <div class="imgheight"><a class="votebtn" href="javascript:void(0)"><img class="thumb" src="Preloader_4.gif"></a></div>
            <div class="caption" style="padding-bottom: 0px">
                <p style="text-align: center;"><span class="nickname"></span> <span class="school"></span></p>
                <p class="text-center"><a href="javascript:void(0)" who=1  class="btn_zan" role="button"></a></p>
            </div>
        </div>
        <p class="report"><a class="reportBtn" who="1" href="javascript:void(0)">举报</a></p>
    </div>
</div>
<div style="margin:5px"><button type="button" id="pass" class="btn btn-primary btn-block btn-lg" style="display: block;margin: 0 auto;">跳过</button></div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="subscribe" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    接下来更精彩
                </h4>
            </div>
            <div class="modal-body">
                你已经预览了约10%的自拍，还有90%更加精彩的自拍等你浏览<br><br>请在 安卓客户端中打开浏览
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="http://mp.weixin.qq.com/s?__biz=MjM5ODAyNTc4MA==&mid=201680166&idx=2&sn=b85b26759ef922389febbcea17faef1b&key=d330096cec0c849ac411f1ca223b46bde7126bffc6efe4e61c0a1d586a2acb9d428b8bf0468bb5e67649579d660a4f66&ascene=0&uin=MjE4OTYxNQ%3D%3D&devicetype=iMac+MacBookPro11%2C1+OSX+OSX+10.10+build(14A389)&version=11010011&pass_ticket=%2FEpFTIxJrhyt6mWPmpp9jY5y6JJvMbL3Tb1O4d0DjLQ%3D">
                    下一步
                </a>
                <a class="btn btn-primary" href="http://android.myapp.com/myapp/detail.htm?apkName=com.terry.photopk">
                    客户端浏览
                </a>
            </div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>


    <!-- 模态框（Modal） -->
    <div class="modal fade" id="ReportModal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        选择举报的原因
                    </h4>
                </div>
                <div class="modal-body">
				<form id="reportForm" action="#">
					<input id="badguy" type="hidden" name="id" value="null">

                    <label class="radio-inline">
                        <input type="radio" name="repoer_reason" id="inlineRadio2" checked value="0"> 虚假
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="repoer_reason" id="inlineRadio1" value="1"> 色情
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="repoer_reason" id="inlineRadio3" value="2"> 侵犯肖像权
                    </label>

                    <textarea id="report_content" name="report_content" class="form-control" style="margin: 10px 0" placeholder="详细举报原因" rows="2"></textarea>

                    <input id="contact" name="contact" type="text" class="form-control" placeholder="输入你的联系方式">
                </form>
				<div class="report_status"></div>
				</div>
                <div class="modal-footer">
                    <a id="SubmitReport" class="btn btn-primary" href="javascript:void(0)">
                        确定
                    </a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>


    <p class="text-center" style="margin: 22px 0;"><a href="http://android.myapp.com/myapp/detail.htm?apkName=com.terry.photopk">下载安卓客户端看更多美女自拍</a></p>
    <p class="text-center"><a href="http://mp.weixin.qq.com/s?__biz=MjM5ODAyNTc4MA==&mid=201652606&idx=4&sn=3647b44ab33891f91679d107605baecb#rd" class="btn btn-primary" role="button">我也要参加</a></p>
    <p class="text-center"><small><a href="http://wd.koudai.com/?userid=504291">精选首饰</a></small></p>
    <div class="footinfo">
    <p class="text-center"><small>活动主办：<a href="http://www.7dong.cc/forum.php?mod=viewthread&tid=102280">7栋空间</a></small></p>
    <p class="text-center"><small>开发团队：<a href="http://www.wowdg.com">哇塞文化</a> 微店啦</small></p>
    <p class="text-center"><small>赞助单位：<a href="http://w.7dong.cc/xiaohua/zanzhu/yuanchuang/">元创摄影</a> <a href="http://w.7dong.cc/xiaohua/zanzhu/liulian/">榴莲摄影</a> 星巴克松山湖店</small></p>

</div>
</div>

<!--<script src="template/js/bootstrap.min.js"></script>-->



<div class="container">
    <div class="mask" >
    </div>
    <div class="tip"> <img width="160px" style="margin-right: 10px" src="template/images/wechatshare.png"></div>
</div>
</body>

<script>
var imgUrl='http://w.7dong.cc/xiaohua/images/wxshare.jpg';
var lineLink='http://android.myapp.com/myapp/detail.htm?apkName=com.terry.photopk';
//var lineLink='http://w.7dong.cc/xiaohua/';
var descContent='哪所大学美女最多？史上最真实的自拍大PK!';
var shareTitle='哪所大学美女最多？史上最真实的自拍大PK!';
var appid='wxda8b1307f44c0840';
function shareFriend(){WeixinJSBridge.invoke('sendAppMessage',{"appid":appid,"img_url":imgUrl,"img_width":"640","img_height":"640","link":lineLink,"desc":descContent,"title":shareTitle},function(res){_report('send_msg',res.err_msg);})}
function shareTimeline(){WeixinJSBridge.invoke('shareTimeline',{"img_url":imgUrl,"img_width":"640","img_height":"640","link":lineLink,"desc":descContent,"title":shareTitle},function(res){_report('timeline',res.err_msg);});}
function shareWeibo(){WeixinJSBridge.invoke('shareWeibo',{"content":descContent,"url":lineLink,},function(res){_report('weibo',res.err_msg);});}
document.addEventListener('WeixinJSBridgeReady',function onBridgeReady(){WeixinJSBridge.on('menu:share:appmessage',function(argv){shareFriend();});WeixinJSBridge.on('menu:share:timeline',function(argv){shareTimeline();});WeixinJSBridge.on('menu:share:weibo',function(argv){shareWeibo();});},false);
</script>

</html>