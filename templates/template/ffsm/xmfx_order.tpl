<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<title><{$des}>-姓名详批-开运网</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
<link href="/statics/ffsm/public/wap.min.css?v=0817" rel="stylesheet" type="text/css"/>
<link href="/statics/ffsm/jieming/1/jieming.css" rel="stylesheet" type="text/css"/>
<script src="/statics/jquery-3.2.1.min.js"></script>
<script src="/statics/ffsm/public/js/require/require.min.js"></script>
</head>
<body>
<header class="public_header">
<h1 class="public_h_con">姓名详批</h1>
<a class="public_h_home" href="/"></a><a href="/?ac=history" class="public_h_menu">我的测算</a></header>
<div class="public_banner">
	<img src="/statics/ffsm/jieming/1/images/top02.png" alt="姓名解名"/>
</div>
<div class="public_binding">
	<div class="pb_tit">
		绑定订单可以多次查看
	</div>
	<div class="pb_con">
    	<div>
			<span>产品名称：</span><{$des}>
		</div>
		<div>
			<span>订单编号：</span><{$oid}>
		</div>
	</div>
</div>
<div class="jieming_box">
	<p class="jm_words">
		本次为您免费提供的结果：
	</p>
	<ul class="jm_ui">
		<li class="cur"><a href="javascript:;">姓名测算结果</a></li>
		<li class="cur"><a href="javascript:;">您的八字命盘</a></li>
		<li><a href="javascript:;">您的性格特征</a></li>
		<li><a href="javascript:;">您的事业财运</a></li>
		<li><a href="javascript:;">您的恋爱婚姻</a></li>
		<li><a href="javascript:;">您的健康运势</a></li>
		<li><a href="javascript:;">您的晚景解析</a></li>
	</ul>
	<div class="jm_yellow J_testFixedShow">
		一次购买解锁查看所有内容：<span class="price">￥<{$money}></span>
	</div>
	<div class="public_d_btn">
		<div class="public_pay_box">
			<{if $sys_pay_type==0 || $sys_pay_type==1 || $sys_pay_type==3}>
			<a class="weixin" target="_self" href="/?ct=pay&ac=go&oid=<{$oid}>&type=1">微信安全支付</a>
          <{/if}>
             <{if  $sys_pay_type==0 || $sys_pay_type==2 || $sys_pay_type==3}>
            <a class="alipay" target="_self" href="/?ct=pay&ac=go&oid=<{$oid}>&type=2">支付宝安全支付</a>
          <{/if}>
            <{if  $sys_pay_type==0 || $sys_pay_type==4}>
          <a class="weixin" target="_self" href="/?ct=pay&ac=pay_go&oid=<{$oid}>&type=wxpay">微信支付</a>
          <a class="alipay" target="_self" href="/?ct=pay&ac=pay_go&oid=<{$oid}>&type=alipay">支付宝支付</a>
              <{/if}>
		</div>
	</div>
</div>
<div class="jieming_box J_payBottomShow ">
	<div class="jb_title relative">
		您的姓名测算结果 <span class="r">免费</span>
	</div>
	<div class="jb_content">
		<p class="n">
			<{$data.xing}><{$data.username}>（<{if $data.gender==1}>男<{else}>女<{/if}>）
		</p>
		<p>
			公历生日：<{$data.y}>年<{$data.m}>月<{$data.d}>日 <{$data.h}>时
		</p>
		<p>
			农历生日：<{$data.lDate}>
		</p>
		<p>
			您的姓名三才五行组合：<{$return.info.rssancai.title}>
		</p>
		<div class="jbc_gezi">
			<div class="jg_left left">
				<div class="g01 public_w">
					<p class="t">
						迁移宫
					</p>
					<p class="b">
						<span><{$return.tdr_ge.waige}></span><span><{$return.tdr_ge.waige_sancai}></span>
					</p>
				</div>
				<div class="g02 public_w">
					<p class="t">
						命宫
					</p>
					<p class="b">
						<span><{$return.tdr_ge.zhongge}></span><span><{$return.tdr_ge.zongge_sancai}></span>
					</p>
				</div>
			</div>
			<span class="jg_line left"></span>
			<div class="jl_words left">
				<span><span style="color:#f2ac65"><{if $return.xm_arr.xing2}><{$return.xm_arr.xing1}><{else}>白<{/if}></span></span><span><{if $return.xm_arr.xing2}><{$return.xm_arr.xing2}><{else}><{$return.xm_arr.xing1}><{/if}></span><span><{$return.xm_arr.ming1}></span><span><{if $return.xm_arr.ming2}><{$return.xm_arr.ming2}><{else}>白<{/if}></span>
			</div>
			<div class="jg_bihua left">
				<span><{if $return.bh_wh_arr.bihua2==''}>1<{else}><{$return.bh_wh_arr.bihua2}><{/if}></span><span><{if $return.bh_wh_arr.bihua2==''}><{$return.bh_wh_arr.bihua1}><{else}><{$return.bh_wh_arr.bihua1}><{/if}></span><span><{$return.bh_wh_arr.bihua3}></span><span><{if $return.bh_wh_arr.bihua4}><{$return.bh_wh_arr.bihua4}><{else}>1<{/if}></span>
			</div>
			<div class="jg_line2 left">
				<span></span><span></span><span></span>
			</div>
			<div class="jg_right left">
				<div class=" public_w">
					<p class="t">
						父母宫
					</p>
					<p class="b">
						<span><{$return.tdr_ge.tiange}></span><span><{$return.tdr_ge.tian_sancai}></span>
					</p>
				</div>
				<div class="g02 public_w">
					<p class="t">
						疾厄宫
					</p>
					<p class="b">
						<span><{$return.tdr_ge.renge}></span><span><{$return.tdr_ge.ren_sancai}></span>
					</p>
				</div>
				<div class="g02 public_w">
					<p class="t">
						奴仆宫
					</p>
					<p class="b">
						<span><{$return.tdr_ge.dige}></span><span><{$return.tdr_ge.di_sancai}></span>
					</p>
				</div>
			</div>
		</div>
		<!-- end -->
	</div>
</div>
<div class="jieming_box">
	<div class="jb_title relative">
		您的八字命盘<span class="r">免费</span>
	</div>
	<div class="jb_bzmp">
		<p class="words">
			下列是您的八字命盘。您是<{$return.info.nayin.2.whsx.sx}>，出生于<{$return.info.nayin.0.whsx.sx}>年。日天干代表您，所以您是属<{$return.info.nayin.2.whsx.wh}>。
		</p>
		<div class="jb_bzmp_content">
			<dl>
				<dt class="ct">年（祖先）</dt>
				<dd class="jb_bzmp_c_dd">
				<div>
					<p>
						<img src="/statics/ffsm/jieming/1/images/bzmp/wu<{$return.info.nayin.0.whsx.wh_py}>.png" alt="阴火"/>
					</p>
					<p>
						<{$return.info.nayin.0.jiazi}>
					</p>
					<p>
						<{$return.info.nayin.0.layin}>
					</p>
				</div>
				<div>
					<p>
						<img src="/statics/ffsm/jieming/1/images/bzmp/<{$return.info.nayin.0.whsx.sx_py}>.png" alt=""/>
					</p>
					<p>
						<{$return.info.nayin.0.jiazi}>
					</p>
					<p>
						<{$return.info.nayin.0.whsx.sx}>
					</p>
				</div>
				</dd>
			</dl>
			<dl>
				<dt class="ct">月（父母）</dt>
				<dd class="jb_bzmp_c_dd">
				<div>
					<p>
						<img src="/statics/ffsm/jieming/1/images/bzmp/wu<{$return.info.nayin.1.whsx.wh_py}>.png" alt="阴火"/>
					</p>
					<p>
						<{$return.info.nayin.1.jiazi}>
					</p>
					<p>
						<{$return.info.nayin.1.layin}>
					</p>
				</div>
				<div>
					<p>
						<img src="/statics/ffsm/jieming/1/images/bzmp/<{$return.info.nayin.1.whsx.sx_py}>.png" alt=""/>
					</p>
					<p>
						<{$return.info.nayin.1.jiazi}>
					</p>
					<p>
						<{$return.info.nayin.1.whsx.sx}>
					</p>
				</div>
				</dd>
			</dl>
			<dl>
				<dt class="ct">日（自己）</dt>
				<dd class="jb_bzmp_c_dd">
				<div>
					<p>
						<img src="/statics/ffsm/jieming/1/images/bzmp/wu<{$return.info.nayin.2.whsx.wh_py}>.png" alt=""/>
					</p>
					<p>
						<{$return.info.nayin.2.jiazi}>
					</p>
					<p>
						<{$return.info.nayin.2.layin}>
					</p>
				</div>
				<div>
					<p>
						<img src="/statics/ffsm/jieming/1/images/bzmp/<{$return.info.nayin.2.whsx.sx_py}>.png" alt=""/>
					</p>
					<p>
						<{$return.info.nayin.2.jiazi}>
					</p>
					<p>
						<{$return.info.nayin.2.whsx.sx}>
					</p>
				</div>
				</dd>
			</dl>
			<dl>
				<dt class="ct">时（子孙）</dt>
				<dd class="jb_bzmp_c_dd">
				<div>
					<p>
						<img src="/statics/ffsm/jieming/1/images/bzmp/wu<{$return.info.nayin.3.whsx.wh_py}>.png" alt="阳土"/>
					</p>
					<p>
						<{$return.info.nayin.3.jiazi}>
					</p>
					<p>
						<{$return.info.nayin.3.layin}>
					</p>
				</div>
				<div>
					<p>
						<img src="/statics/ffsm/jieming/1/images/bzmp/<{$return.info.nayin.3.whsx.sx_py}>.png" alt=""/>
					</p>
					<p>
						<{$return.info.nayin.3.jiazi}>
					</p>
					<p>
						<{$return.info.nayin.3.whsx.sx}>
					</p>
				</div>
				</dd>
			</dl>
		</div>
		<p class="jb_bzmp_bottom">
			八字命盘从阴阳干支三合历取得。上排是天干由五行“金水木火土”轮流排列。下排是地支用十二生肖顺序排列。十二生肖可转换成五行八字姓名详批是依据文字的音、形、义、意、数的原理，综合姓氏文化、文字阴阳五行，并结合测算者的八字信息，解读你的姓名中所暗藏的各项运势，让你更好的了解自己，掌握命运。
		</p>
	</div>
</div>
<div class="public_jm_title">
	您的性格特征 <span class="r"></span>
</div>
<div class="public_jm_title">
	您的事业职业分析 <span class="r"></span>
</div>
<div class="public_jm_title">
	您的恋爱婚姻解析 <span class="r"></span>
</div>
<div class="public_jm_title">
	您的健康运势解析 <span class="r"></span>
</div>
<div class="public_jm_title">
	您的晚景如何 <span class="r"></span>
</div>
<div class="public_pay_popup" id="publicPayPopup">
	<div class="public_pp_box">
		<div class="public_pp_close" id="publicPPClose">
			X
		</div>
		<div class="public_pp_tit">
			解锁查看所有测算结果
		</div>
		<div class="public_pp_price">
			<span>统一鉴定价：</span><strong>￥<{$money}>元</strong>
		</div>
		<div class="public_pay_box">
			<{if $sys_pay_type==0 || $sys_pay_type==1 || $sys_pay_type==3}>
			<a class="weixin" target="_self" href="/?ct=pay&ac=go&oid=<{$oid}>&type=1">微信安全支付</a>
          <{/if}>
             <{if  $sys_pay_type==0 || $sys_pay_type==2 || $sys_pay_type==3}>
            <a class="alipay" target="_self" href="/?ct=pay&ac=go&oid=<{$oid}>&type=2">支付宝安全支付</a>
          <{/if}>
            <{if  $sys_pay_type==0 || $sys_pay_type==4}>
          <a class="weixin" target="_self" href="/?ct=pay&ac=pay_go&oid=<{$oid}>&type=wxpay">微信支付</a>
          <a class="alipay" target="_self" href="/?ct=pay&ac=pay_go&oid=<{$oid}>&type=alipay">支付宝支付</a>
              <{/if}>
		</div>
	</div>
</div>
<div class="ainuo_foot_nav cl" id="testFixedBtn" style="display: none;">
    <ul>
     <li><a href="/"><i class="shouye_1"></i><p>测算首页</p></a></li>
     <li><a href="/?ac=history"><i class="wddd_1"></i><p>订单查询</p></a></li>
     <li><a href="javascript:;" id="publicPayBottom" class="botpost"><em><i class="lijijs_1"></i></em><p>付费解锁</p></a></li>
     <li><a href="/"><i class="gengduo_1"></i><p>更多测算</p></a></li>
     <li><a href="/?ac=contact"><i class="grzx_1"></i><p>联系我们</p></a></li>
    </ul>
</div>
<style type="text/css">
.ainuo_foot_nav{display: block; padding: 2px 0; background:#d23037; position: fixed; bottom: 0; width: 100%; z-index: 99999;max-width: 640px;}
.ainuo_foot_nav li{width: 20%; text-align: center; float: left;}
.ainuo_foot_nav li a{width: 100%; display: block;}
.ainuo_foot_nav .foothover i{color: #f13030;}
.ainuo_foot_nav li i{display: block; line-height: 25px; height: 25px; margin: auto; padding: 0; width: 25px; overflow: hidden; background-size: 100%;}
.ainuo_foot_nav li a.botpost{position: relative; margin-top: -11px; background-color: rgba(0,0,0,0.0);}
.ainuo_foot_nav li a.botpost em{background: #ffffff; padding: 2px; border: 1px solid #ff5e5e; display: block; border-radius: 50%; width: 30px; height: 30px; margin: 0 auto; margin-bottom: 2px;padding-bottom: 0px;}
.ainuo_foot_nav li p{overflow: hidden; font-size: 12px; height: 16px; line-height: 16px; color: #fff; font-weight: 400;}
.shouye_1{background: url(/statics/ffsm/public/images/shouye.png) no-repeat;}
.wddd_1{background: url(/statics/ffsm/public/images/dingdan.png) no-repeat;}
.lijijs_1{background: url(/statics/ffsm/public/images/jiesuo.png) no-repeat;}
.gengduo_1{background: url(/statics/ffsm/public/images/gengduo.png) no-repeat;}
.grzx_1{background: url(/statics/ffsm/public/images/grzx.png) no-repeat;}
</style>
<script>
    //测算底部悬浮
    (function(){
    	var topShow=$(".J_testFixedShow");
    	if(topShow.length){
            var topShow=topShow.offset().top;
    		var testBtn=$("#testFixedBtn");
    		$(window).scroll(function(){
                var wt=$(window).scrollTop();
                wt>topShow?(testBtn.fadeIn(),$('.public_footer_servers').css('padding-bottom','50px')):(testBtn.fadeOut(),$('.public_footer_servers').css('padding-bottom','20px'));
            });
            testBtn.add('.J_testScrollTop').on('click',function(){$('html,body').scrollTop(topNum)})
    	}
    })()
    //弹出支付功能
    ;(function($){
        $.fn.publicPopup=function(opt){
            var pp=$('#publicPayPopup');
            var ppClose=$('#publicPPClose');
            return this.each(function(){
                var $this=$(this);
                $(window).scroll(function(){
                    var wt=$(window).scrollTop();
                    wt>topShow?$this.fadeIn():$this.fadeOut();
                });
                $this.on('click',function(){
                    pp.show();
                });
                ppClose.on('click',function(){
                    pp.hide();
                })
                ppShow?ppShow.on('click',function(){pp.show()}):'';
            });
        };
    })(jQuery);
    $("#publicPayBottom").publicPopup();
</script>
<script>
	var inquiry_lock = 0;
    $(function () {
        setInterval(function () {
            inquiry();
        }, 2000);
    });
    function inquiry() {
        if (inquiry_lock) {
            return;
        }
        $.get('/?ct=pay&ac=scanquery&oid=<{$oid}>', {t: Date.parse(new Date())}, function (data) {
            if (data.status) {
                inquiry = 1;
                window.location = data.url;
            }
        }, 'json');
    }
//支付后检测跳转
  <{if $yz_pay==1}>
       var inquiry_lock = 0;
    $(function () {
        setInterval(function () {
            inquiry(); 
        }, 1000);
    });
    function inquiry() {
        if (inquiry_lock) {
            return;
        }
        $.get('/?ct=pay&ac=scanquery&oid=<{$oid}>', {t: Date.parse(new Date())}, function (data) {
            if (data.status) {
                inquiry = 1;
                $('div.weixin .green').html('支付成功');
                window.location = data.url;
            }
        }, 'json');
    }
  <{/if}>
</script>
<{include file='./ffsm/dl_ck.tpl'}>
<{include file='./ffsm/footer.tpl'}>
</body>
</html>