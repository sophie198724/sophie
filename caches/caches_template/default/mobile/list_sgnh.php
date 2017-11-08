<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>

<div style="padding:8px 10px; clear:both;">
               <div class="lmtys"><span style="font-size:14px;"><?php echo $CATEGORYS[$parentid]['catname'];?>&gt;<?php echo $catname;?> </span></div>
  
   <img src="/statics/images/a236_00.gif" width="100%" />
            <?php
    $i = 1;
?>

             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"mobile\" data=\"op=mobile&tag_md5=faff56d96318e02943424549097b7af1&action=lists&catid=%24catid&order=listorder+desc&moreinfo=1&num=15\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$mobile_tag = pc_base::load_app_class("mobile_tag", "mobile");if (method_exists($mobile_tag, 'lists')) {$data = $mobile_tag->lists(array('catid'=>$catid,'order'=>'listorder desc','moreinfo'=>'1','limit'=>'15',));}?>
            
            <?php
            $data = array_chunk($data,5);
            ?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php
$odd = $i % 2 == 0 ? "odd" : "even";
?>
                <?php
                $j = 1;
                ?>
               <img src="/statics/images/a236_0<?php echo $i; ?>.gif" width="100%" />
                <?php $n=1;if(is_array($r)) foreach($r AS $rr) { ?>
                <div class="three_<?php echo $j;?> b">
                 <?php
                  if($j==1)
                  {
                 ?>
                <a href="<?php echo show_url($rr[catid],$rr[id]);?>"><img src="<?php echo $rr['thumb'];?>" style="width: 100%"></a>
                  <a href="<?php echo show_url($rr[catid],$rr[id]);?>"><span style="margin-left: 50%; color:black;"><?php echo $rr['title'];?></span></a>
                
                <?php
                 }
                 else
                 {
                ?>
                 <a href="<?php echo show_url($rr[catid],$rr[id]);?>"><img src="<?php echo $rr['thumb'];?>" style="width:100%; float:left"></a>
                   <a href="<?php echo show_url($rr[catid],$rr[id]);?>"><span style="margin-left: 50%; color:black;"><?php echo $rr['title'];?></span></a>
                
                <?php
                
                  }
                ?>
                </div>
                <?php
                    $j++;
                ?>
                <?php $n++;}unset($n); ?>
                <?php
                    $i++;
                ?>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<br />
<br />

  <div style=" border-bottom:#CCC solid 2px; clear:both; margin-bottom:10px; background:#3D107B; padding:5px; color:#FFF">相关推荐 <a href="<?php echo $CATEGORYS[$catid]['url'];?>&t=more" style="color:#FFF; font-family:'Arial Black', Gadget, sans-serif; float:right; ">More>></a></div>
    <ul class="wzbtlb" style="padding-top:10px;">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"mobile\" data=\"op=mobile&tag_md5=969fb577470e2e991c583d37692c69d9&action=lists&catid=%24catid&num=8&order=id+DESC&return=info&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$mobile_tag = pc_base::load_app_class("mobile_tag", "mobile");if (method_exists($mobile_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$mobile_total = $mobile_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($mobile_total, $page, $pagesize, $urlrule);$info = $mobile_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
   <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
      <li><span style="float:left"><img src="images/index_13.png" width="6" height="9"> <a href="<?php echo show_url($v[catid],$v[id]);?>"><?php echo str_cut($v['title'],36,'');?></a></span><?php echo date("Y-m-d",$v[inputtime]);?></li>
	  <?php $n++;}unset($n); ?>
	   <div class="pages"><?php echo $pages;?></div>
 
 	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
</div>

<?php include template("mobile","footer"); ?>