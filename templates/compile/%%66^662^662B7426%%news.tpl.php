<?php /* Smarty version 2.6.25, created on 2019-03-01 11:23:20
         compiled from ./h5/public/news.tpl */ ?>
<div class="detail">
<div class="basebox">
	<div class="bt">
		<p>百科知识</p>
		<a href="/baike/">更多 &gt;</a>
	</div>
</div>
	<dl>
		<ul>
			<?php unset($this->_sections['news']);
$this->_sections['news']['loop'] = is_array($_loop=$this->_tpl_vars['public_hand_data']['left_news']['data_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news']['name'] = 'news';
$this->_sections['news']['start'] = (int)0;
$this->_sections['news']['max'] = (int)8;
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
            	<li><a class="inlink" href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['title']; ?>
</a></li>
            <?php endfor; endif; ?> 
		</ul>
	</dl>
</div>