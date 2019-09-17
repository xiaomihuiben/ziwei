<?php /* Smarty version 2.6.25, created on 2019-03-01 11:23:20
         compiled from ./h5/public/h5_nav.tpl */ ?>
<div id="navi">
    <?php $_from = $this->_tpl_vars['public_hand_data']['class_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
    <dl class="mod_dl">
        <dt><a href="http://m.cskadmin.52ddtest.cn/<?php echo $this->_tpl_vars['v']['extra']; ?>
"><?php echo $this->_tpl_vars['v']['name']; ?>
</a></dt>
        <dd>
            <ul class="clearfix">
                <?php $_from = $this->_tpl_vars['v']['son']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vs']):
?>
                <li><a href="/<?php echo $this->_tpl_vars['vs']['extra']; ?>
" title="<?php echo $this->_tpl_vars['vs']['name']; ?>
"><?php if ($this->_tpl_vars['vs']['shownames'] != ''): ?><?php echo $this->_tpl_vars['vs']['shownames']; ?>
<?php else: ?><?php echo $this->_tpl_vars['vs']['name']; ?>
<?php endif; ?></a></li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?>
</div>