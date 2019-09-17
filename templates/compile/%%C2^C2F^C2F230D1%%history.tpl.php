<?php /* Smarty version 2.6.25, created on 2019-03-02 16:05:01
         compiled from ffsm/history.tpl */ ?>
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
      <a href="/?ac=history" <?php if ($this->_tpl_vars['state'] == 0): ?>class="on" <?php endif; ?>>未付款</a>
    </li>
    <li>
    <a href="/?ac=history&state=1" <?php if ($this->_tpl_vars['state'] == 1): ?>class="on" <?php endif; ?>>已付款</a>
    </li>
    <li>
    <a href="/?ac=history&state=2" <?php if ($this->_tpl_vars['state'] == 2): ?>class="on" <?php endif; ?>>查询订单</a>
    </li>
  </ul>
  <?php if ($this->_tpl_vars['data'] && $this->_tpl_vars['state'] != 2): ?>
  <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
  <?php if ($this->_tpl_vars['state'] == $this->_tpl_vars['v']['status']): ?>
  <div class="public_ddxx">
      <div class="public_k">
           <span class="public_des">[<?php echo $this->_tpl_vars['v']['type']; ?>
] <?php echo $this->_tpl_vars['v']['data']['username']; ?>
.公历<?php echo $this->_tpl_vars['v']['data']['year']; ?>
<?php echo $this->_tpl_vars['v']['data']['y']; ?>
-<?php echo $this->_tpl_vars['v']['data']['month']; ?>
<?php echo $this->_tpl_vars['v']['data']['m']; ?>
-<?php echo $this->_tpl_vars['v']['data']['day']; ?>
<?php echo $this->_tpl_vars['v']['data']['d']; ?>
</span><?php if ($this->_tpl_vars['v']['status'] == 1): ?><span class="public_pyzt">已付款</span><?php else: ?><span class="public_pyzt public_red">未付款</span><?php endif; ?>
      </div>
        <div class="public_k">
      <span class="public_pyzt_ddxx">订单号：<?php echo $this->_tpl_vars['v']['oid']; ?>
</span>
    </div>
      <div class="public_k">
      <span class="public_pyzt_ddxx2">下单时间：<?php echo $this->_tpl_vars['v']['createtime']; ?>
</span>
    </div>
      <div class="public_k public_bddd">
      <a class="public_pyzt__look" href="<?php echo $this->_tpl_vars['v']['url']; ?>
"><?php if ($this->_tpl_vars['v']['status'] == 1): ?>点击查看<?php else: ?>去付款<?php endif; ?></a>
    </div>
  </div>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
  <?php if ($this->_tpl_vars['state'] == 2): ?>
<div class="public_ddxx_search">
	<div class="public_ddxx_form">
      <form class="J_ajaxForm" action="/?ac=select_orders" method="post">
			<input type="text" name="oid" nolocal="true" placeholder="请输入订单号" class="input"/><input type="submit" value="搜索" class="J_ajax_submit_btn btn"/>
		</form>
	</div>
	
	
</div>
<?php endif; ?>
  
  
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
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './ffsm/dl_ck.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</body>
</html>