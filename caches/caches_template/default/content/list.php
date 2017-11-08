<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div style="display:block;width:100%;margin-top:68px;height:auto"> 
    <?php if($CATEGORYS[$catid][parentid]) { ?>
        <img src="<?php echo $CATEGORYS[$CATEGORYS[$catid]['parentid']]['image'];?>" width="100%" height="auto" />
    <?php } else { ?>
         <img src="<?php echo $CATEGORYS[$catid]['image'];?>" width="100%" height="auto">
    <?php } ?> 
  </div>

<div class="wrapper"><div class="container irContainer" id="newsevents">
<DIV class=nymore>当前位置：首页> <?php echo catpos($catid);?></DIV>  
    <div class="irSection">
    <div class="irSideArea">
            <div class="irSideBox" id="highlightBox">
                <h3 style="color:red;">重要关注</h3>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=51a5c090347252ecdce473aae3811246&action=position&posid=2&catid=%24catid&order=listorder+DESC&thumb=1&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>$catid,'order'=>'listorder DESC','thumb'=>'1','limit'=>'2',));}?>	
				 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	
				<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"></a>
				<a href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],36);?></a>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
             </div>        	
			 <div class="irSideBox">
            	<h3 style="color:red;">相关资料</h3>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=53afbbc856a394aff32f1b1bba2fbe52&action=position&posid=2&catid=%24catid&order=listorder+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','catid'=>$catid,'order'=>'listorder DESC','limit'=>'8',));}?>	
				 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li style="line-height:30px;height:30px;"><a href="<?php echo $r['url'];?>"><?php echo str_cut($r['title'],36);?></a></li>
                 <?php $n++;}unset($n); ?>
				 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                
            </div>
            <div style="clear:both; width:0; height:0;"></div>
            <div class="clearfix"></div>
        </div>
		
        <div class="irContentArea">
            <h1 class="irTitle" style="background-color:#29166f;line-height:35px;
    padding: 20px 40px;
    font-weight: bold;
    text-align: center;color:#fff;"><?php echo $CATEGORYS[$catid]['catname'];?><br><?php echo $CATEGORYS[$catid]['catdir'];?>
</h1>
            <div class="fright">
                
                <div class="selectWrapper yearSelect">
                    <!-- <select id="yearSelect" class="dropdown" onChange="javascript:goto('?year='+this.value+'&type=all');">
                        <option value="all" selected>全部年份</option>
                        <option value="2016" >2016年</option>
                        <option value="2015" >2015年</option>
                        <option value="2014" >2014年</option>
                    </select> -->
                </div>
            </div><div style="clear:both; width:0; height:0;"></div>
            <div class="clearfix"></div>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6f8030ced4385b869c7b03a744380552&action=lists&catid=%24catid&num=4&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>  
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>	             
            <div class="listItem2">
            	<div class="date">
                	<div class="month"><?php echo date('m',$r[inputtime]);?>
</div>
                    <div class="day"><?php echo date("d",$r[inputtime]);?></div>
                    <div class="year"><?php echo date('Y',$r[inputtime]);?></div>
                </div>
                <div class="content">
                	<h2><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],60,'…');?></a></h2>
                    <div class="desc"><?php echo $r['description'];?>
                    </div>
                    <div class="tools">
                    	<a href="<?php echo $r['url'];?>" class="ir_tools_ico ico_news" target="_blank">查看</a> 
                    </div>
                </div><div style="clear:both; width:0; height:0;"></div>
                <div class="clearfix"></div>
            </div>
<?php $n++;}unset($n); ?>

           
           
      
      
     
       
               
            <div style="clear:both; width:0; height:0;"></div>
                <div class="pagerWrapper clearfix">
                
                	
					<div class="num" style="float:right"><?php echo $pages;?>
                    </div>
                    
				
            </div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>        			
                    </div>
        <div style="clear:both; width:0; height:0;"></div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="push"></div>
</div>

<?php include template("content","footer"); ?>