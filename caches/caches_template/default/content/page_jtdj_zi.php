<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<!--<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>-->
<style type="text/css">
input {
    font-size: 14px;
    line-height: 20px;
    /* font-family: 'Open Sans', sans-serif; */
    font-family: 'Open Sans','Microsoft YaHei',"Heiti SC",'STHeiti Light','PMingLiU', sans-serif;
}
body {background: url(<?php echo IMG_PATH;?>v9/about_bg.png) repeat-x;}
#header{ height:94px;}
#header .logo{ padding:0 100px 0 20px;float:left;}
.log{line-height:24px; height:24px;float:right; font-size:12px}
.log{color:#c7c5c5; margin-top:40px}
.log a{color:#6f6f6f;text-decoration: none;}
.log a:hover{text-decoration: underline;}
#header .content{width:880px; margin:auto; height:60px;padding:10px 0 0 0}
#content{width:1200px; margin:auto;}

.col-auto li{
	height: 33px;
	width: 100%;
	
}
.col-auto .newsList-title{padding-right: 20px;}
.left-nav{width:210px; height:770px; padding-top:10px}
.left-nav h1,.left-nav .content li,.left-nav .content li.cur a,.left-nav .bottom{background: url(<?php echo IMG_PATH;?>v9/about_left.png) no-repeat right top}
.left-nav h1{display:block; height:40px; text-indent:-999px; overflow:hidden}
.left-nav .content{background: url(<?php echo IMG_PATH;?>sidebar_bg.png) no-repeat left bottom ;padding-left:44px}

.left-nav .content li{background-position: right -102px; display:block; height:30px; line-height:30px; font-size:14px}
.left-nav .content li a{display:block; height:25px; line-height:25px; padding-left:14px; color:#6f6f6f}
.left-nav .content li.cur a{background-position: left -72px;  font-weight:700; color:#0d4b9b}
.left-nav .bottom{background-position: right -168px; height:216px}
.col-auto{ padding:60px 55px}
.col-auto .title{font-size:25px;padding:5px 0 0;background: url(<?php echo IMG_PATH;?>uline.gif) repeat-x left bottom; margin-bottom:15px}
.col-auto .content p{ margin-top:15px; font-size:14px; line-height:25px; color:#6f6f6f}
.footer{color:#666; line-height:24px;width:920px; margin:auto; text-align:center; padding:12px 0; margin-top:52px; border-top:1px solid #e5e5e5}
.footer p.info a{color:#666;}
.left-nav .content li a:hover{
	background: url(http://www.zxlh.asia/statics/images/sidebar_ico02.jpg) no-repeat 60px center #DE2810;
	color: #fff !important;
};

</style>
<link href="<?php echo CSS_PATH;?>newbetter.css" rel="stylesheet" type="text/css" />
<div class="ban3"> <img src="<?php echo $CATEGORYS[$parentid]['image'];?>"  /> </div>
<div id="content">
  <div class="col-left left-nav">
    <h2 style="background-color:#DE2810;"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?><br>
      <?php echo $CATEGORYS[$CAT['parentid']]['catdir'];?></h2>
    <br /> 
    <!-- 代码 开始 -->
   
<ul class="content" id="nav"><?php include template("content","f_r"); ?>
</ul>
  </div>
  <div class="col-auto">
    <DIV class=nymore>当前位置：<a href="<?php echo siteurl($siteid);?>">首页</a> &gt;<?php echo catpos($catid);?> </DIV>
    <div class="clear"></div>
    <div class="content"> <?php echo $content;?> </div>
  </div>
</div>
<?php include template("content","footer"); ?>