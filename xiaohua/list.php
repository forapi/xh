<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <title>微信 7栋空间</title>

    <!-- Bootstrap -->
    <!--<link href="template/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="template/css/bootstrap.css" rel="stylesheet">
    <!--<link href="template/css/bootstrap-theme.css" rel="stylesheet">-->
    <!--<link href="template/css/bootstrap-theme.min.css" rel="stylesheet">-->
    <link href="template/css/xiaohuastyle.css" rel="stylesheet">
	<script src="jquery-1.9.1.min.js"></script>
	<script src="xiaohua.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
		<script>
		$(function(){
		PKGameInitialization({function:"ranking",argument:<?if(!isset($_GET['s']))  echo 0 ; else  echo $_GET['s']; ?>,mugen:0}); 
		})
	</script>
</head>
<body>

<div class="container2 projects">


    <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">

            <ul class="nav navbar-nav">
                <li><a href="index.php?s=0">女生PK</a></li>
                <li><a href="index.php?s=1">男生PK</a></li>
                <li class="active"><a href="list.php?s=0">女生榜</a></li>
                <li ><a href="list.php?s=1">男生榜</a></li>
            </ul>

    </nav>
	<div id="ranking">
		<h3 id="title" style="text-align: center">全民自拍比赛排行榜<br><small id="sex">女生</small></h3>
	</div>
    
	<div id="RankingList">
	</div>


    <p style="text-align: center"><a href="http://mp.weixin.qq.com/s?__biz=MjM5ODAyNTc4MA==&mid=201652606&idx=4&sn=3647b44ab33891f91679d107605baecb#rd" class="btn btn-primary" role="button">我也要参加</a></p>
<div class="footinfo">
    <p class="text-center"><small>活动主办：<a href="http://www.7dong.cc/forum.php?mod=viewthread&tid=102280">7栋空间</a></small></p>
    <p class="text-center"><small>开发团队：<a href="http://www.wowdg.com">哇塞文化</a> 微店啦</small></p>
    <p class="text-center"><small>赞助单位：<a href="http://w.7dong.cc/xiaohua/zanzhu/yuanchuang/">元创摄影</a> <a href="http://w.7dong.cc/xiaohua/zanzhu/liulian/">榴莲摄影</a> 星巴克松山湖店</small></p>

</div>
</div>

<script>
var imgUrl='http://w.7dong.cc/xiaohua/images/wxshare.jpg';var lineLink='http://w.7dong.cc/xiaohua/';var descContent='哪所大学美女最多？史上最真实的自拍大PK!';var shareTitle='哪所大学美女最多？史上最真实的自拍大PK!';var appid='wxda8b1307f44c0840';function shareFriend(){WeixinJSBridge.invoke('sendAppMessage',{"appid":appid,"img_url":imgUrl,"img_width":"640","img_height":"640","link":lineLink,"desc":descContent,"title":shareTitle},function(res){_report('send_msg',res.err_msg);})}
function shareTimeline(){WeixinJSBridge.invoke('shareTimeline',{"img_url":imgUrl,"img_width":"640","img_height":"640","link":lineLink,"desc":descContent,"title":shareTitle},function(res){_report('timeline',res.err_msg);});}
function shareWeibo(){WeixinJSBridge.invoke('shareWeibo',{"content":descContent,"url":lineLink,},function(res){_report('weibo',res.err_msg);});}
document.addEventListener('WeixinJSBridgeReady',function onBridgeReady(){WeixinJSBridge.on('menu:share:appmessage',function(argv){shareFriend();});WeixinJSBridge.on('menu:share:timeline',function(argv){shareTimeline();});WeixinJSBridge.on('menu:share:weibo',function(argv){shareWeibo();});},false);
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="template/js/bootstrap.min.js"></script>
</body>
</html>