<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {background: url(<?php echo IMG_PATH;?>v9/about_bg.png) repeat-x;}
#header{ height:94px;}
#header .logo{ padding:0 100px 0 20px;float:left;}
.log{line-height:24px; height:24px;float:right; font-size:12px}
.log{color:#c7c5c5; margin-top:40px}
.log a{color:#6f6f6f;text-decoration: none;}
.log a:hover{text-decoration: underline;}
#header .content{width:880px; margin:auto; height:60px;padding:10px 0 0 0}
#content{width:1200px; margin:auto; }
.left-nav{width:210px; height:770px; padding-top:10px}
.left-nav h1,.left-nav .content li,.left-nav .content li.cur a,.left-nav .bottom{background: url(<?php echo IMG_PATH;?>v9/about_left.png) no-repeat right top}
.left-nav h1{display:block; height:40px; text-indent:-999px; overflow:hidden}
.left-nav .content{background: url(<?php echo IMG_PATH;?>sidebar_bg.png) no-repeat left bottom ; padding-left:44px}
.left-nav .content li{background-position: right -102px; display:block; height:30px; line-height:30px; font-size:14px}
.left-nav .content li a{display:block; height:25px; line-height:25px; padding-left:14px; color:#6f6f6f}
.left-nav .content li.cur a{background-position: left -72px;  font-weight:700; color:#0d4b9b}
.left-nav .bottom{background-position: right -168px; height:216px}
.col-auto{ padding:0 25px}
.col-auto .title{font-size:25px;padding:5px 0 0;background: url(<?php echo IMG_PATH;?>uline.gif) repeat-x left bottom; margin-bottom:15px}
.col-auto .content p{ margin-bottom:15px; font-size:14px; line-height:25px; color:#6f6f6f}
.footer{color:#666; line-height:24px;width:920px; margin:auto; text-align:center; padding:12px 0; margin-top:52px; border-top:1px solid #e5e5e5}
.footer p.info a{color:#666;}
.content .lvse a:hover{background-color:#005e3c !important; }
</style>
<div class="ban3">
    <?php if($CATEGORYS[$catid][parentid]) { ?>
        <img src="<?php echo $CATEGORYS[$CATEGORYS[$catid]['parentid']]['image'];?>"  />
    <?php } else { ?>
         <img src="<?php echo $CATEGORYS[$catid]['image'];?>">
    <?php } ?> 
  </div>
<div id="content">
   
	<div class="col-left left-nav">
    	<h3 style="background:url(<?php echo IMG_PATH;?>v9/left.jpg) no-repeat left top #005e3c !important"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?> </h3><br/>
    	<ul class="content">
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c433ae357d9a0c46c4bbc8ac38209972&action=category&catid=191&num=12&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'191','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'12',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
			   <li class="lvse"><a <?php if($catid == $c[catid]) { ?> class="on"  style="background-color:#005e3c;color:#fff;" <?php } ?> href="<?php echo $c['url'];?>"><?php echo $c['catname'];?></a></li>
			  			
            <?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        
    </div>
  <div class="col-auto">
      <DIV class=nymore style="">当前位置：<a href="<?php echo siteurl($siteid);?>">首页</a>&gt;<?php echo catpos($catid);?>  </DIV>
    	    <div class="product-box">
              
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11020915b5f6a0ad15a29040553235f8&action=lists&catid=%24catid&num=12&order=id+DESC&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>

<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		
          
			 <div class="i-box" style="width:33%;height:255px; ">
                 <img src="<?php echo $r['thumb'];?>" style="width:300px;height:200px;border:1px solid #ccc;">
                 <p align="center" style="margin:0;padding:10px;"> <?php echo str_cut($r[title],43,'');?></p>
				
		    </div>

<?php $n++;}unset($n); ?>
           <div class="clear" align="center"><?php echo $pages;?></div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </div>
    </div>
 </div>
<?php include template("content","footer"); ?>