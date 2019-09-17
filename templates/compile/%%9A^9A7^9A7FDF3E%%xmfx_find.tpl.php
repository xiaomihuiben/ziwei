<?php /* Smarty version 2.6.25, created on 2019-03-01 11:24:48
         compiled from h5/xingming/xmfx_find.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script>stepMenu();</script>
<div id="path">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/path.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<h1 class="title"><?php echo $this->_tpl_vars['xm_arr']['xing1']; ?>
<?php echo $this->_tpl_vars['xm_arr']['xing2']; ?>
<?php echo $this->_tpl_vars['xm_arr']['ming1']; ?>
<?php echo $this->_tpl_vars['xm_arr']['ming2']; ?>
名称评分</h1>
<div class="detail">
    <div class="remark center">名字分析结果如下</div>

    <dd>
        <strong><?php echo $this->_tpl_vars['xm_arr']['xing1']; ?>
<?php echo $this->_tpl_vars['xm_arr']['xing2']; ?>
<?php echo $this->_tpl_vars['xm_arr']['ming1']; ?>
<?php echo $this->_tpl_vars['xm_arr']['ming2']; ?>
的姓名五格评分：</strong>	<strong class="red"><?php echo $this->_tpl_vars['xmdf']; ?>
分</strong> &nbsp;
        <?php if ($this->_tpl_vars['xmdf'] < 60): ?><?php endif; ?>
    </dd>



        <h2><?php echo $this->_tpl_vars['xm_arr']['xing1']; ?>
<?php echo $this->_tpl_vars['xm_arr']['xing2']; ?>
<?php echo $this->_tpl_vars['xm_arr']['ming1']; ?>
<?php echo $this->_tpl_vars['xm_arr']['ming2']; ?>
的信息:</h2>


    <div class="h2_content">

        <table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#ddd" style="margin-top:10px;">

            <tbody>

            <tr>

                <td  width="100" align="center" bgcolor="#F5F8FD" class="suanming"><strong>繁体字</strong></td>

                <td  width="65" bgcolor="#F5F8FD" class="suanming"><?php echo $this->_tpl_vars['xm_arr']['xing1gb']; ?>
</td>

                <td  width="65" bgcolor="#F5F8FD" class="suanming"><?php echo $this->_tpl_vars['xm_arr']['xing2gb']; ?>
</td>

                <td  width="65" bgcolor="#F5F8FD" class="suanming"><?php echo $this->_tpl_vars['xm_arr']['ming1gb']; ?>
</td>

                <td  width="70" bgcolor="#F5F8FD" class="suanming"><?php echo $this->_tpl_vars['xm_arr']['ming2gb']; ?>
</td>

            </tr>

            <tr>

                <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>拼音</strong></td>

                <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['xm_arr']['xing1py']; ?>
</td>

                <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['xm_arr']['xing2py']; ?>
</td>

                <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['xm_arr']['ming1py']; ?>
</td>

                <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['xm_arr']['ming2py']; ?>
</td>

            </tr>

            <tr>

                <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>康熙笔画：</strong></td>

                <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['bh_wh_arr']['bihua1']; ?>
　</td>

                <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['bh_wh_arr']['bihua2']; ?>
　</td>

                <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['bh_wh_arr']['bihua3']; ?>
　</td>

                <td bgcolor="#F5F8FD" class="suanming" ><?php echo $this->_tpl_vars['bh_wh_arr']['bihua4']; ?>
　</td>

            </tr>

            <tr>

                <td align="center" bgcolor="#F5F8FD" class="suanming"><strong>五格：</strong></td>

                <td bgcolor="#F5F8FD" class="suanming" >天格:<?php echo $this->_tpl_vars['tdr_ge']['tiange']; ?>
 (<?php echo $this->_tpl_vars['tdr_ge']['tian_sancai']; ?>
)</td>

                <td bgcolor="#F5F8FD" class="suanming" >人格:<?php echo $this->_tpl_vars['tdr_ge']['renge']; ?>
 (<?php echo $this->_tpl_vars['tdr_ge']['ren_sancai']; ?>
)</td>

                <td bgcolor="#F5F8FD" class="suanming" >地格:<?php echo $this->_tpl_vars['tdr_ge']['dige']; ?>
 (<?php echo $this->_tpl_vars['tdr_ge']['di_sancai']; ?>
) </td>

                <td bgcolor="#F5F8FD" class="suanming" >外格:<?php echo $this->_tpl_vars['tdr_ge']['waige']; ?>
 (<?php echo $this->_tpl_vars['tdr_ge']['waige_sancai']; ?>
)<br />总格 >> <?php echo $this->_tpl_vars['tdr_ge']['zongge']; ?>
 (<?php echo $this->_tpl_vars['tdr_ge']['zongge_sancai']; ?>
) &nbsp;</td>

            </tr>

            </tbody>

        </table>

    </div>


    <h2>五格详解：</h2>

    <div class="h2_content">
        <span class="brown"><strong>天格<?php echo $this->_tpl_vars['tiangearr']['tiangee']; ?>
的解析:</strong></span> <p>天格数是先祖留传下来的，其数理对人影响不大。</p>
        <p class="cGrey bbg"><?php echo $this->_tpl_vars['tiangearr']['yy']; ?>
<span class="cRed"><?php echo $this->_tpl_vars['tiangearr']['jx']; ?>
</span></p>
        <span class="brown blue">〖详细解释〗:</span> <p><?php echo $this->_tpl_vars['tiangearr']['content']; ?>
</p>
    </div>

    <div class="h2_content">
        <span class="brown"><strong>人格<?php echo $this->_tpl_vars['rengearr']['rengee']; ?>
的解析:</strong></span> <p>人格数是先祖留传下来的，其数理对人影响不大。</p>
        <p class="cGrey bbg"><?php echo $this->_tpl_vars['rengearr']['yy']; ?>
<span class="cRed"><?php echo $this->_tpl_vars['rengearr']['jx']; ?>
</span></p>
        <span class="brown blue">〖详细解释〗:</span> <p><?php echo $this->_tpl_vars['rengearr']['content']; ?>
</p>
    </div>

    <div class="h2_content">
        <span class="brown"><strong>地格<?php echo $this->_tpl_vars['digearr']['rengee']; ?>
的解析:</strong></span> <p>地格数是先祖留传下来的，其数理对人影响不大。</p>
        <p class="cGrey bbg"><?php echo $this->_tpl_vars['digearr']['yy']; ?>
<span class="cRed"><?php echo $this->_tpl_vars['digearr']['jx']; ?>
</span></p>
        <span class="brown blue">〖详细解释〗:</span> <p><?php echo $this->_tpl_vars['digearr']['content']; ?>
</p>
    </div>

    <div class="h2_content">
        <span class="brown"><strong>外格<?php echo $this->_tpl_vars['waigearr']['rengee']; ?>
的解析:</strong></span> <p>外格数是先祖留传下来的，其数理对人影响不大。</p>
        <p class="cGrey bbg"><?php echo $this->_tpl_vars['waigearr']['yy']; ?>
<span class="cRed"><?php echo $this->_tpl_vars['waigearr']['jx']; ?>
</span></p>
        <span class="brown blue">〖姓名命运〗:</span> <p><?php echo $this->_tpl_vars['waigearr']['content']; ?>
</p>
    </div>


    <h2>对三才数理的影响：</h2>

    <div class="h2_content">
        <span class="brown"><strong>您的姓名三才配置为:</strong></span>
        <p><span class="red"> <?php echo $this->_tpl_vars['rssancai']['sancai']; ?>
。</span>它具有如下数理诱导力，据此会对人生产生一定的影响。</p>
        <p class="green bbg">
            <?php echo $this->_tpl_vars['rssancai']['yy']; ?>
 　　<span class="red">（<?php echo $this->_tpl_vars['rssancai']['jx']; ?>
）</span>
        </p>

        <span class="brown"><strong>详细解释:</strong></span><p><?php echo $this->_tpl_vars['rssancai']['content']; ?>
</p>

        <span class="brown">〖对基础运的影响〗:</span> <p><?php echo $this->_tpl_vars['rssancai']['jcy']; ?>
 <em class="red">（<?php echo $this->_tpl_vars['rssancai']['jx1']; ?>
）</em></p>
        <span class="brown">〖对成功运的影响〗:</span> <p><?php echo $this->_tpl_vars['rssancai']['cgy']; ?>
 <em class="red">（<?php echo $this->_tpl_vars['rssancai']['jx2']; ?>
）</em></p>
        <span class="brown">〖对人际关系的影响〗:</span> <p><?php echo $this->_tpl_vars['rssancai']['rjgx']; ?>
 <em class="red">（<?php echo $this->_tpl_vars['rssancai']['jx3']; ?>
）</em></p>
        <span class="brown">〖对性格的影响〗:</span> <p><?php echo $this->_tpl_vars['rssancai']['xg']; ?>
</p>
    </div>
</div>
<div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/more_nav.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/public/news.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => './h5/footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>