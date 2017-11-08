<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<!--<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>-->
<style type="text/css">
input {
    font-size: 14px;
    line-height: 20px;
    /* font-family: 'Open Sans', sans-serif; */
    font-family: 'Open Sans','Microsoft YaHei',"Heiti SC",'STHeiti Light','PMingLiU', sans-serif;
}
body {background: url(<?php echo IMG_PATH;?>v9/about_bg.png) repeat-x;}
#header{ height:94px;}
#header .logo{ padding:0 100px 0 20px;float:left;}
.log{line-height:24px; height:24px;float:right; font-size:12px}
.log{color:#c7c5c5; margin-top:40px}
.log a{color:#6f6f6f;text-decoration: none;}
.log a:hover{text-decoration: underline;}
#header .content{width:880px; margin:auto; height:60px;padding:10px 0 0 0}
#content{width:1200px; margin:auto;}

.col-auto li{
	height: 33px;
	
}
.col-auto .newsList-title{padding-right: 20px;}
.left-nav{width:210px; height:770px; padding-top:10px}
.left-nav h1,.left-nav .content li,.left-nav .content li.cur a,.left-nav .bottom{background: url(<?php echo IMG_PATH;?>v9/about_left.png) no-repeat right top}
.left-nav h1{display:block; height:40px; text-indent:-999px; overflow:hidden}
.left-nav .content{background: url(<?php echo IMG_PATH;?>sidebar_bg.png) no-repeat left bottom ;padding-left:44px}

.left-nav .content li{background-position: right -102px; display:block; height:30px; line-height:30px; font-size:14px}
.left-nav .content li a{display:block; height:25px; line-height:25px; padding-left:14px; color:#6f6f6f}
.left-nav .content li.cur a{background-position: left -72px;  font-weight:700; color:#0d4b9b}
.left-nav .bottom{background-position: right -168px; height:216px}
.col-auto{ padding:60px 55px}
.col-auto .title{font-size:25px;padding:5px 0 0;background: url(<?php echo IMG_PATH;?>uline.gif) repeat-x left bottom; margin-bottom:15px}
.col-auto .content p{ margin-top:15px; font-size:14px; line-height:25px; color:#6f6f6f}
.footer{color:#666; line-height:24px;width:920px; margin:auto; text-align:center; padding:12px 0; margin-top:52px; border-top:1px solid #e5e5e5}
.footer p.info a{color:#666;}
.left-nav .content li a:hover{
    background: url(<?php echo IMG_PATH;?>sidebar_ico02.jpg) no-repeat 60px center #28166f;
};

</style>
<div class="ban3">
	    <?php if($CATEGORYS[$catid][parentid]) { ?>
	        <img src="<?php echo $CATEGORYS[$parentid]['image'];?>" />
	    <?php } else { ?>
	         <img src="<?php echo $CATEGORYS[$catid]['image'];?>">
	    <?php } ?> 
  	</div>
<div id="content">
	
	<div class="col-left left-nav">
    	<h3 style="background-color:#29166f;"><?php echo $CATEGORYS[$catid]['catname'];?><br><?php echo $CATEGORYS[$catid]['catdir'];?></h3>
		<br />
    	<ul class="content">
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a358e237509acb5a8ae3505aa2d172b6&action=category&catid=%24catid&num=12&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'12',));}?>
			<?php $n=1; if(is_array($data)) foreach($data AS $n => $c) { ?>
			   <li><a  <?php if($catid == $c[catid]) { ?> class="on" style="background-color:#29166f;color:#fff;" <?php } ?>  href="<?php echo $c['url'];?>" ><?php echo $c['catname'];?></a></li>
			    <!--<ul>
			   <?php $n=1;if(is_array(subcat($c['catid']))) foreach(subcat($c['catid']) AS $c2) { ?>
			      <li style="text-indent:2em;"><a href="<?php echo $c2['url'];?>"><?php echo $c2['catname'];?></a></li>
				<?php $n++;}unset($n); ?> 
                          </ul>-->			
            <?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
  <div class="col-auto">
  	 <DIV class=nymore>当前位置<a href="<?php echo siteurl($siteid);?>">首页</a> &gt;<?php echo catpos(154);?> </DIV>
        <div class="clear"></div>
        <div class="content">
		
           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=00bf1ea28020948d08635cae939b69ac&action=lists&catid=154&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'154','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'154','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?> 
		   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
            <li>
						<!--<a class="newsList-title" href="<?php echo $r['url'];?>" style="float:left;margin-right:5px;"></a>-->
						<h5 style="float:left;"><a style="color:#6f6f6f;" href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></h5>
						<span style="float:right; line-height:33px; "><?php echo date('Y-m-d',$r[inputtime]);?></span>
						
			</li>
  
		 <?php $n++;}unset($n); ?>  
		   
        	    
        </div>
		<div align="center"><?php echo $pages;?></div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
    </div>
 </div>
<?php include template("content","footer"); ?>