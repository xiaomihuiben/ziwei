<?php /* Smarty version 2.6.25, created on 2019-03-01 11:24:32
         compiled from ./h5/header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html autopagermatchedrules="1">
<head>
    <title><?php echo $this->_tpl_vars['seo']['title']; ?>
</title>
    <meta name="Keywords" content="<?php echo $this->_tpl_vars['seo']['keywords']; ?>
"/>
    <meta name="description" content="<?php echo $this->_tpl_vars['seo']['description']; ?>
">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="applicable-device"content="mobile">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="https://www.03ky.com/template/qu_app/touch/style/css/favicon.ico"/>
    <link href="/static/css/mb.css" type="text/css" rel="stylesheet">
    <script src="/static/js/dm.js" type="text/javascript"></script>
    <script src="/static/js/jquery-1.7.2.js" type="text/javascript"></script>
    <script src="/static/js/fun.js" type="text/javascript"></script>
</head>
<body>
<div id="header">
    <div class="h_box index" id="wrap">
        <small><a href="/"><img src="/static/img/logo_banner.png" border="0"></a></small>
    </div>
</div>
<div class="menu" id="menu">
			<ul>
				<li><a href="/" class="current">首页</a></li>
				<li><a href="/suanming/scbz/">算命大全</a></li>
				<li><a href="/haoma/">号码吉凶</a></li>
				<li><a href="/peidui/hehun">配对查询</a></li>
				<li><a href="/chouqian/">抽签占卜</a></li>
				<li><a href="/minjian/zhiwen/">民间预测</a></li>
				<li><a href="/xingzuo/">十二星座</a></li>
				<li><a href="/shengxiao/">十二生肖</a></li>
				<li><a href="/zgjm/">周公解梦</a></li>
			</ul>
		</div>
<script>
//下拉导航
function dhxlcdgn() {
    $("#dhxlcd").on("click", function () {
        dhxlcdgn_add();
        var obj = $("#dhxlcdgn");
        obj.height($(window).height() + 100).slideToggle(200).on('touchmove', function (e) { e.preventDefault(); }, false);
        return false;
    });
}
function dhxlcdgn_add() {
    var obj = $("#dhxlcdgn");
    if (obj.length > 0) { return; }

    var html = '<nav id="dhxlcdgn" class="dhxlcdgn">' +
	    '<ul class="nav_list">' +
		'<p>开运网你身边值得信赖的命理顾问专家</p>' +
		    '<li><a href="https://www.03ky.com/">首页</a></li>' +
            '<li><a href="https://www.03ky.com/xingzuo/">星座</a></li>' +
            '<li><a href="https://www.03ky.com/bzsm/">八字</a></li>' +
            '<li><a href="https://www.03ky.com/m/peidui/">配对</a></li>' +
            '<li><a href="http://csk.52ddtest.cn/?ac=yinyuancs">感情</a></li>' +
            '<li><a href="https://www.03ky.com/shengxiao/">生肖</a></li>' +
            '<li><a href="https://www.03ky.com/zt/taisui.html">太岁</a></li>' +
            '<li><a href="https://www.03ky.com/zt/caiyunxian.html">财运</a></li>' +
            '<li><a href="https://www.03ky.com/jiemeng/">解梦</a></li>' +
		    '<li><a href="https://www.03ky.com/zt/taohuayun.html">桃花</a></li>' +
		    '<li><a href="https://www.03ky.com/jiajufengshui/">风水</a></li>' +
		    '<li><a href="https://www.03ky.com/kanxiang/">相术</a></li>' +
		    '<li><a href="https://www.03ky.com/xingming/">起名</a></li>' +
		    '<li><a href="http://csk.52ddtest.cn/?ac=xmfx">姓名</a></li>' +
            '<li><a href="https://www.03ky.com/zt/zhanxing.html">占星</a></li>' +
            '<li><a href="https://www.03ky.com/zt/benmingnian.html">本命</a></li>' +
            '<li><a href="https://www.03ky.com/2018/m.html">戊戌</a></li>' +
            '<li><a href="http://csk.52ddtest.cn/?ac=hehun">合婚</a></li>' +
            '<li><a href="https://www.03ky.com/zt/fanxiaoren.html">小人</a></li>' +
            '<li><a href="https://www.03ky.com/forum.php?forumlist=1" style="color:#ff0000;" >社区</a></li>' +
	    '</ul>' +
	    '<ul class="nav_icon">' +
		    '<li><a href="http://csk.52ddtest.cn/?ac=hehun"><img src="https://www.03ky.com/m/tu/cs/111.png" />配对</a></li>' +
		    '<li><a href="http://csk.52ddtest.cn/?ac=yinyuancs"><img src="https://www.03ky.com/m/tu/cs/99.png" />姻缘</a></li>' +
		    '<li><a href="http://csk.52ddtest.cn/?ac=bazi"><img src="https://www.03ky.com/m/tu/cs/44.png" />批八字</a></li>' +
		    '<li><a href="http://csk.52ddtest.cn/?ac=xmfx"><img src="https://www.03ky.com/m/tu/cs/88.png" />姓名</a></li>' +
		    '<li><a href="http://csk.52ddtest.cn/?ac=bazizh"><img src="https://www.03ky.com/m/tu/cs/pibazi1.png" />综合</a></li>' +
		    '<li><a href="https://www.03ky.com/lb-41-1.html"><img src="https://www.03ky.com/m/tu/cs/jiemeng.png" />解梦</a></li>' +
		    '<li><a href="https://www.03ky.com/lb-52-1.html"><img src="https://www.03ky.com/m/tu/cs/guihua.png" />鬼话</a></li>' +
		    '<li><a href="https://www.03ky.com/lb-51-1.html"><img src="https://www.03ky.com/m/tu/cs/zatan.png" />杂谈</a></li>' +
		    '<li><a href="https://www.03ky.com/lb-46-1.html"><img src="https://www.03ky.com/m/tu/cs/liuyao.png" />六爻</a></li>' +
		    '<li><a href="https://www.03ky.com/lb-43-1.html"><img src="https://www.03ky.com/m/tu/cs/qimen.png" />奇门</a></li>' +
		    '<li><a href="https://www.03ky.com/lb-2-1.html"><img src="https://www.03ky.com/m/tu/cs/qiuce.png" />求测</a></li>' +
		    '<li><a href="https://www.03ky.com/lb-44-1.html/"><img src="https://www.03ky.com/m/tu/cs/meihua.png" />易数</a></li>' +
		    '<li><a href="https://www.03ky.com/lb-37-1.html"><img src="https://www.03ky.com/m/tu/cs/shipin.png" />视频</a></li>' +
		    '<li><a href="https://www.03ky.com/lb-36-1.html"><img src="https://www.03ky.com/m/tu/cs/ziliao.png" />资料</a></li>' +
		    '<li><a href="https://www.03ky.com/lb-48-1.html"><img src="https://www.03ky.com/m/tu/cs/zhanwu.png" />站务</a></li>' +
	    '</ul>' +
	    '<a id="NAV_CLOSE_BTN" href="javascript:;" class="nav_close"><p>X</p></a>' +
    '</nav>';
    $("body").append(html);

    //关闭按钮
    obj = $("#dhxlcdgn");
    $("#NAV_CLOSE_BTN").on("click", function () {
        obj.height($(window).height() + 100).slideToggle(200).on('touchmove', function (e) { e.preventDefault(); }, false);
    });
}
$(document).ready(function () {
    dhxlcdgn();
});
</script>
<!--请勿删除，更新提示用的-->
<script type="text/javascript" src="https://www.03ky.com/api.php?mod=js&bid=209"></script>