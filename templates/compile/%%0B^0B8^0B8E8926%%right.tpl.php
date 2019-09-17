<?php /* Smarty version 2.6.25, created on 2019-03-01 11:23:00
         compiled from ./index/public/right.tpl */ ?>
<div class="Min3">
<div class="Min3_R">
<div class="ys_item">
    	<div class="title">
        <h3>今日黄历</h3>
        </div>
        <div class="bd bd_s1">
            <div class="mod_ecliptic">
                <div class="ecliptic_date">
                	<script type="text/javascript" src="/huangli.js"></script>
                </div>
            </div>
            <div class="query_btn"><a target="_blank" href="<?php echo $this->_tpl_vars['web_url']; ?>
hdjr/zeri/">吉日查询</a></div>
    	</div>
</div>
<div class="sesx">
    <div class="bd_s1">
        <a href="https://www.03ky.com/2019/shu.html" target="_blank" class="sx-1">鼠</a>
        <a href="https://www.03ky.com/2019/niu.html" target="_blank" class="sx-2">牛</a>
        <a href="https://www.03ky.com/2019/hu.html" target="_blank" class="sx-3">虎</a>
        <a href="https://www.03ky.com/2019/tu.html" target="_blank" class="sx-4">兔</a>
        <a href="https://www.03ky.com/2019/long.html" target="_blank" class="sx-5">龙</a>
        <a href="https://www.03ky.com/2019/she.html" target="_blank" class="sx-6">蛇</a>
        <a href="https://www.03ky.com/2019/ma.html" target="_blank" class="sx-7">马</a>
        <a href="https://www.03ky.com/2019/yang.html" target="_blank" class="sx-8">羊</a>
        <a href="https://www.03ky.com/2019/hou.html" target="_blank" class="sx-9">猴</a>
        <a href="https://www.03ky.com/2019/ji.html" target="_blank" class="sx-10">鸡</a>
        <a href="https://www.03ky.com/2019/gou.html" target="_blank" class="sx-11">狗</a>
        <a href="https://www.03ky.com/2019/zhu.html" target="_blank" class="sx-12">猪</a>
    </div>
</div>
<div id="03ky">
<div class="ys_item">
    <div class="title">
        <h3>应用推荐</h3>
    </div>
    <div class="">
        <ul class="appList clearfix">
        	<?php $_from = $this->_tpl_vars['public_hand_data']['public_right_yingyong']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
				<li><a <?php if ($this->_tpl_vars['v']['blank'] == 1): ?>target="_blank"<?php endif; ?> href="<?php echo $this->_tpl_vars['v']['url']; ?>
"><img src="<?php echo $this->_tpl_vars['v']['listimg']; ?>
" alt="<?php echo $this->_tpl_vars['v']['title']; ?>
" width="64" height="64"><p><?php echo $this->_tpl_vars['v']['title']; ?>
</p></a></li>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    </div>
</div>
    <!--熱門文章-->
    <div class="new_item">
      <div class="com_title2">
        <p>熱門文章</p>
      </div>
      <div class="item">
        <div class="lis_a">
          <a href="/show-4630.html" target="_blank" class="img">
            <img src="http://cskadmin.52ddtest.cn/up_img/201611/07/e0wt55952A5.png" alt=""></a>
          <a href="/show-4637.html" target="_blank" class="img">
            <img src="http://cskadmin.52ddtest.cn/up_img/201611/07/9a4f5A16632.png" alt=""></a>
        </div>
		<?php unset($this->_sections['news']);
$this->_sections['news']['loop'] = is_array($_loop=$this->_tpl_vars['public_hand_data']['left_news']['data_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['news']['name'] = 'news';
$this->_sections['news']['start'] = (int)5;
$this->_sections['news']['max'] = (int)9;
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
        <div class="lis_b"><i></i><a href="<?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['url']; ?>
" target="_blank"><?php echo $this->_tpl_vars['public_hand_data']['left_news']['data_list'][$this->_sections['news']['index']]['title']; ?>
</a></div>
		<?php endfor; endif; ?>
      </div>
    </div>
</div>
</div></div>
<script type="text/javascript">
    $(function () {
        var ie6 = document.all;
        var dv = $('#03ky'), st;
        dv.attr('otop', dv.offset().top); //存储原来的距离顶部的距离
        $(window).scroll(function () {
            st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
            if (st > parseInt(dv.attr('otop'))) {
                if (ie6) {//IE6不支持fixed属性，所以只能靠设置position为absolute和top实现此效果
                    dv.css({ position: 'absolute', top: st });
                }
                else if (dv.css('position') != 'fixed') dv.css({ 'position': 'fixed', top: 40, 'width': '338px' });
            } else if (dv.css('position') != 'static') dv.css({ 'position': 'static' });
        });
    });
</script>