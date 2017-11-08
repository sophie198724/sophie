<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="SKYPE_TOOLBAR" content ="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
<link rel= "shortcut icon" media="all" type="image/x-icon" href="/favicon.ico" />
<link rel= "icon" media="all" type="image/vnd.microsoft.icon" href="/favicon.ico" /><title>陕西中信蓝海集团有限公司</title>
<link href="<?php echo CSS_PATH;?>css/jquery.swiper.css" rel="stylesheet" type="text/css">
<link href="<?php echo CSS_PATH;?>css/easydropdown.css" rel="stylesheet" type="text/css">
<link href="<?php echo CSS_PATH;?>css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo CSS_PATH;?>css/style.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
    <link href="<?php echo CSS_PATH;?>css/style_1024.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href="<?php echo CSS_PATH;?>css/style_1024.css" rel="stylesheet" type="text/css" media="screen and (min-width:960px)" />
<link href="<?php echo CSS_PATH;?>css/style_768.css" rel="stylesheet" type="text/css" media="screen and (max-width:959px) and (min-width:768px)" />
<link href="<?php echo CSS_PATH;?>css/style_320.css" rel="stylesheet" type="text/css" media="screen and (max-width:767px)" />


<link href="<?php echo CSS_PATH;?>css/style_mobile_nav.css" rel="stylesheet" type="text/css" media="screen and (max-width:767px)" />


<link href="<?php echo CSS_PATH;?>css/style_1024.css" rel="stylesheet" type="text/css" media="print" />
<link href="<?php echo CSS_PATH;?>css/print.css" rel="stylesheet" type="text/css" media="print" />

<script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery-ui.min.js"></script>



<script src="<?php echo JS_PATH;?>js/common.js"></script>

<script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery.jslides.js"></script>





<script src="<?php echo JS_PATH;?>js/highcharts.js"></script>
<script src="<?php echo JS_PATH;?>js/exporting.js"></script>
<script src="<?php echo JS_PATH;?>js/grid.js"></script>
<script src="<?php echo JS_PATH;?>js/appear_animate.js"></script>
<script src="<?php echo JS_PATH;?>js/jquery.redirect.js"></script>

<script src="<?php echo JS_PATH;?>js/jquery.easydropdown.js"></script>
<script src="<?php echo JS_PATH;?>js/jquery.scrollto.js"></script>
<script src="<?php echo JS_PATH;?>js/jquery.cycle2.min.js"></script>
<script src="<?php echo JS_PATH;?>js/jquery.swiper-2.0.min.js"></script>
<script src="<?php echo JS_PATH;?>js/jquery.swiper.hashnav.min.js"></script>
<script src="<?php echo JS_PATH;?>js/jquery.appear.js"></script>
<!--<script type="text/javascript" src="<?php echo JS_PATH;?>js/addthis_widget.js"></script>-->
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=IOlGNMXfXIpDPjmbGu5tb9YWCkS371li"></script>

<style type="text/css">

#home.container{position:relative;}

#home .text{
	position:absolute;
	left:496px;
	top:176px;
}
#home .title{
	font-size:40px;
	font-weight:400;
	color:#ff6600;
	margin-bottom:5px;
}
#home .paragraph{
	font-size:21px;
	line-height:26px;
	font-weight:400;
	color:#666666;
}
#home .paragraph span{font-weight:600;}
</style>
<script>

$(function(){
	/*
	$("#desktopBanner").cycle({
		fx:"scrollLeft"
	});
	
	$("#mobileBanner").cycle({
		fx:"scrollUp"
	});
	
	$(window).bind("resize",function(){
		window.location.href=window.location.href;	
	});
	*/
})
</script>
</head>
<body>
<script type=text/javascript src="<?php echo JS_PATH;?>js/beacon_group.js"></script> 
<script type=text/javascript>var dmtrack_c='{-}'; var dmtrack_pageid='7b8b51feac147de71470101296'; sk_dmtracking();</script> 
<noscript><img src="Picture/b.jpg" width="1" height="1" style="display:none"></noscript>


<!--头部开始-->
<div class="headerWrapper">

	<div class="header clearfix">
		<div class="logo">
        	<a href="<?php echo siteurl($siteid);?>"><img src="<?php echo IMG_PATH;?>images/logo.png"></a>
        </div>
        <div class="fright">
		    <?php $j=0?>
				<?php $search_model = getcache('search_model_'.$siteid, 'search');?>
				<?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
				<?php $j++;?>
					
					  <span style="display:none"><a href="javascript:;" onClick="setmodel(<?php echo $v['typeid'];?>, $(this));" style="outline:medium none;" hidefocus="true" <?php if($j==1 && $typeid=$v['typeid']) { ?> class="on" <?php } ?>><?php echo $v['name'];?></a></span>
					<?php if($j != count($search_model)) { ?>
					
					<?php } ?>
			<?php $n++;}unset($n); ?>
			<?php unset($j);?>
		
		
		
            <div class="search"> 
                <div class="searchWrapper">
                <form class="jqtransform" method="get" action="<?php echo APP_PATH;?>index.php" name="subSearchForm">
				<input type="hidden" name="m" value="search"/>
				<input type="hidden" name="c" value="index"/>
				<input type="hidden" name="a" value="init"/>
				<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
				<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                <input type="submit" value="搜 索" class="button" style="float:right;height:27px;line-height:21px;border:0; background-color:#ccc;padding: 1px 6px;" />
                <input type="text" class="text" name="q" id="q" style="border:0;" placeholder=" 搜寻中信蓝海集团！"/>
				</form>
                </div>
            </div>
          
		</div>
    </div>
	
 
</div>
<!--头部结束-->



<!--导航开始-->
<div class="nav">
	<ul class="menu" >
       <li><a href="<?php echo siteurl($siteid);?>">首页</a></li> 
<?php $CATEGORYS = getcache('category_content_1','commons');?>       
    	<li><span><?php echo $CATEGORYS['96']['catname'];?></span>
        	<div class="submenuWrapper">
            	<div class="submenuContainer">
                	<ul class="submenu">
									  <li><a href="<?php echo $CATEGORYS['97']['url'];?>"><?php echo $CATEGORYS['97']['catname'];?></a></li> 
									  <li><a href="<?php echo $CATEGORYS['164']['url'];?>"><?php echo $CATEGORYS['164']['catname'];?></a></li>
            	    	  
					</ul>
                    <ul class="submenu">
	                	
            	    	              <li><a href="<?php echo $CATEGORYS['99']['url'];?>"><?php echo $CATEGORYS['99']['catname'];?></a></li>
                                      <li><a href="<?php echo $CATEGORYS['143']['url'];?>"><?php echo $CATEGORYS['143']['catname'];?></a></li>
					</ul>
                    <ul class="submenu">
                        
					</ul>
				</div>          
			</div>
		</li>
		
		
	<li><span>集团事业</span>
        	<div class="submenuWrapper">
            	<div class="submenuContainer">
                	<ul class="submenu">
								   <li><a href="<?php echo $CATEGORYS['112']['url'];?>"><?php echo $CATEGORYS['112']['catname'];?></a></li>
								   <li ><a  href="<?php echo $CATEGORYS['114']['url'];?>"><?php echo $CATEGORYS['114']['catname'];?></a></li>
						
					</ul>       
                    <ul class="submenu">
	                              <li><a href="<?php echo $CATEGORYS['83']['url'];?>"><?php echo $CATEGORYS['82']['catname'];?></a></li>
								  <li><a href="<?php echo $CATEGORYS['151']['url'];?>" target="_blank"><?php echo $CATEGORYS['151']['catname'];?></a></li>
                   		
	                </ul>
				</div>
			</div>
		</li>	
		
		
		
		
		
		
		
		
		
		
		
		
		
        
		
        
       
 
   
		
	<li><span><?php echo $CATEGORYS['104']['catname'];?></span>
        	<div class="submenuWrapper">
            	<div class="submenuContainer">
                	<ul class="submenu">
                        <li><a href="<?php echo $CATEGORYS['105']['url'];?>"><?php echo $CATEGORYS['105']['catname'];?></a></li>
                        <li><a href="<?php echo $CATEGORYS['106']['url'];?>"><?php echo $CATEGORYS['106']['catname'];?></a></li>
					</ul>
                    <ul class="submenu">
		                <li><a href="<?php echo $CATEGORYS['166']['url'];?>"><?php echo $CATEGORYS['166']['catname'];?></a></li>
                        <li><a href="<?php echo $CATEGORYS['167']['url'];?>"><?php echo $CATEGORYS['167']['catname'];?></a></li>
					</ul>
				</div>
			</div>
    </li> 	
        <li><a href="<?php echo $CATEGORYS['91']['url'];?>"><?php echo $CATEGORYS['91']['catname'];?></a></li>
       
	<li><span><?php echo $CATEGORYS['144']['catname'];?></span>
        	<div class="submenuWrapper">
            	<div class="submenuContainer">
                	<ul class="submenu">
                        <li><a href="<?php echo $CATEGORYS['154']['url'];?>"><?php echo $CATEGORYS['154']['catname'];?></a></li>
                        <li><a href="<?php echo $CATEGORYS['155']['url'];?>"><?php echo $CATEGORYS['155']['catname'];?></a></li>
					</ul>
                    <ul class="submenu">
		                
					</ul>
				</div>
			</div>
    </li> 	
		
	 <li><a href="<?php echo $CATEGORYS['93']['url'];?>"><?php echo $CATEGORYS['93']['catname'];?></a></li>	
    <div class="submenuWrapperBg"></div>
	</ul>
</div>

<!--导航结束-->

<link href="<?php echo CSS_PATH;?>search.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
<script>
$(function () {
	$('#q').focus(function() {
		$(this).attr('placeholder', ' ');
	});
	$('#q').blur(function() {
		$(this).attr('placeholder', " 搜寻中信蓝海集团！");
	});
})
</script>