<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no" charset="utf-8">
<meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale=1">
<title><?php echo $mobile['sitename'];?></title>
<meta name="keywords" content="<?php echo $mobile['keywords'];?>">
 <meta name="description" content="<?php echo $mobile['description'];?>">
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>rester.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>index.css"/>
		<link type="text/css" href="<?php echo CSS_PATH;?>style1.css" rel="stylesheet"/>
		<script src="<?php echo JS_PATH;?>jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.event.drag-1.5.min.js"></script>
       <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.touchSlider.js"></script>
	</head>
	<body>
  <script language="javascript">
		function showmune(id)
		{
			if(document.getElementById("menu"+id).style.display=='block')
			{
			document.getElementById("menu"+id).style.display="none"
			document.getElementById("box"+id).style.backgroundColor="#6cc9f2"
			document.getElementById("box"+id).className="box"
			}
			else
			{
				for(i=1;i<5;i++)
			{
			document.getElementById("menu"+i).style.display="none"
			document.getElementById("box"+i).style.backgroundColor="#6cc9f2"
			document.getElementById("box"+i).className="box"
			}
			document.getElementById("menu"+id).style.display="block";
			document.getElementById("box"+id).className="box after"
			document.getElementById("box"+id).style.backgroundColor="#0082ce"
			}
		}
</script>
		<div class="logo">
			<a href="index.html">
				<img src="<?php echo IMG_PATH;?>logo.png"/>
			</a>
			<a href="index.html">
			<img src="<?php echo IMG_PATH;?>home.png" class="home"/>
			</a>
		</div>
		<div class="bannar " > 
		<div class="main_visual">
	    <div class="flicking_con">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=522710916517e1bcd53d40b3912e3ae8&sql=select+%2A+from+v9_poster+where+spaceid%3D11&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_poster where spaceid=11 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
            <a href="#"><?php echo $n+1; ?></a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	    </div>
	<div class="main_image">
		<ul>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=522710916517e1bcd53d40b3912e3ae8&sql=select+%2A+from+v9_poster+where+spaceid%3D11&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_poster where spaceid=11 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
             <?php
         $str = array();
         $str =  string2array($r['setting']);
        ?>
			<li><span class="img_{$n+1}"><a href="<?php echo $str['1']['linkurl'];?>"><img src="<?php echo $str['1']['imageurl'];?>"/></a></span></li>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</ul>
		<a href="javascript:;" id="btn_prev"></a>
		<a href="javascript:;" id="btn_next"></a>
	</div>
</div>

		</div>
		<div class="content"  id="content">
			<div class="row clear">
				<div class="box" id="box1">
							<a href="javascript::" onClick="showmune(1)">
					<img src="<?php echo IMG_PATH;?>01.png"/>
					<p>集团概况</p>
					</a>
				</div>
				<div class="box"  id="box2">
							<a href="javascript::" onClick="showmune(2)">
					<img src="<?php echo IMG_PATH;?>02.png"/>
					<p>集团事业</p>
					</a>
				</div>
				<div class="box"  id="box3">
							<a href="javascript::" onClick="showmune(3)">
					<img src="<?php echo IMG_PATH;?>03.png"/>
					<p>集团党建</p>
					</a>
				</div>
			</div>
			<div class="content-box ">
			 <ul class="hide" style="display:none" id="menu2">
					<li>中信蓝海项目管理有限公司
					<ul class="clearz">
        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=115&siteid=1">区域公司</a></li>
        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=163&siteid=1">业务介绍</a></li>
        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=66&siteid=1">团队风采</a></li>
        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=78&siteid=1">项目业绩</a></li>
        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=63&siteid=1">招标公告</a></li>
        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=79&siteid=1">中标公示</a></li>
        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=178&siteid=1">公司资质</a></li>
        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=81&siteid=1">联系我们</a></li>
					</ul>
				    <span>+</span>
					</li>
					<li>重资集团（陕西）有限公司
					<ul class="clearz">
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=120&siteid=1">公司简介</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=121&siteid=1">资质展示</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=122&siteid=1">业务介绍</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=230&siteid=1">招标公告</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=231&siteid=1">中标公示</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=128&siteid=1">项目业绩</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=127&siteid=1">联系我们</a></li>
            	</ul>
				    <span>+</span>
					</li>
					</li>
					<li>同乘设计（陕西）有限公司
					<ul class="clearz">
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=244&siteid=1">公司简介</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=245&siteid=1">资质展示</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=246&siteid=1">业务介绍</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=247&siteid=1">项目业绩</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=249&siteid=1">团队风采</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=248&siteid=1">联系我们</a></li>

					</ul>
				    <span>+</span>
					</li>
					<li>绿 草 地园林绿化有限公司
					<ul class="clearz">
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=188&siteid=1">公司简介</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=243&siteid=1">业务范畴</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=190&siteid=1">联系我们</a></li>

					</ul>
				    <span>+</span>
					</li>
					<li>青年创业管理咨询有限公司
					<ul class="clearz">
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=83&siteid=1">公司简介</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=87&siteid=1">团队风采</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=88&siteid=1">新闻动态</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=103&siteid=1">业务范畴</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=150&siteid=1">资质展示</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=89&siteid=1">联系我们</a></li>
					</ul>
				    <span>+</span>
					</li>
					<li>春禾绿科农业发展有限公司
					<ul class="clearz">
                        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=192&siteid=1">企业简介</a></li>
                        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=193&siteid=1">团队风采</a></li>
                        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=194&siteid=1">新闻动态</a></li>
                        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=195&siteid=1">项目介绍</a></li>
                        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=196&siteid=1">资质展示</a></li>
                        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=197&siteid=1">联系我们</a></li>
					</ul>
				    <span>+</span>
					</li>
				</ul>
				 <ul class="hide" style="display:none" id="menu3">
					<li>青春党建
					<ul class="clearz">
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=234&siteid=1">支部简介</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=235&siteid=1">一个思想</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=236&siteid=1">三个内涵</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=237&siteid=1">一个核心</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=238&siteid=1">六个内容</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=239&siteid=1">组织建设</a></li>

					</ul>
				    <span>+</span>
					</li>
					<li>共青团委
					<ul class="clearz">
                  <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=214&siteid=1">团委简介 </a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=240&siteid=1">青年●担当</a></li>
             

					</ul>
				    <span>+</span>
					</li>
					<li>工会
					<ul class="clearz">
    <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=217&siteid=1">工会简介</a></li>
    <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=241&siteid=1">职工●当家</a></li>

					</ul>
				    <span>+</span>
					</li>
					<li>妇委会
					<ul class="clearz">
        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=220&siteid=1">妇委会简介</a></li>
        <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=242&siteid=1">女性●力量</a></li>

					</ul>
				    <span>+</span>
					</li>
				</ul>
			     <ul class="hide" style="display:none" id="menu1">
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&c=index&a=show&catid=58&id=34">公司简介</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=253&siteid=1" >企业文化</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=99&siteid=1">组织架构</a></li>
                <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=page&catid=143&siteid=1">成长历程</a></li>

				</ul>
			
			</div>
			<div class="row clear">
				<div class="box">
					<a href="http://www.zxlh.asia/index.php?m=mobile&siteid=1&a=lists&c=index&catid=91">
					<img src="<?php echo IMG_PATH;?>04.png"/>
					<p>集团新闻</p>
					</a>
				</div>
				<div class="box " id="box4">
							<a href="javascript::" onClick="showmune(4)">
					<img src="<?php echo IMG_PATH;?>05.png"/>
					<p>人力资源</p>
					</a>
				</div>
				<div class="box">
					<a href="http://www.zxlh.asia/index.php?m=mobile&c=index&a=show&catid=57&id=33">
					<img src="<?php echo IMG_PATH;?>06.png"/>
					<p>联系我们</p>
					</a>
				</div>
			</div>
			<div class="content-box ">
				 <ul class="hide" style="display:none" id="menu4">
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=154&siteid=1">人才培养</a></li>
            <li> <a href="http://www.zxlh.asia/index.php?m=mobile&a=lists&catid=155&siteid=1">人才招聘</a></li>

				</ul>
			</div>	
		</div>
	     <footer>
	     	<ul>
	     		<li>地址：陕西西安曲江新区雁南五路曲江影视大厦10层</li>
	     		<li>邮编：710061</li>
	     		<li>电话：029-68206165(总机)</li>
	     		<li>传真：029-68206165</li>
	     		<li>email：zxlhjt@zxlh.asia</li>
	     		<img src="<?php echo IMG_PATH;?>weixin.png"/>
	     	</ul>
	     </footer>
	</body>
	<script type="text/javascript">
$(document).ready(function(){

	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
	},function(){
		$("#btn_prev,#btn_next").fadeOut()
	});
	
	$dragBln = false;
	
	$(".main_image").touchSlider({
		flexible : true,
		speed : 200,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e){
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	});
	
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	});
	
	$(".main_image a").click(function(){
		if($dragBln) {
			return false;
		}
	});
	
	timer = setInterval(function(){
		$("#btn_next").click();
	}, 5000);
	
	$(".main_visual").hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		},5000);
	});
	
	$(".main_image").bind("touchstart",function(){
		clearInterval(timer);
	}).bind("touchend", function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		}, 5000);
	});
	
});
</script>
	<script src="<?php echo JS_PATH;?>index.js" type="text/javascript" charset="utf-8"></script>
    </html>
