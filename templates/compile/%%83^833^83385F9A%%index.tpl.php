<?php /* Smarty version 2.6.25, created on 2019-03-01 11:23:00
         compiled from index/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="wrapper">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/top_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<link type="text/css" rel="stylesheet" href="/static/bazi/css/suanming/v2/fortune.css"/>
<div class="main">
        <div class="cont">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/daohang.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="Min_1">
  <div class="Min1_L">
    <!--hd-->
    <div class="hdwrap">
      <div class="hd">
        <ul>
          <li class="" style="width: 33.3333%;">1</li>
          <li class="" style="width: 33.3333%;">2</li>
          <li class="on" style="width: 33.3333%;">3</li></ul>
      </div>
      <div class="bd">
        <div class="tempWrap" style="overflow:hidden; position:relative; width:420px">
          <ul class="picList" style="width: 2100px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -1260px;">
          <?php $_from = $this->_tpl_vars['self_tid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
		  <?php if ($this->_tpl_vars['v']['id'] == 345): ?>
		  <?php unset($this->_sections['news']);
$this->_sections['news']['loop'] = is_array($_loop=$this->_tpl_vars['v']['data_list']['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news']['name'] = 'news';
$this->_sections['news']['start'] = (int)0;
$this->_sections['news']['max'] = (int)1;
$this->_sections['news']['show'] = true;
if ($this->_sections['news']['max'] < 0)
    $this->_sections['news']['max'] = $this->_sections['news']['loop'];
$this->_sections['news']['step'] = 1;
if ($this->_sections['news']['start'] < 0)
    $this->_sections['news']['start'] = max($this->_sections['news']['step'] > 0 ? 0 : -1, $this->_sections['news']['loop'] + $this->_sections['news']['start']);
else
    $this->_sections['news']['start'] = min($this->_sections['news']['start'], $this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] : $this->_sections['news']['loop']-1);
if ($this->_sections['news']['show']) {
    $this->_sections['news']['total'] = min(ceil(($this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] - $this->_sections['news']['start'] : $this->_sections['news']['start']+1)/abs($this->_sections['news']['step'])), $this->_sections['news']['max']);
    if ($this->_sections['news']['total'] == 0)
        $this->_sections['news']['show'] = false;
} else
    $this->_sections['news']['total'] = 0;
if ($this->_sections['news']['show']):

            for ($this->_sections['news']['index'] = $this->_sections['news']['start'], $this->_sections['news']['iteration'] = 1;
                 $this->_sections['news']['iteration'] <= $this->_sections['news']['total'];
                 $this->_sections['news']['index'] += $this->_sections['news']['step'], $this->_sections['news']['iteration']++):
$this->_sections['news']['rownum'] = $this->_sections['news']['iteration'];
$this->_sections['news']['index_prev'] = $this->_sections['news']['index'] - $this->_sections['news']['step'];
$this->_sections['news']['index_next'] = $this->_sections['news']['index'] + $this->_sections['news']['step'];
$this->_sections['news']['first']      = ($this->_sections['news']['iteration'] == 1);
$this->_sections['news']['last']       = ($this->_sections['news']['iteration'] == $this->_sections['news']['total']);
?>
			<li class="clone">
              <div class="pic">
                <a href="<?php echo $this->_tpl_vars['v']['data_list']['list'][$this->_sections['news']['index']]['url']; ?>
" target="_blank">
                  <img src="https://www.jpkcnet.com/uploadimg/ico/2018/0511/1526034503162007.jpg"></a>
                <div class="btwrap">
                  <a href="https://www.jpkcnet.com/sm/bzsm.html" target="_blank"><?php echo $this->_tpl_vars['v']['data_list']['list'][$this->_sections['news']['index']]['title']; ?>
</a></div>
              </div>
            </li>
			<?php endfor; endif; ?>
			<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
          </ul>
        </div>
      </div>
    </div>
    <!--推薦-->
    <div class="M1_itema">
      <a href="http://csk.52ddtest.cn/?ac=pc" target="_blank">
        <img src="https://www.jpkcnet.com/uploadimg/ico/2018/0510/1525919188642051.jpg" alt=""></a>
    </div>
  </div>
  
  <div class="Min1_M">
   <?php $_from = $this->_tpl_vars['self_tid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
   <?php if ($this->_tpl_vars['v']['id'] == 345 || $this->_tpl_vars['v']['id'] == 348 || $this->_tpl_vars['v']['id'] == 347): ?>
  <?php unset($this->_sections['news']);
$this->_sections['news']['loop'] = is_array($_loop=$this->_tpl_vars['v']['data_list']['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news']['name'] = 'news';
$this->_sections['news']['start'] = (int)0;
$this->_sections['news']['max'] = (int)1;
$this->_sections['news']['show'] = true;
if ($this->_sections['news']['max'] < 0)
    $this->_sections['news']['max'] = $this->_sections['news']['loop'];
$this->_sections['news']['step'] = 1;
if ($this->_sections['news']['start'] < 0)
    $this->_sections['news']['start'] = max($this->_sections['news']['step'] > 0 ? 0 : -1, $this->_sections['news']['loop'] + $this->_sections['news']['start']);
else
    $this->_sections['news']['start'] = min($this->_sections['news']['start'], $this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] : $this->_sections['news']['loop']-1);
if ($this->_sections['news']['show']) {
    $this->_sections['news']['total'] = min(ceil(($this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] - $this->_sections['news']['start'] : $this->_sections['news']['start']+1)/abs($this->_sections['news']['step'])), $this->_sections['news']['max']);
    if ($this->_sections['news']['total'] == 0)
        $this->_sections['news']['show'] = false;
} else
    $this->_sections['news']['total'] = 0;
if ($this->_sections['news']['show']):

            for ($this->_sections['news']['index'] = $this->_sections['news']['start'], $this->_sections['news']['iteration'] = 1;
                 $this->_sections['news']['iteration'] <= $this->_sections['news']['total'];
                 $this->_sections['news']['index'] += $this->_sections['news']['step'], $this->_sections['news']['iteration']++):
$this->_sections['news']['rownum'] = $this->_sections['news']['iteration'];
$this->_sections['news']['index_prev'] = $this->_sections['news']['index'] - $this->_sections['news']['step'];
$this->_sections['news']['index_next'] = $this->_sections['news']['index'] + $this->_sections['news']['step'];
$this->_sections['news']['first']      = ($this->_sections['news']['iteration'] == 1);
$this->_sections['news']['last']       = ($this->_sections['news']['iteration'] == $this->_sections['news']['total']);
?>
    <a href="<?php echo $this->_tpl_vars['v']['data_list']['list'][$this->_sections['news']['index']]['url']; ?>
" class="bta" target="_blank"><?php echo $this->_tpl_vars['v']['data_list']['list'][$this->_sections['news']['index']]['title']; ?>
</a>
  <?php endfor; endif; ?>
    <div class="btb">
	<?php unset($this->_sections['news']);
$this->_sections['news']['loop'] = is_array($_loop=$this->_tpl_vars['v']['data_list']['list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news']['name'] = 'news';
$this->_sections['news']['start'] = (int)1;
$this->_sections['news']['max'] = (int)6;
$this->_sections['news']['show'] = true;
if ($this->_sections['news']['max'] < 0)
    $this->_sections['news']['max'] = $this->_sections['news']['loop'];
$this->_sections['news']['step'] = 1;
if ($this->_sections['news']['start'] < 0)
    $this->_sections['news']['start'] = max($this->_sections['news']['step'] > 0 ? 0 : -1, $this->_sections['news']['loop'] + $this->_sections['news']['start']);
else
    $this->_sections['news']['start'] = min($this->_sections['news']['start'], $this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] : $this->_sections['news']['loop']-1);
if ($this->_sections['news']['show']) {
    $this->_sections['news']['total'] = min(ceil(($this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] - $this->_sections['news']['start'] : $this->_sections['news']['start']+1)/abs($this->_sections['news']['step'])), $this->_sections['news']['max']);
    if ($this->_sections['news']['total'] == 0)
        $this->_sections['news']['show'] = false;
} else
    $this->_sections['news']['total'] = 0;
if ($this->_sections['news']['show']):

            for ($this->_sections['news']['index'] = $this->_sections['news']['start'], $this->_sections['news']['iteration'] = 1;
                 $this->_sections['news']['iteration'] <= $this->_sections['news']['total'];
                 $this->_sections['news']['index'] += $this->_sections['news']['step'], $this->_sections['news']['iteration']++):
$this->_sections['news']['rownum'] = $this->_sections['news']['iteration'];
$this->_sections['news']['index_prev'] = $this->_sections['news']['index'] - $this->_sections['news']['step'];
$this->_sections['news']['index_next'] = $this->_sections['news']['index'] + $this->_sections['news']['step'];
$this->_sections['news']['first']      = ($this->_sections['news']['iteration'] == 1);
$this->_sections['news']['last']       = ($this->_sections['news']['iteration'] == $this->_sections['news']['total']);
?>
      <div class="lis">
        <a href="<?php echo $this->_tpl_vars['v']['data_list']['list'][$this->_sections['news']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['v']['data_list']['list'][$this->_sections['news']['index']]['title']; ?>
</a>
		</div>
	<?php endfor; endif; ?>
    </div>
	<?php endif; ?>
	 <?php endforeach; endif; unset($_from); ?>   
  </div>
  <div class="R_cs">
    <!--精准八字详批-->
    <div class="M1R_item">
      <div class="cs_top"><span>在线八字精批</span></div>
      <div class="from_wrap" id="from_wrap">
      <form action="<?php echo $this->_tpl_vars['web_url']; ?>
index.php" name="login" method="post" onSubmit="return checkForm();">
          <!--姓名-->
          <div class="input_lis name_inp">
            <span>姓名
              <u>(必填)</u>：</span>
            <input type="text" class="name" name="xing" id="xing"  value="" placeholder="請輸入姓名"></div>
          <!--性别-->
          <div class="input_lis sex_inp">
            <span>性别
              <u>(必填)</u>：</span>
            <div class="sex_wrap">
              <label for="boy" class="boy on">
                <i>
                </i>
                <span>男</span></label>
              <label for="girl" class="girl">
                <i>
                </i>
                <span>女</span></label>
            </div>
            <input type="radio" name="sex" class="sex" id="boy" value="0" checked="checked">
            <input type="radio" name="sex" class="sex" id="girl" value="1"></div>
          <!--出生日期-->
          <div class="input_lis" id="input_lis">
            <span>生日
              <u>(必填)</u>：</span>
            <div class="birth_c">
              <input type="text" id="birthday" class="input" data-boxid="input_lis" data-toid-date="birthday" placeholder="請選擇日期" data-type="0">
              <input type="hidden" id="b_input" name="birthday"></div>
          </div>
          <!--时辰选择-->
          <div class="input_lis time_inp">
            <span>出生時辰：</span>
            <span class="btAdd" style="display: none;">时辰不详</span>
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
                <option value="23">子 23:00-23:59</option></select>
            </div>
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
          <!--提交-->
		   <button class="submit_btn" type="submit" id="btn_begincs">立即測算</button>
		  </form>
      </div>
    </div>
  </div>
</div>
<div class="Min_2">
  <div class="com_title">
    <p>測算工具</p>
  </div>
  <div class="M2_item">
    <a href="http://csk.52ddtest.cn/?ac=pc" target="_blank" class="lis">
      <div class="img">
        <img src="/static/img/bzsm.png" alt=""></div>
      <div class="name">八字算命</div>
      <div class="miaoshu">八字算命是根據八字五行來推測出一個人的事業、財運、愛情等運勢，是一種歷史悠久的算命方法。</div>
      <div class="btn">
        <p>立即測算</p>
      </div>
    </a>
    <a href="/suanming/cglm/" target="_blank" class="lis">
      <div class="img">
        <img src="/static/img/cgsm.png" alt=""></div>
      <div class="name">稱骨算命</div>
      <div class="miaoshu">稱骨算命相傳是周易大師袁天罡所創，其法是按照人的生辰八字計算相應的“骨重”，根據骨重進行算命。</div>
      <div class="btn">
        <p>立即測算</p>
      </div>
    </a>
    <a href="/xingming/xmfx/" target="_blank" class="lis">
      <div class="img">
        <img src="/static/img/xmsm.png" alt=""></div>
      <div class="name">姓名算命</div>
      <div class="miaoshu">姓名算命是根據姓名的筆劃數以及一定規則，並運用陰陽五行相生相剋的道理，來觀察預測姓名的吉凶好壞。</div>
      <div class="btn">
        <p>立即測算</p>
      </div>
    </a>
    <a href="/paipan/bazi/" target="_blank" class="lis">
      <div class="img">
        <img src="/static/img/bzpp.png" alt=""></div>
      <div class="name">八字排盤</div>
      <div class="miaoshu">八字排盤，即是將年月日時排成命盤，結合八字的陰陽五行生克情况進行分析一個人的運勢，所以稱為八字排盤。</div>
      <div class="btn">
        <p>立即測算</p>
      </div>
    </a>
    <a href="/chouqian/" target="_blank" class="lis">
      <div class="img">
        <img src="/static/img/cqsm.png" alt=""></div>
      <div class="name">抽籤算命</div>
      <div class="miaoshu">抽籤算命是民間重要的算命方法，主要講究心誠則靈，抽籤人都需要具有一棵真誠的心態來面對預測結果。</div>
      <div class="btn">
        <p>立即測算</p>
      </div>
    </a>
    <a href="/minjian/zhiwen/" target="_blank" class="lis">
      <div class="img">
        <img src="/static/img/zwsm.png" alt=""></div>
      <div class="name">指紋算命</div>
      <div class="miaoshu">人的指紋是終生不變的，指紋算命是透過指紋來揭示其中所蘊藏的關於性格和命運的資訊。</div>
      <div class="btn">
        <p>立即測算</p>
      </div>
    </a>
  </div>
</div>
<div class="Min_3">
<div class="mod_box_t2 box_knowledge clearAll mt10">
<div class="com_title" style="padding-top: 15px;">
<p>推荐内容</p>
<a href="/sexz/" target="_blank">更多&gt;&gt;</a></div>
                    <div class="bd">
                            <div class="knowledge_list clearfix">
                            <div class="know_row">
                                <div class="block_left">
                                    <div class="k_left">
                                        <?php if ($this->_tpl_vars['public_hand_data']['left_news']['img']['0']['title'] != ''): ?>
                                            <a href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['0']['url']; ?>
" target="_blank">
                                                <img src="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['0']['img']; ?>
">
                                                <div class="black_gb">
                                                    <span class="white_font"><?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['0']['title']; ?>
</span>
                                                </div>
                                            </a>
                                        <?php endif; ?>    
                                    </div>
                                    <div class="k_right">
                                        <ul>
                                        <?php unset($this->_sections['news']);
$this->_sections['news']['loop'] = is_array($_loop=$this->_tpl_vars['public_hand_data']['left_news']['data_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news']['name'] = 'news';
$this->_sections['news']['start'] = (int)0;
$this->_sections['news']['max'] = (int)4;
$this->_sections['news']['show'] = true;
if ($this->_sections['news']['max'] < 0)
    $this->_sections['news']['max'] = $this->_sections['news']['loop'];
$this->_sections['news']['step'] = 1;
if ($this->_sections['news']['start'] < 0)
    $this->_sections['news']['start'] = max($this->_sections['news']['step'] > 0 ? 0 : -1, $this->_sections['news']['loop'] + $this->_sections['news']['start']);
else
    $this->_sections['news']['start'] = min($this->_sections['news']['start'], $this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] : $this->_sections['news']['loop']-1);
if ($this->_sections['news']['show']) {
    $this->_sections['news']['total'] = min(ceil(($this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] - $this->_sections['news']['start'] : $this->_sections['news']['start']+1)/abs($this->_sections['news']['step'])), $this->_sections['news']['max']);
    if ($this->_sections['news']['total'] == 0)
        $this->_sections['news']['show'] = false;
} else
    $this->_sections['news']['total'] = 0;
if ($this->_sections['news']['show']):

            for ($this->_sections['news']['index'] = $this->_sections['news']['start'], $this->_sections['news']['iteration'] = 1;
                 $this->_sections['news']['iteration'] <= $this->_sections['news']['total'];
                 $this->_sections['news']['index'] += $this->_sections['news']['step'], $this->_sections['news']['iteration']++):
$this->_sections['news']['rownum'] = $this->_sections['news']['iteration'];
$this->_sections['news']['index_prev'] = $this->_sections['news']['index'] - $this->_sections['news']['step'];
$this->_sections['news']['index_next'] = $this->_sections['news']['index'] + $this->_sections['news']['step'];
$this->_sections['news']['first']      = ($this->_sections['news']['iteration'] == 1);
$this->_sections['news']['last']       = ($this->_sections['news']['iteration'] == $this->_sections['news']['total']);
?>
                                            <li><i class="i-point"></i><a href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['title']; ?>
</a></li>
                                        <?php endfor; endif; ?>  
                                        </ul>
                                    </div>
                                </div>
                                <div class="block_right">
                                    <div class="k_left">
                                        <?php if ($this->_tpl_vars['public_hand_data']['left_news']['img']['1']['title'] != ''): ?>
                                            <a href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['1']['url']; ?>
" target="_blank">
                                                <img src="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['1']['img']; ?>
">
                                                <div class="black_gb">
                                                    <span class="white_font"><?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['1']['title']; ?>
</span>
                                                </div>
                                            </a>
                                        <?php endif; ?>  
                                    </div>
                                    <div class="k_right">
                                        <ul>
                                            <?php unset($this->_sections['news']);
$this->_sections['news']['loop'] = is_array($_loop=$this->_tpl_vars['public_hand_data']['left_news']['data_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news']['name'] = 'news';
$this->_sections['news']['start'] = (int)4;
$this->_sections['news']['max'] = (int)4;
$this->_sections['news']['show'] = true;
if ($this->_sections['news']['max'] < 0)
    $this->_sections['news']['max'] = $this->_sections['news']['loop'];
$this->_sections['news']['step'] = 1;
if ($this->_sections['news']['start'] < 0)
    $this->_sections['news']['start'] = max($this->_sections['news']['step'] > 0 ? 0 : -1, $this->_sections['news']['loop'] + $this->_sections['news']['start']);
else
    $this->_sections['news']['start'] = min($this->_sections['news']['start'], $this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] : $this->_sections['news']['loop']-1);
if ($this->_sections['news']['show']) {
    $this->_sections['news']['total'] = min(ceil(($this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] - $this->_sections['news']['start'] : $this->_sections['news']['start']+1)/abs($this->_sections['news']['step'])), $this->_sections['news']['max']);
    if ($this->_sections['news']['total'] == 0)
        $this->_sections['news']['show'] = false;
} else
    $this->_sections['news']['total'] = 0;
if ($this->_sections['news']['show']):

            for ($this->_sections['news']['index'] = $this->_sections['news']['start'], $this->_sections['news']['iteration'] = 1;
                 $this->_sections['news']['iteration'] <= $this->_sections['news']['total'];
                 $this->_sections['news']['index'] += $this->_sections['news']['step'], $this->_sections['news']['iteration']++):
$this->_sections['news']['rownum'] = $this->_sections['news']['iteration'];
$this->_sections['news']['index_prev'] = $this->_sections['news']['index'] - $this->_sections['news']['step'];
$this->_sections['news']['index_next'] = $this->_sections['news']['index'] + $this->_sections['news']['step'];
$this->_sections['news']['first']      = ($this->_sections['news']['iteration'] == 1);
$this->_sections['news']['last']       = ($this->_sections['news']['iteration'] == $this->_sections['news']['total']);
?>
                                                <li><i class="i-point"></i><a href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['title']; ?>
</a></li>
                                            <?php endfor; endif; ?>  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clear_both"></div>
                            <div class="know_row top_dash">
                                <div class="block_left">
                                    <div class="k_left">
                                        <?php if ($this->_tpl_vars['public_hand_data']['left_news']['img']['2']['title'] != ''): ?>
                                            <a href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['2']['url']; ?>
" target="_blank">
                                                <img src="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['2']['img']; ?>
">
                                                <div class="black_gb">
                                                    <span class="white_font"><?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['2']['title']; ?>
</span>
                                                </div>
                                            </a>
                                        <?php endif; ?> 
                                    </div>
                                    <div class="k_right">
                                        <ul>
                                            <?php unset($this->_sections['news']);
$this->_sections['news']['loop'] = is_array($_loop=$this->_tpl_vars['public_hand_data']['left_news']['data_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news']['name'] = 'news';
$this->_sections['news']['start'] = (int)8;
$this->_sections['news']['max'] = (int)4;
$this->_sections['news']['show'] = true;
if ($this->_sections['news']['max'] < 0)
    $this->_sections['news']['max'] = $this->_sections['news']['loop'];
$this->_sections['news']['step'] = 1;
if ($this->_sections['news']['start'] < 0)
    $this->_sections['news']['start'] = max($this->_sections['news']['step'] > 0 ? 0 : -1, $this->_sections['news']['loop'] + $this->_sections['news']['start']);
else
    $this->_sections['news']['start'] = min($this->_sections['news']['start'], $this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] : $this->_sections['news']['loop']-1);
if ($this->_sections['news']['show']) {
    $this->_sections['news']['total'] = min(ceil(($this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] - $this->_sections['news']['start'] : $this->_sections['news']['start']+1)/abs($this->_sections['news']['step'])), $this->_sections['news']['max']);
    if ($this->_sections['news']['total'] == 0)
        $this->_sections['news']['show'] = false;
} else
    $this->_sections['news']['total'] = 0;
if ($this->_sections['news']['show']):

            for ($this->_sections['news']['index'] = $this->_sections['news']['start'], $this->_sections['news']['iteration'] = 1;
                 $this->_sections['news']['iteration'] <= $this->_sections['news']['total'];
                 $this->_sections['news']['index'] += $this->_sections['news']['step'], $this->_sections['news']['iteration']++):
$this->_sections['news']['rownum'] = $this->_sections['news']['iteration'];
$this->_sections['news']['index_prev'] = $this->_sections['news']['index'] - $this->_sections['news']['step'];
$this->_sections['news']['index_next'] = $this->_sections['news']['index'] + $this->_sections['news']['step'];
$this->_sections['news']['first']      = ($this->_sections['news']['iteration'] == 1);
$this->_sections['news']['last']       = ($this->_sections['news']['iteration'] == $this->_sections['news']['total']);
?>
                                                <li><i class="i-point"></i><a href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['title']; ?>
</a></li>
                                            <?php endfor; endif; ?>  
                                        </ul>
                                    </div>
                                </div>
                                <div class="block_right">
                                    <div class="k_left">
                                        <?php if ($this->_tpl_vars['public_hand_data']['left_news']['img']['3']['title'] != ''): ?>
                                            <a href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['3']['url']; ?>
" target="_blank">
                                                <img src="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['3']['img']; ?>
">
                                                <div class="black_gb">
                                                    <span class="white_font"><?php echo $this->_tpl_vars['public_hand_data']['left_news']['img']['3']['title']; ?>
</span>
                                                </div>
                                            </a>
                                        <?php endif; ?> 
                                    </div>
                                    <div class="k_right">
                                        <ul>
                                            <?php unset($this->_sections['news']);
$this->_sections['news']['loop'] = is_array($_loop=$this->_tpl_vars['public_hand_data']['left_news']['data_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news']['name'] = 'news';
$this->_sections['news']['start'] = (int)12;
$this->_sections['news']['max'] = (int)4;
$this->_sections['news']['show'] = true;
if ($this->_sections['news']['max'] < 0)
    $this->_sections['news']['max'] = $this->_sections['news']['loop'];
$this->_sections['news']['step'] = 1;
if ($this->_sections['news']['start'] < 0)
    $this->_sections['news']['start'] = max($this->_sections['news']['step'] > 0 ? 0 : -1, $this->_sections['news']['loop'] + $this->_sections['news']['start']);
else
    $this->_sections['news']['start'] = min($this->_sections['news']['start'], $this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] : $this->_sections['news']['loop']-1);
if ($this->_sections['news']['show']) {
    $this->_sections['news']['total'] = min(ceil(($this->_sections['news']['step'] > 0 ? $this->_sections['news']['loop'] - $this->_sections['news']['start'] : $this->_sections['news']['start']+1)/abs($this->_sections['news']['step'])), $this->_sections['news']['max']);
    if ($this->_sections['news']['total'] == 0)
        $this->_sections['news']['show'] = false;
} else
    $this->_sections['news']['total'] = 0;
if ($this->_sections['news']['show']):

            for ($this->_sections['news']['index'] = $this->_sections['news']['start'], $this->_sections['news']['iteration'] = 1;
                 $this->_sections['news']['iteration'] <= $this->_sections['news']['total'];
                 $this->_sections['news']['index'] += $this->_sections['news']['step'], $this->_sections['news']['iteration']++):
$this->_sections['news']['rownum'] = $this->_sections['news']['iteration'];
$this->_sections['news']['index_prev'] = $this->_sections['news']['index'] - $this->_sections['news']['step'];
$this->_sections['news']['index_next'] = $this->_sections['news']['index'] + $this->_sections['news']['step'];
$this->_sections['news']['first']      = ($this->_sections['news']['iteration'] == 1);
$this->_sections['news']['last']       = ($this->_sections['news']['iteration'] == $this->_sections['news']['total']);
?>
                                                <li><i class="i-point"></i><a href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['title']; ?>
</a></li>
                                            <?php endfor; endif; ?>  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="M2_item">
<a href="/peidui/hehun/" target="_blank" class="lis">
	<div class="img"><img src="/static/img/bzhh.png" alt=""></div>
	<div class="name">八字合婚</div>
	<div class="miaoshu">八字合婚是非常古老的配對方法，在古代，婚前男女雙方交換庚帖，以蔔八字是否相配，謂之“八字合婚”。 所謂合婚，就是把男女雙方八字配在壹起，看雙方八字之間的五行是否和諧從而得出合婚結果。</div>
	<div class="btn"><p>立即查询</p></div>
</a>
<a href="/peidui/xingzuo/" target="_blank" class="lis">
	<div class="img"><img src="/static/img/xzpd.png" alt=""></div>
	<div class="name">星座配對</div>
	<div class="miaoshu">每個星座都有不同的性格，在壹起也會産生不同的化學反應，妳和他（她）之間的緣分到底是什麽樣的？妳們的愛情指數是多少呢？星座配對讓您輕松了解彼此的緣分。</div>
	<div class="btn"><p>立即查询</p></div>
</a>
<a href="/peidui/shengxiao/" target="_blank" class="lis">
	<div class="img"><img src="/static/img/sxpd.png" alt=""></div>
	<div class="name">生肖配對</div>
	<div class="miaoshu">在中國的傳統文化中，不同的生肖代表不同的命運和性格，生肖配對就成了很多人預測緣分的工具，我們提供的十二生肖配對查詢能讓您了解自己和其他生肖之間的緣分，希望對您選擇人生伴侶有所幫助。</div>
	<div class="btn"><p>立即查询</p></div>
</a>

<a href="/peidui/xuexing/" target="_blank" class="lis">
	<div class="img"><img src="/static/img/xxpd.png" alt=""></div>
	<div class="name">血型配對</div>
	<div class="miaoshu">血型配對是衆多配對方法中的壹種，我們根據不同血型進行分析對比，從而得出非常詳細的配對結果，可以幫助您在擇偶過程中更快的了解對方，清楚自己和對方的緣分情況。</div>
	<div class="btn"><p>立即查询</p></div>
</a>
</div>
                </div>
  <div class="Min3_R">
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/public/right.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
</div>
</div>
</div></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './index/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>