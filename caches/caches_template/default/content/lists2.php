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

    body {background: url(<?php echo IMG_PATH;?>v9/about_bg.png) repeat-x;}
    #header{ height:94px;}
    #header .logo{ padding:0 100px 0 20px;float:left;}
    .log{line-height:24px; height:24px;float:right; font-size:12px}
    .log{color:#c7c5c5; margin-top:40px}
    .log a{color:#6f6f6f;text-decoration: none;}
    .log a:hover{text-decoration: underline;}
    #header .content{width:880px; margin:auto; height:60px;padding:10px 0 0 0}
    #content{width:1200px; margin:auto; }

    .col-auto li{
        height: 100px;
        width: 100%;
        margin: 20px 0;
    }
    .col-auto .newsList-title{padding-right: 20px;}
    .col-auto li h5 a{font-weight: bold;}
    .left-nav{width:210px; height:770px; padding-top:10px}
    .left-nav h1,.left-nav .content li,.left-nav .content li.cur a,.left-nav .bottom{background: url(<?php echo IMG_PATH;?>v9/about_left.png) no-repeat right top}
    .left-nav h1{display:block; height:40px; text-indent:-999px; overflow:hidden}
    .left-nav .content{background: url(<?php echo IMG_PATH;?>sidebar_bg.png) no-repeat left bottom ; padding-left:44px}
    .left-nav .content li{background-position: right -102px; display:block; height:30px; line-height:30px; font-size:14px}
    .left-nav .content li a{display:block; height:25px; line-height:25px; padding-left:14px; color:#6f6f6f}
    .left-nav .content li.cur a{background-position: left -72px;  font-weight:700; color:#0d4b9b}
    .left-nav .bottom{background-position: right -168px; height:216px}
    .col-auto{ padding:0 25px}
    .col-auto .title{font-size:25px;padding:5px 0 0;background: url(<?php echo IMG_PATH;?>uline.gif) repeat-x left bottom; margin-bottom:15px}
    .col-auto .content p{ margin-top:15px; font-size:14px; line-height:25px; color:#6f6f6f}
    .footer{color:#666; line-height:24px;width:920px; margin:auto; text-align:center; padding:12px 0; margin-top:52px; border-top:1px solid #e5e5e5}
    .footer p.info a{color:#666;}
</style>
<div class="ban3">

    <img src="<?php echo $CATEGORYS[$parentid]['image'];?>"  />



</div>
<div id="content">

    <div class="col-left left-nav">
        <h2 style="background-color:#DE2810;"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?><br><?php echo $CATEGORYS[$CAT['parentid']]['catdir'];?></h2>
        <br />
        <!--    	<ul class="content">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=68f66d54f5b8bd6091aba4f024b9e80c&action=category&catid=104&num=12&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'104','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'12',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
                       <li><a  <?php if($catid == $c[catid]) { ?> class="on" style="background-color:#DE2810;color:#fff;" <?php } ?>  href="<?php echo $c['url'];?>" ><?php echo $c['catname'];?></a></li>

                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>-->
        <style type="text/css">
            *{margin:0; padding:0}
            #nav{width:200px; }
            #nav h5{    height: 40px !important;
                line-height: 40px !important;
                margin-bottom: 2px;
                text-indent: 68px;
                background: url(<?php echo IMG_PATH;?>sidebar_ico.jpg) no-repeat 60px center !important;    font-size: 16px !important;
                height: 40px !important;
                line-height: 40px !important;
                padding-left: 0 !important;
                text-decoration: none;}
            #nav div a{height: 40px !important;
                line-height: 40px !important;
                margin-bottom: 2px;
                text-indent: 55px; display:block;
                font-size: 16px !important;
                height: 40px !important;
                line-height: 40px !important;
                padding-left: 0 !important;
                text-decoration: none;}

            #nav div{display:none; border-top:none}
        </style>


        <ul class="content" id="nav">

            <?php include template("content","f_r"); ?>
        </ul>
    </div>
    <div class="col-auto">
        <div class="content">
            <DIV class=nymore style="text-indent:5px">当前位置：<a href="<?php echo siteurl($siteid);?>">首页</a> &gt;<?php echo catpos($catid);?></DIV>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20d4e2ae1f91ae804a512503d2bd2285&action=lists&catid=%24catid&num=5&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li style="border-bottom:0px;">
                <a class="newsList-title" href="<?php echo $r['url'];?>" style="float:left;margin-right:5px;"><img src="<?php echo $r['thumb'];?>" width="200" height="100" /></a>
                <h5><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><span style="float:right;"><?php echo date('Y-m-d',$r[inputtime]);?></span></h5>
                <p ><?php echo $r['description'];?></p>
            </li>

            <?php $n++;}unset($n); ?>


        </div>
        <?php
       $pages =  str_replace("lists" , "lists2" , $pages);
        ?>
        <div style="float:right;"><?php echo $pages;?></div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<?php include template("content","footer"); ?>