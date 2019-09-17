<?php
$webnames = $_SERVER['HTTP_HOST'];
$doname = array('cskadmin.52ddtest.cn','m.cskadmin.52ddtest.cn',"csk.52ddtest.cn",'zb.aemui.cn','m.zb.aemui.cn',"sm.aemui.cn");
if($_GET['a']){
	print_r($doname);
}
if(!in_array($webnames,$doname)){
	exit;
}
?>