<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE >
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no" charset="utf-8">
<meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale=1">
<title><?php if($title) { ?><?php echo $title;?><?php } else { ?><?php echo $catname;?><?php } ?>-<?php echo $mobile['sitename'];?></title>
<meta name="keywords" content="<?php echo $mobile['keywords'];?>">
 <meta name="description" content="<?php echo $mobile['description'];?>">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>sty.css">
<link href="<?php echo CSS_PATH;?>SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
<script src="<?php echo JS_PATH;?>SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="<?php echo CSS_PATH;?>lanrenzhijia.css" type="text/css" rel="stylesheet" />
<script src="http://www.lanrenzhijia.com/ajaxjs/jquery.min.js"></script>
</head>

<body>
<div id="CollapsiblePanel1" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="0"><img src="<?php echo IMG_PATH;?>index_06.png" width="40" height="30"></div>
  <div class="CollapsiblePanelContent">
    <ul class="nav">
      <li><a href="<?php echo MOBILE_SITEURL;?>">网站首页</a></li>
      <li><a href="<?php echo APP_PATH;?>index.php?m=mobile&c=index&a=show&catid=58&id=34"><?php echo $CATEGORYS['96']['catname'];?></a></li>
      <li><a href="<?php echo $CATEGORYS['13']['url'];?>"><?php echo $CATEGORYS['13']['catname'];?></a></li>
      <li><a href="<?php echo $CATEGORYS['104']['url'];?>"><?php echo $CATEGORYS['104']['catname'];?></a></li>
      <li><a href="<?php echo $CATEGORYS['91']['url'];?>"><?php echo $CATEGORYS['91']['catname'];?></a></li>
      <li><a href="<?php echo $CATEGORYS['155']['url'];?>"><?php echo $CATEGORYS['155']['catname'];?></a></li>
	  <li><a href="<?php echo APP_PATH;?>index.php?m=mobile&c=index&a=show&catid=57&id=33"><?php echo $CATEGORYS['158']['catname'];?></a></li>

      <div style="clear:both;"></div>
    </ul>
  </div>
</div>

<!-- 代码 begin -->
    <div class="slide_container">
      <ul class="rslides" id="slider">
	
        <li>
          <img src="<?php if($image1) { ?><?php echo $image1;?><?php } else if($CATEGORYS[$CAT[parentid]][image1]) { ?><?php echo $CATEGORYS[$CAT['parentid']]['image1'];?><?php } else { ?><?php echo $CATEGORYS[$CATEGORYS[$CAT['parentid']]['parentid']]['image1'];?><?php } ?>" height="205" alt="">
        </li>
	
      </ul>
    </div>
<script src="<?php echo JS_PATH;?>responsiveslides.min.js"></script>
<script>
$(function () {
    $("#slider").responsiveSlides({
    auto: true,
    pager: false,
    nav: true,
    speed: 500,
    // 对应外层div的class : slide_container
    namespace: "slide"
    });
});
</script>
<!-- 代码 end -->