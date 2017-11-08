<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>

<div style="padding:8px 10px; clear:both;">
 <div class="lmtys"><span style="font-size:14px;">当前位置：首页 &gt;<?php echo $CATEGORYS[$parentid]['catname'];?><?php echo list_pos($catid);?></span></div>
  <div>
    <h1><?php echo $title;?></h1>
    <h2>作者：<?php echo $username;?>  日期:<?php echo date('Y-m-d',strtotime($inputtime));?>  </h2>
    <hr />
    <div class="nrys"><p>
	<?php echo $content;?>
	</p></div>
    <div style="clear:both;"></div>
  </div>
</div>
<?php include template("mobile","footer"); ?>