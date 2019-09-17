<?php /* Smarty version 2.6.25, created on 2019-03-01 11:23:05
         compiled from ./index/public/left_sx.tpl */ ?>
<div class="com_title" style="padding-top: 15px;">
<p>推荐内容</p>
<a href="/sexz/" target="_blank">更多&gt;&gt;</a></div>
<div class="Min3_L">
<div class="M3_item">
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
  <div class="lis">
	<a href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['url']; ?>
" class="img" target="_blank">
	  <img src="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['img'][$this->_sections['news']['index']]['img']; ?>
" alt=""></a>
	<a href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['url']; ?>
" target="_blank" class="bt"><?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['title']; ?>
</a>
	<div class="miaoshu">對於天蠍座來說，2018年也將是一個暖冬，各位天蠍座寶寶們的運勢在這個月裏會有所提升，下麵就讓我們一起來具體了解一下天蠍座在2018年10月裏的財富運勢預測情況吧。</div>
	<div class="info">
	  <div class="num">
		<i>
		</i>
		<span>0</span></div>
	  <div class="time">
		<i>
		</i>
		<span>2018-09-18</span></div>
	</div>
  </div>
<?php endfor; endif; ?>
</div>
</div>