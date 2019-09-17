<?php /* Smarty version 2.6.25, created on 2019-03-01 11:23:05
         compiled from index/suanming/suanming_form.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/top_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['web_url']; ?>
static/bazi/css/suanming/v2/fortune.css"/>
<div class="wrapper">
    <div class="main">
        <div class="submenu">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/daohang.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
        <div class="cont">
            <div class="col_left">
                <div class="<?php echo $this->_tpl_vars['arr']['titleclass']; ?>
 fn_part mod_box_t1">
                    <div class="hd">
                        <h1><?php echo $this->_tpl_vars['arr']['h1']; ?>
</h1>
                    </div>
                    <div class="bd">
					 <div class="fubiaoti">请输入命主信息</div>
                        <div class="mod_box_t3 fn_box">
                            <div class="box_con">
<form action="/index.php" name="login" method="post" onSubmit="return checkForm();">
                        <div class="sm_box mingzhu">
                            <ul>
                                <li>
                                    <div class="left">
                                        <p>姓名 <span>(必填)</span>：</p>
                                        <input type="text" name="xing" id="xing" placeholder="請輸入姓名" name="name2">
                                    </div>
                                </li>
                                <li>
                                    <div class="left sex_inp">
                                       <p> 性别 <span>(必填)</span>：</p>
                                        <div class="sex_wrap">
                                            <label for="boy" class="boy on">
                                                <i></i>
                                                <span>男</span>
                                            </label>
                                            <label for="girl" class="girl">
                                                <i></i>
                                                <span>女</span>
                                            </label>
                                            <input type="radio" name="sex" class="sex" id="boy" value="0" checked="checked">
                                            <input type="radio" name="sex" class="sex" id="girl" value="1">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="left" id="from_wrap">
                                       <p> 生日 <span>(必填)</span>：</p>
                                        <input id="birthday" class="input " type="text" data-boxid="from_wrap" data-toid-date="birthday" placeholder="请选择日期" data-type="0">
                                        <input type="hidden" id="b_input" name="birthday">
                                    </div>
                                </li>
                                <li>
                                    <div class="left">
                                        <p>出生時辰 ：</p>
                                        <span class="btAdd2" style="display: none;">时辰不详</span>
                                        <div class="time_c">
                                            <select size="1" name="h" id="hour">
                                                <option value="0" selected="">时辰不详</option>
                                                <option value="24">子 00:00-00:59</option>
                                                <option value="1">丑 01:00-01:59</option>
                                                <option value="2">丑 02:00-02:59</option>
                                                <option value="3">寅 03:00-03:59</option>
                                                <option value="4">寅 04:00-04:59</option>
                                                <option value="5">卯 05:00-05:59</option>
                                                <option value="6">卯 06:00-06:59</option>
                                                <option value="7">辰 07:00-07:59</option>
                                                <option value="8">辰 08:00-08:59</option>
                                                <option value="9">巳 09:00-09:59</option>
                                                <option value="10">巳 10:00-10:59</option>
                                                <option value="11">午 11:00-11:59</option>
                                                <option value="12">午 12:00-12:59</option>
                                                <option value="13">未 13:00-13:59</option>
                                                <option value="14">未 14:00-14:59</option>
                                                <option value="15">申 15:00-15:59</option>
                                                <option value="16">申 16:00-16:59</option>
                                                <option value="17">酉 17:00-17:59</option>
                                                <option value="18">酉 18:00-18:59</option>
                                                <option value="19">戌 19:00-19:59</option>
                                                <option value="20">戌 20:00-20:59</option>
                                                <option value="21">亥 21:00-21:59</option>
                                                <option value="22">亥 22:00-22:59</option>
                                                <option value="23">子 23:00-23:59</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
			<input type="hidden" name=y  value="">
			<input type="hidden" name=m  value="">
			<input type="hidden" name=d  value="">
			<input type="hidden" name=ct  value="suanming">
			<input type="hidden" name=ac  value="sm_form">
			<input type="hidden" name=cY  value="">
			<input type="hidden" name=cM  value="">
			<input type="hidden" name=cD  value="">
			<input type="hidden" name=cH  value="">
			<input type="hidden" name=term1  value="">
			<input type="hidden" name=term2  value="">
			<input type="hidden" name=start_term  value="">
			<input type="hidden" name=end_term  value="">
			<input type="hidden" name=start_term1  value="">
			<input type="hidden" name=end_term1  value="">
			<input type="hidden" name=lDate  value="">
			<input type="hidden" name="base" value="<?php echo $this->_tpl_vars['arr']['postbase']; ?>
">
			<input name="act" value="ok" type="hidden">
			<input type="submit" class="btn_submit btn_1 submit_btn" id="btn_begincs" value="立即測算">
</form>
								<div class="intro_area"><?php echo $this->_tpl_vars['arr']['jianjie']; ?>
</div>
                            </div>
                            
                        </div>
                        <div class="relateLinks">
                        
                            <?php $_from = $this->_tpl_vars['topic_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                                <a <?php if ($this->_tpl_vars['tid'] == $this->_tpl_vars['v']['id']): ?>class="current"<?php endif; ?> href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['v']['extra']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a>
                            <?php endforeach; endif; unset($_from); ?>    
                            
                        </div>
                    </div>
                    
                </div>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/left_sx.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/left_news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
            <div id="col_right" class="col_right">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/static/bazi/js/suanming.js"></script>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
