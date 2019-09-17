<?php /* Smarty version 2.6.25, created on 2019-03-01 11:24:10
         compiled from index/xingming/xingming_list.tpl */ ?>
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
static/bazi/css/suanming/v2/xmfx.css"/>
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
				<div class="fn_part fn_zxqm fn_zxqm_result mod_box_t1">
					<div class="hd">
						<h1>免费在线起名</h1>
					</div>
					<div class="bd">
						<div class="intro_area">
							<strong>「在线起名」</strong>起名是人类的文化行为之一。作为父母，随着孩子的降临人生，首先要给宝宝起一个好名字，开运网为你免费在线起名，以寄托美好愿望，希望孩子将来成就一番事业。古语云"宁可生错命，不可起错名"，一个好的名字，不仅给别人印象深刻，而且还关系到人一生的事业、婚姻、健康和人际关系。蛇宝宝起名大全名字笔画五行不要和命谱四柱五行相联系，它本身五格部象的五行相生相克是其本身独立一格的五行，与命谱五行没有联系的，无须考虑笔画五行来选名字，但名字的笔画五行在五格剖象中要五行相生，不能相克。
本站基于以上原则和自动生成算法，只需要输入你的姓氏可以免费为你推荐目前较为优秀的名字，并自动评为你的宝宝起名字测试打分及作出详细的命理、运程、吉凶解析。
                    </div>
 <div class="mod_box_t3 fn_box">
   <div class="box_con">

								<form action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" method="post">
                                <input type="hidden" name="ac" value="qiming" />
                                <input type="hidden" name="ct" value="xingming" />

									<div class="mod_form">

										<div class="form_item">

                        您的姓氏:

											<input name="xing" id="xing"  type="text" class="ipt_text init" />

                        性别:

											<label><input checked="checked" class="sex" id="all" name="sex" type="radio" value="0"/>不限</label>

											<label><input class="sex" id="boy" name="sex" type="radio" value="1"/>男孩</label>

											<label><input class="sex" id="girl" name="sex" type="radio" value="2"/>女孩</label>

											<div class="remark clearAll">*注：暂时只支持简体字查询。</div>

										</div>


										<div class="form_item btn_item">

											<button class="btn_orange2" id="btn_begincs2" type="submit">起名</button>

										</div>

									</div>

								</form>
                            <div class="help_area">
                            <span class="help_tit"><i></i>相关帮助：</span>
                          		[<a target="_blank" href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/xmpd/">姓名配对关系</a>]
                            </div>
							</div>
							<i class="flag_tl_t3"></i>
							<i class="flag_tr_t3"></i>
							<i class="flag_bl_t3"></i>
							<i class="flag_br_t3"></i>
						</div>

						
                        <?php if ($this->_tpl_vars['list'] == ''): ?>
                        <div class="mod_box_t3 fn_noresult">
							<div class="box_con">
								<em class="scbg sltc"></em>
								<em class="scbg srtc"></em>
								<div class="fn_noresult">
									<p>
										真遗憾！您的姓氏暂时不在我们的起名推荐中，如想得到更多姓名大全，可向我们反馈，我们会适时添加。
									</p>
									<p>
										<a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/qiming/">重新测试</a>
										
									</p>
								</div>
							</div>
							<i class="flag_tl_t3"></i>
							<i class="flag_tr_t3"></i>
							<i class="flag_bl_t3"></i>
							<i class="flag_br_t3"></i>
						</div>
                        
                        <?php else: ?>
						<div class="fn_result">
							<div class="fn_tab">
                    								<span>
								<!--<a href="/baijx/1.htm" target="_blank">赵姓起源</a>-->
								</span>
                                
                    			<ul class="clearfix">
									<li class="first">
                                  
									<a <?php if ($this->_tpl_vars['opt_Array']['sex'] == '0'): ?>class="current"<?php endif; ?> href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-0-<?php echo $this->_tpl_vars['opt_Array']['hs']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html"><?php echo $this->_tpl_vars['opt_Array']['xing']; ?>
姓名字大全</a>
									</li>
									<li>
									<a <?php if ($this->_tpl_vars['opt_Array']['sex'] == '1'): ?>class="current"<?php endif; ?> href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-1-<?php echo $this->_tpl_vars['opt_Array']['hs']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html"><?php echo $this->_tpl_vars['opt_Array']['xing']; ?>
姓男孩名字大全</a>
									</li>
									<li>
									<a <?php if ($this->_tpl_vars['opt_Array']['sex'] == '2'): ?>class="current"<?php endif; ?> href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-2-<?php echo $this->_tpl_vars['opt_Array']['hs']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html"><?php echo $this->_tpl_vars['opt_Array']['xing']; ?>
姓女孩名字大全</a>
									</li>
								</ul>
							</div>
							<div class="fn_tab_cont">
								<div class="fn_subtab">
									<a <?php if ($this->_tpl_vars['opt_Array']['hs'] == '0'): ?>class="current"<?php endif; ?> href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['sex']; ?>
-0-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html">不限</a>
									<a <?php if ($this->_tpl_vars['opt_Array']['hs'] == '2'): ?>class="current"<?php endif; ?> href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['sex']; ?>
-2-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html">二字</a>
									<a <?php if ($this->_tpl_vars['opt_Array']['hs'] == '3'): ?>class="current"<?php endif; ?> href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/qiming/list-<?php echo $this->_tpl_vars['opt_Array']['xid']; ?>
-<?php echo $this->_tpl_vars['opt_Array']['sex']; ?>
-3-<?php echo $this->_tpl_vars['opt_Array']['page']; ?>
.html">三字</a>
								</div>
                                <?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                                    <?php if ($this->_tpl_vars['k'] == 0): ?>
                                        <ul class="fn_result_list clearfix">
                                    <?php endif; ?> 
                                      
                                    <li><a href="<?php echo $this->_tpl_vars['web_url']; ?>
xingming/xmfx/<?php echo $this->_tpl_vars['v']['name']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></li>
                                    <?php if ($this->_tpl_vars['i']%90 == 0 && $this->_tpl_vars['i'] != 0 && $this->_tpl_vars['i'] != 539): ?>
                                   </ul> <ul class="fn_result_list fn_result_list_bt clearfix">
                                   <?php elseif ($this->_tpl_vars['i'] == 539): ?>
								</ul> 
                                <?php endif; ?>                           
                                <?php endforeach; endif; unset($_from); ?>                								
								
								<ul class="fn_result_list fn_result_list_bt clearfix">
                                                								</ul>
								<ul class="fn_result_list fn_result_list_bt clearfix">
								</ul>
                                
								<div class="page">
									<?php echo $this->_tpl_vars['pageStr']; ?>

								</div>
							</div>
						</div>
                        <?php endif; ?>
						<!-- 热词 end-->
					</div>
					<i class="flag_tl_t1"></i>
					<i class="flag_tr_t1"></i>
					<i class="flag_bl_t1"></i>
					<i class="flag_br_t1"></i>
				</div>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/left_sx.tpl', 'smarty_include_vars' => array()));
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
        </div>
         <?php   include('templates/public/footer.tpl.php'); ?>  

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
