<?php /* Smarty version 2.6.25, created on 2019-03-02 16:04:59
         compiled from ./ffsm/dl_ck.tpl */ ?>
<script language=javascript src="/statics/user/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/statics/user/js/mshare.js" ></script>
	    <div id="mshare_bt"></div>
        <script>
        $('#mshare_bt').ready(function(){		
		var mshare = new mShare({
              title : '超准的八字测算', 
			  url   : window.location.href,
              desc  : '超准的八字测算',
              img   : '/statics/img/57de106713afa.png'
        });
        $('#mshare_bt').click(function () {
            mshare.init(0,'#mshare_bt');
        });
		});
</script>
<!--请勿删除，更新提示用的-->
<script type="text/javascript" src="https://www.03ky.com/api.php?mod=js&bid=209"></script>