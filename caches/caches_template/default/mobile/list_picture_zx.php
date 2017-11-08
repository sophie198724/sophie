<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>

<div style="padding:8px 10px; clear:both;">
             <div class="lmtys"><span style="font-size:14px;"><?php echo $CATEGORYS[$parentid]['catname'];?>&gt;<?php echo $catname;?> </span></div>
  <ul class="wzbtlb" style="padding-top:10px;">
		  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"mobile\" data=\"op=mobile&tag_md5=969fb577470e2e991c583d37692c69d9&action=lists&catid=%24catid&num=8&order=id+DESC&return=info&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$mobile_tag = pc_base::load_app_class("mobile_tag", "mobile");if (method_exists($mobile_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$mobile_total = $mobile_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($mobile_total, $page, $pagesize, $urlrule);$info = $mobile_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
	
			<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
		
			 <li style="float:left; width:42%; padding: 4%; text-align:center;"><img src="<?php echo $v['thumb'];?>" width="100%" height="110"><br> <?php echo str_cut($v['title'],30,'');?></li>		  
		  <?php $n++;}unset($n); ?>
	
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

  </ul>
             
</div>
     <div style="clear:both;"></div>
  <div class="pages"><?php echo $pages;?></div>


<?php include template("mobile","footer"); ?>