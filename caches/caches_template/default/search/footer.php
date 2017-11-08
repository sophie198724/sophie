<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="footerWrapper">
	<div class="footer">
    	<div class="logo">
        	<a href="#"><img src="<?php echo IMG_PATH;?>images/logo_footer_03.png"></a>
        </div>
        <div class="sitemap">
        	<div class="col1">
				
                <ul>
				  
                	<li style="margin-left:50px;"><a href="http://wpa.qq.com/msgrd?v=3&uin=98246262&site=qq&menu=yes"><img src="<?php echo IMG_PATH;?>images/qq.png"></a><div align="center">QQ客服</div></li>
                   
                </ul>
            </div>
			<div class="col2" style="margin-top: 40px;">
				<img src="<?php echo IMG_PATH;?>images/weixin.png">
				<p align="center">微信公众号</p>
            </div>
        
        
        </div>
        <hr />
        <div class="copyright">
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=2dd64172cf5f13c11853e2dfc09218ce&pos=footer\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'footer',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<div align=center><img src="<?php echo IMG_PATH;?>images/gongshang.png"></div>
        
		</div>
		
    </div>
</div>