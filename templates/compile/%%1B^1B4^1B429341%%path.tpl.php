<?php /* Smarty version 2.6.25, created on 2019-03-01 11:23:05
         compiled from ./index/public/path.tpl */ ?>
<div class="main">
<div class="path clearfix">
<div class="path_l">
当前位置：<a href="<?php echo $this->_tpl_vars['web_url']; ?>
">开运算命网</a> &gt; 
<?php if ($this->_tpl_vars['path']['baba']['name'] != ''): ?><a href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['path']['baba']['extra']; ?>
" title="<?php echo $this->_tpl_vars['path']['baba']['name']; ?>
"><?php echo $this->_tpl_vars['path']['baba']['name']; ?>
</a> &gt; <?php endif; ?> 
<?php if ($this->_tpl_vars['path']['parent_arr']['name'] != ''): ?><a href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['path']['parent_arr']['extra']; ?>
" title="<?php echo $this->_tpl_vars['path']['parent_arr']['name']; ?>
"><?php echo $this->_tpl_vars['path']['parent_arr']['name']; ?>
</a> &gt; <?php endif; ?>
<?php if ($this->_tpl_vars['path']['name'] != ''): ?><a href="<?php echo $this->_tpl_vars['web_url']; ?>
<?php echo $this->_tpl_vars['path']['extra']; ?>
" title="<?php echo $this->_tpl_vars['path']['name']; ?>
"><?php echo $this->_tpl_vars['path']['name']; ?>
</a><?php endif; ?>
<?php if ($this->_tpl_vars['path']['show_info'] != ''): ?> &gt; <?php echo $this->_tpl_vars['path']['show_info']; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['q'] != ''): ?> &gt; <?php echo $this->_tpl_vars['q']; ?>
<?php endif; ?>
</div>
<div class="path_r">
<?php echo $this->_tpl_vars['topic']; ?>

</div>
</div>