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
  <ul>
 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"mobile\" data=\"op=mobile&tag_md5=c974ebe159aa87d8fd7a2fe855cf8945&action=lists&catid=%24catid&order=id+DESC&moreinfo=1&return=info&num=10&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$mobile_tag = pc_base::load_app_class("mobile_tag", "mobile");if (method_exists($mobile_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$mobile_total = $mobile_tag->count(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($mobile_total, $page, $pagesize, $urlrule);$info = $mobile_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
    <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
   <li style=" margin-bottom:20px; padding-bottom:10px; border-bottom:#CCC dotted 1px">  
     <div style="float:left; width:40%"> <img src="<?php echo $v['thumb'];?>" style="width: 100%"></div>  
     <div style="float:right; width:55%; text-align:left">  <h3 style=" font-size:1.2em"><?php echo str_cut($v['title'],32);?></h3>
        <p style="font-size:0.9em"><?php echo str_cut($v['description'],80);?></p>
     </div>
     <div style="clear:both"></div>
  </li>

   <?php $n++;}unset($n); ?>
   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
   
   </ul>  
   <div class="pages"><?php echo $pages;?></div>
 <?php
   }
 ?>
  </ul>
  
               <div style="clear:both;"></div>
  <!--     <DIV id="an_more_${viewid}" class="more" ><a href="javascript:void(0);" onClick="javascript:get_more_${viewid}();">点击查看更多</a></DIV> -->
<!-- <DIV id="an_load_${viewid}" class="more" style="display:none;">正在加载......</DIV> -->
</div>

<?php include template("mobile","footer"); ?>