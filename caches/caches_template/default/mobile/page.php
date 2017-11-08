<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>


<style>
.lmtys span a{ float:none}
.content_img{ width:100%}
.content_img img{ max-width:100%;}
</style>
<div style="padding:8px 10px; clear:both;">
       <div class="lmtys"><span style="font-size:14px;"><?php echo $catparent;?> > <?php echo $catname;?> </span></div>

  <ul class="wzbtlb" style="padding-top:10px;">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e638e4f8027149b41f58b3f47a5f0f65&action=category&catid=%24catid&order=catid+asc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'catid asc','limit'=>'20',));}?>
   <?php if($data) { ?>
  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
  <li style="text-align:center; background:#3498db; border-bottom:3px solid #FFF"><a href="<?php echo page_url($r['catid']);?>" style="color:#FFF"><?php echo $r['catname'];?></a></li>
  <?php $n++;}unset($n); ?>
  <?php } else { ?>
  <div class="content_img">
   <?php echo $content;?>
   </div>
  <?php } ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>





  </ul>
  
               <div style="clear:both;"></div>
  <!--     <DIV id="an_more_${viewid}" class="more" ><a href="javascript:void(0);" onClick="javascript:get_more_${viewid}();">点击查看更多</a></DIV> -->
<!-- <DIV id="an_load_${viewid}" class="more" style="display:none;">正在加载......</DIV> -->
</div>

<?php include template("mobile","footer"); ?>