<?php exit();//<item name='软件应用' url='?ct=version3&ac=application'/>
?>
<root>
<menu name='算命频道'>
	<node name='分类'>
        <item name='添加分类' url='?ct=class&amp;ac=add&amp;model=video' ct='class' ac='add' />
        <item name='分类管理' url='?ct=class&amp;ac=index&amp;model=video' ct='class' ac='index' />
    </node>
    <node name='付费应用'>
        <item name='订单管理' url='?ct=ffsm_order&ac=index' ct='ffsm_order' ac='index'/>
        <item name='订单导出' url='?ct=ffsm_order&ac=excel' ct='ffsm_order' ac='excel'/>
    </node>
    <node name='常规管理'>
        <item name='缓存管理' url='?ct=cache&ac=index'/>
    </node> 
    <node name='内容管理'>
        <item name='周公解梦' url='?ct=zgjm&ac=index'/>
        <item name='文章信息' url='?ct=news&ac=index'/>
        <item name='单页面管理' url='?ct=page&ac=index'/>
    </node> 
    <node name='手动数据'>
    	<item name='手动数据' url='?ct=hand&amp;ac=hand' ct='hand' ac='hand' />
        <item name='手动分类' url='?ct=hand&amp;ac=hand_type' ct='hand' ac='hand_type' />
    </node>
    <node name='专题管理'>
        <item name='专题' url='?ct=zhuanti&amp;ac=index' ct='zhuanti' ac='index' />
        <item name='添加专题' url='?ct=zhuanti&amp;ac=add' ct='zhuanti' ac='add' />
        <item name='专题模板' url='?ct=zttemplate&amp;ac=index' ct='zttemplate' ac='index' />
    </node>
</menu>
<menu name='系统'> 
  <node name='系统基配置'>
    <item name='系统基本配置' url='?ct=system&amp;ac=index' />
    <item name='测算价格配置' url='?ct=system&amp;ac=index_m' />
  </node>
  <node name='帐号管理'>
    <item name='系统帐号管理' url='?ct=users&amp;ac=index' ct='users' ac='index' />
    <item name='组权限管理' url='?ct=users&amp;ac=edit_purview_groups' ct='users' ac='edit_purview_groups' />
    <item name='组权限XML配置' url='?ct=users&amp;ac=edit_purview_xml' ct='users' ac='edit_purview_xml' />
    <item name='登录IP限制' url='?ct=users&amp;ac=iplimit' ct='users' ac='iplimit' />
    <item name='我的信息' url='?ct=users&amp;ac=mypurview' default='1' ct='users' ac='mypurview' />
    <item name='修改密码' url='?ct=users&amp;ac=editpwd' ct='users' ac='editpwd' />
  </node>
  <node name='系统其它'>
    <item name='操作日志' url='?ct=users&amp;ac=log' ct='users' ac='log' />
    <item name='登录日志' url='?ct=users&amp;ac=login_log' ct='users' ac='login_log' /> 
  </node>
</menu>
</root> 