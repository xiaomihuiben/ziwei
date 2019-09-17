<?php /* Smarty version 2.6.25, created on 2019-03-01 11:23:44
         compiled from index/huangli/index_cl.tpl */ ?>
<!--今日黄历-->
<div class="lhlkj">

<div class="lhlkj_l">
<div class="lhlkj_l_s">
<?php echo $this->_tpl_vars['hdjr']['ddd1']; ?>
 <?php echo $this->_tpl_vars['hdjr']['ddd2']; ?>

</div>
<div class="lhlkj_l_z">
<?php echo $this->_tpl_vars['hdjr']['ddd']; ?>

</div>
<div class="lhlkj_l_x">
<?php echo $this->_tpl_vars['hdjr']['ddd3']; ?>

</div>
</div>

<div class="lhlkj_r">
<div class="lhlkj_r_s">
<div class="lhlkj_r_y"><span>宜</span></div><span><?php if ($this->_tpl_vars['hdjr']['yi'] != '-'): ?><?php echo $this->_tpl_vars['hdjr']['yi']; ?>
<?php else: ?>诸事不宜<?php endif; ?></span>
</div>
<div class="lhlkj_r_x">
<div class="lhlkj_r_j"><span>忌</span></div><span><?php if ($this->_tpl_vars['hdjr']['ji'] != '-'): ?><?php echo $this->_tpl_vars['hdjr']['ji']; ?>
<?php else: ?>诸事勿取<?php endif; ?></span>
</div>
</div>
</div>

<!--结束-->