<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8"/>
<title>我的测算订单查询</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content="yes" name="apple-mobile-web-app-capable"/>
<meta content="black" name="apple-mobile-web-app-status-bar-style"/>
<meta content="telephone=no" name="format-detection"/>
<link rel="shortcut icon" href="/statics/ffsm/favicon.ico"/>
<link href="/statics/ffsm/public/wap.min-v=0817.css" rel="stylesheet" type="text/css"/>
<link href="/statics/ffsm/inquiry/1/inquiry.min.css" rel="stylesheet" type="text/css"/>
<script src="https://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<header class="public_header">
<h1 class="public_h_con">我的测算</h1>
<a class="public_h_home" href="/"></a><a href="/?ac=history" class="public_h_menu">我的测算</a></header>
<p class="public_banner">
	<img src="/statics/ffsm/public/images/banner_wd.png" alt="付费算命"/>
</p>
  <ul class="ddztxz">
    
    <li>
      <a href="/?ac=history" <{if $state==0}>class="on" <{/if}>>未付款</a>
    </li>
    <li>
    <a href="/?ac=history&state=1" <{if $state==1}>class="on" <{/if}>>已付款</a>
    </li>
    <li>
    <a href="/?ac=history&state=2" <{if $state==2}>class="on" <{/if}>>查询订单</a>
    </li>
  </ul>
  <{if $data && $state!=2}>
  <{foreach from=$data item=v}>
  <{if $state==$v.status}>
  <div class="public_ddxx">
      <div class="public_k">
           <span class="public_des">[<{$v.type}>] <{$v.data.username}>.公历<{$v.data.year}><{$v.data.y}>-<{$v.data.month}><{$v.data.m}>-<{$v.data.day}><{$v.data.d}></span><{if $v.status==1}><span class="public_pyzt">已付款</span><{else}><span class="public_pyzt public_red">未付款</span><{/if}>
      </div>
        <div class="public_k">
      <span class="public_pyzt_ddxx">订单号：<{$v.oid}></span>
    </div>
      <div class="public_k">
      <span class="public_pyzt_ddxx2">下单时间：<{$v.createtime}></span>
    </div>
      <div class="public_k public_bddd">
      <a class="public_pyzt__look" href="<{$v.url}>"><{if $v.status==1}>点击查看<{else}>去付款<{/if}></a>
    </div>
  </div>
    <{/if}>
    <{/foreach}>
    <{/if}>
  <{if $state==2}>
<div class="public_ddxx_search">
	<div class="public_ddxx_form">
      <form class="J_ajaxForm" action="/?ac=select_orders" method="post">
			<input type="text" name="oid" nolocal="true" placeholder="请输入订单号" class="input"/><input type="submit" value="搜索" class="J_ajax_submit_btn btn"/>
		</form>
	</div>
	
	
</div>
<{/if}>
  
  
<div class="public_orders_search">
	<div class="public_os_info">
		温馨提示：已经付款的用户请输入订单号查询测算结果！如未正常显示请添加微信号【开运网测算源码】反馈！
	</div>
	<ul class="problem_feedback">
		<li><a class="after_sales_link" href="https://www.03ky.com/bbs-170-1-1.html" hidetxt="问题反馈">问题反馈</a></li>
		<li><a href="javascript:;" onclick="history.go(-1);" class="btn_back">返回</a></li>
	</ul>
</div>
<div class="ainuo_foot_nav cl" id="testFixedBtn">
    <ul>
     <li><a href="/"><i class="shouye_1"></i><p>测算首页</p></a></li>
     <li><a href="/?ac=history"><i class="wddd_1"></i><p>订单查询</p></a></li>
     <li><a href="/"class="botpost"><em><i class="lijics_1"></i></em><p>继续测算</p></a></li>
     <li><a href="/"><i class="gengduo_1"></i><p>更多测算</p></a></li>
     <li><a href="/?ac=contact"><i class="grzx_1"></i><p>联系我们</p></a></li>
    </ul>
</div>
<{include file='./ffsm/footer.tpl'}>
<{include file='./ffsm/dl_ck.tpl'}>
</body>
</html>