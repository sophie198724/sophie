<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>

<div style="padding:8px 10px; clear:both;">
               <div class="lmtys"><span style="font-size:14px;"><?php echo $CATEGORYS[$parentid]['catname'];?>&gt;<?php echo $catname;?> </span></div>
  <ul class="wzbtlb" style="padding-top:10px;">
  <?php
  if($catid==234)
  {
  ?>
   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5f373ae8451c62542aa3868bbee31aff&sql=select+%2A+from+v9_page+where+catid%3D262\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_page where catid=262 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
     <?php echo $r['content'];?>
   <?php $n++;}unset($n); ?>
   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  
 <?php
  }else
  {
 ?>
  
  <div>
    <img src="/statics/images/<?php echo $catid;?>.jpg" width="100%" />
  </div>
  
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"mobile\" data=\"op=mobile&tag_md5=68b15521cadd85c10346b7eb3489e1a6&action=lists&catid=%24catid&order=id+DESC&moreinfo=1&return=info&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$mobile_tag = pc_base::load_app_class("mobile_tag", "mobile");if (method_exists($mobile_tag, 'lists')) {$info = $mobile_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>'3',));}?>
 <?php $i=1; ?>
    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
     <div class="five_<?php echo $i;?>"><a href="<?php echo show_url($v[catid],$v[id]);?>"><img src="<?php echo $v['thumb'];?>" style="width: 100%"></a></div>
     <h3 style="text-align:center"><?php echo $v['title'];?></h3>
 <?php $i++; ?>
<br />
<br />

   <?php $n++;}unset($n); ?>

   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  <div style=" border-bottom:#CCC solid 2px; margin-bottom:10px; background:#3D107B; padding:5px; color:#FFF">相关推荐 <a href="<?php echo $CATEGORYS[$catid]['url'];?>&t=more" style="color:#FFF; font-family:'Arial Black', Gadget, sans-serif; float:right; ">More>></a></div>
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"mobile\" data=\"op=mobile&tag_md5=969fb577470e2e991c583d37692c69d9&action=lists&catid=%24catid&num=8&order=id+DESC&return=info&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$mobile_tag = pc_base::load_app_class("mobile_tag", "mobile");if (method_exists($mobile_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$mobile_total = $mobile_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($mobile_total, $page, $pagesize, $urlrule);$info = $mobile_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
   <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
      <li><span style="float:left"><img src="images/index_13.png" width="6" height="9"> <a href="<?php echo show_url($v[catid],$v[id]);?>"><?php echo str_cut($v['title'],36,'');?></a></span><?php echo date("Y-m-d",$v[inputtime]);?></li>
	  <?php $n++;}unset($n); ?>
	   <div class="pages"><?php echo $pages;?></div>
 
 	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
 <?php
   }
 ?>
  </ul>
  
               <div style="clear:both;"></div>
  <!--     <DIV id="an_more_${viewid}" class="more" ><a href="javascript:void(0);" onClick="javascript:get_more_${viewid}();">点击查看更多</a></DIV> -->
<!-- <DIV id="an_load_${viewid}" class="more" style="display:none;">正在加载......</DIV> -->
</div>

<?php include template("mobile","footer"); ?>