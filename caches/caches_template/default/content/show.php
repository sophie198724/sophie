<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div style="display:block;width:100%;margin-top:68px;height:auto">
  <?php if($CATEGORYS[$catid][parentid]) { ?>
        <img src="<?php echo $CATEGORYS[$CATEGORYS[$catid]['parentid']]['image'];?>" width="100%" height="auto" />
    <?php } else { ?>
         <img src="<?php echo $CATEGORYS[$catid]['image'];?>" width="100%" height="auto">
    <?php } ?> 
</div>


<div class="container" id="overview">
<DIV class=nymore>当前位置：首页><?php echo catpos($catid);?></DIV>  
        <div id="new-sidebar">
            <h1 class="title" style="background: url(<?php echo IMG_PATH;?>leftbg.jpg) no-repeat left top #28166f !important;"><?php echo $CATEGORYS[$catid]['catname'];?><br><?php echo $CATEGORYS[$catid]['catdir'];?></h1>
            <div class="logoArea">
                <div>
                    <img src="<?php echo IMG_PATH;?>images/logo.png" alt="">
                </div>
            </div>
            <div class="download">
            
            </div>
            <div class="contactInfo">
                <h2 >联系我们:</h2>
                <div class="contactInfo">
                    <!-- <p>
                    西安曲江新区雁南五路1868号曲江影视大厦10层<br/>
                    联系电话：<br>029-68206165<br>    
                    </p> -->
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=777600b67cd0a6a7eb9a3fa20416cd8f&pos=about\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'about',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="articleMain">
           
            <h1 align="center"><?php echo $title;?></h1></br>
			<h3 align="center">作者:<?php echo $username;?>&nbsp;&nbsp;来源:<?php echo $copyfrom;?>&nbsp;&nbsp;&nbsp;&nbsp;发表时间:<?php echo date('Y-m-d',$r[inputtime]);?></h3>
            
          
            <div id="new-page" style="text-indent:2em;">
                    <?php echo $content;?>
            </div>

            <p class="f14">
                <strong>上一篇：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a><br />
                <strong>下一篇：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
           </p>
            <div class="bshare-custom"><div class="bsPromo bsPromo2"></div>分享给朋友：<a title="分享到微信" class="bshare-weixin" href="javascript:void(0);"></a><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到QQ好友" class="bshare-qqim" href="javascript:void(0);"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb" href="javascript:void(0);"></a><a title="分享到人人网" class="bshare-renren" href="javascript:void(0);"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
        </div>

		<div class="push"></div>
	</div>
<?php include template("content","footer"); ?>