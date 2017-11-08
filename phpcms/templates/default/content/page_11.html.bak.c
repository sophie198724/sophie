{template "content","header"}

<link href="{CSS_PATH}reset.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body {background: url({IMG_PATH}v9/about_bg.png) repeat-x;}
#header{ height:94px;}
#header .logo{ padding:0 100px 0 20px;float:left;}
.log{line-height:24px; height:24px;float:right; font-size:12px}
.log{color:#c7c5c5; margin-top:40px}
.log a{color:#6f6f6f;text-decoration: none;}
.log a:hover{text-decoration: underline;}
#header .content{width:880px; margin:auto; height:60px;padding:10px 0 0 0}
#content{width:1200px; margin:auto; }
.left-nav{width:210px; height:770px; padding-top:10px}
.left-nav h1,.left-nav .content li,.left-nav .content li.cur a,.left-nav .bottom{background: url({IMG_PATH}v9/about_left.png) no-repeat right top}
.left-nav h1{display:block; height:40px; text-indent:-999px; overflow:hidden}
.left-nav .content{background: url({IMG_PATH}sidebar_bg.png) no-repeat left bottom ; padding-left:44px}
.left-nav .content li{background-position: right -102px; display:block; height:30px; line-height:30px; font-size:14px}
.left-nav .content li a{display:block; height:25px; line-height:25px; padding-left:14px; color:#6f6f6f}
.left-nav .content li.cur a{background-position: left -72px;  font-weight:700; color:#0d4b9b}
.left-nav .bottom{background-position: right -168px; height:216px}
.col-auto{ padding:0 25px}
.col-auto .title{font-size:25px;padding:5px 0 0;background: url({IMG_PATH}uline.gif) repeat-x left bottom; margin-bottom:15px}
.col-auto .content p{ margin-bottom:15px; font-size:14px; line-height:25px; color:#6f6f6f}
.footer{color:#666; line-height:24px;width:920px; margin:auto; text-align:center; padding:12px 0; margin-top:52px; border-top:1px solid #e5e5e5}
.footer p.info a{color:#666;}
</style>
<div class="ban3">
    
        <img src="{$CATEGORYS[$catid][image]}"  />
   
  </div>
<div id="content">
  
  
	<div class="col-left left-nav">
    	<h3 style="background-color:#29166f;">{$CAT[catname]}</h3><br/>
    	<ul class="content">
        	{pc:content action="category" catid="$catid" num="12" siteid="$siteid" order="listorder ASC"}
			{loop $data $c}
			   <li><a {if $catid == $c[catid]} class="on" style="background-color:#28166f;" {/if} href="{$c['url']}">{$c['catname']}</a></li>

			    <!--<ul>
			        {loop subcat($c['catid']) $c2}
			          <li style="text-indent:2em;"><a href="{$c2['url']}">{$c2['catname']}</a></li>
				{/loop} 
                           </ul>-->				
            {/loop}
	    {/pc}
        </ul>
        
    </div>
  <div class="col-auto">
    	 <DIV class=nymore>当前位置：<a href="{siteurl($siteid)}">首页</a> &gt; {$CATEGORYS[$catid][catname]} </DIV>
    
 
    
   	
		
    	<h1 class="title">{$title}</h1>
        <div class="content">
                 <!-- {pc:get sql="select content from v9_page where catid='97'"}
                  {loop $data $dr}
                   {$dr[content]}  
                 {/loop}

{/pc} -->
         {pc:block pos="zh"}{/pc}
        </div>
    </div>
 </div>
{template "content","footer"}