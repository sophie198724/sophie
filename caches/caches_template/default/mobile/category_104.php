<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("mobile","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>bellows.min.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>bellows-theme.min.css">


<div style="padding:8px 10px; clear:both;">
  <div class="lmtys"><span style="font-size:14px;">当前位置：首页 &gt;<?php echo list_pos($catid);?> </span></div>
  
  <div class="viewport">
	<div class="main-content">
		
		<div class="bellows">
	
			<div class="bellows__item">
				<div class="bellows__header">
					<h3>青春党建</h3>
				</div>
				<div class="bellows__content">
						<ul class="zl">
						 <?php $n=1;if(is_array(subcate(206))) foreach(subcate(206) AS $s) { ?>
						<li> <a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
						<?php $n=1;if(is_array(subpage(206))) foreach(subpage(206) AS $s) { ?>
					    <li> <a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a></li>
						<?php $n++;}unset($n); ?>	
					</ul>
				</div>
			</div>
			<div class="bellows__item">
				<div class="bellows__header">
					<h3>共青团委</h3>
				</div>
				<div class="bellows__content">
						<ul class="zl">
                        <?php $n=1;if(is_array(subpage(207))) foreach(subpage(207) AS $s) { ?>
					    <li> <a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
                        
						 <?php $n=1;if(is_array(subcate(207))) foreach(subcate(207) AS $s) { ?>
						<li> <a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
								
					</ul>
				</div>
			</div>
			<div class="bellows__item">
				<div class="bellows__header">
					<h3>工&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;会</h3>
				</div>
				<div class="bellows__content">
						<ul class="zl">
                        <?php $n=1;if(is_array(subpage(208))) foreach(subpage(208) AS $s) { ?>
					    <li> <a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a></li>
						<?php $n++;}unset($n); ?>	
						 <?php $n=1;if(is_array(subcate(208))) foreach(subcate(208) AS $s) { ?>
						<li> <a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
								
					</ul>
				</div>
			</div>
			<div class="bellows__item">
				<div class="bellows__header">
					<h3>妇 委 会</h3>
				</div>
				<div class="bellows__content">
						<ul class="zl">
                        
                        <?php $n=1;if(is_array(subpage(209))) foreach(subpage(209) AS $s) { ?>
					    <li> <a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a></li>
						<?php $n++;}unset($n); ?>	
						<?php $n=1;if(is_array(subcate(209))) foreach(subcate(209) AS $s) { ?>
						<li> <a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
						
						
					</ul>
				</div>
			</div>
		</div>
		<!-- JavaScript -->

		<script src="<?php echo JS_PATH;?>highlight.pack.js"></script>
		<script src="<?php echo JS_PATH;?>velocity.min.js"></script>
		<script src="<?php echo JS_PATH;?>bellows.min.js"></script>
		<script>
			$(function(){
			$('.bellows').bellows();
			 });
		</script>
	</div>
</div>
               <div style="clear:both;"></div>
     
<DIV id="an_load_${viewid}" class="more" style="display:none;">正在加载......</DIV>
</div>


<?php include template("mobile","footer"); ?>