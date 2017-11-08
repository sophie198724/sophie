<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>

<div style="padding:8px 10px; clear:both;">
       <div class="lmtys"><span style="font-size:14px;"><?php echo $CATEGORYS[$parentid]['catname'];?>&gt;<?php echo $catname;?> </span></div>
  <ul class="wzbtlb" style="padding-top:10px;">
            
        
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c2bc3edf68693b0e35ff2465f03826fd&action=category&catid=%24catid&num=12&siteid=%24siteid&order=listorder+ASC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$info = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'12',));}?>
  <?php if($info) { ?>
			<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
			 <li style="float:left; width:42%; padding: 4%; text-align:center;"><a href="<?php echo list_url($v['catid']);?>"><img src="<?php echo $v['image'];?>" width="100%" ><br> <?php echo str_cut($v['catname'],30,'');?></a></li>		  
		  <?php $n++;}unset($n); ?>
          
    <?php } else { ?>

     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=52c0584b3b93081e4634fde0a89e1530&action=lists&catid=%24catid&num=10&order=id+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
     		 <li style="float:left; width:42%; padding: 4%; text-align:center;"><img src="<?php echo $r['thumb'];?>" width="100%" ><br> <?php echo str_cut($r['title'],30,'');?></li>	
     <?php $n++;}unset($n); ?>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    <div class="pages"><?php echo $pages;?></div>
    <?php } ?>      
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
   
  </ul>
             
</div>
     <div style="clear:both;"></div>
  <div class="pages"><?php echo $pages;?></div>


<?php include template("mobile","footer"); ?>