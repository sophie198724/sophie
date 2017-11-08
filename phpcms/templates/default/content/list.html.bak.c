{template "content","header"}
<div style="display:block;width:100%;margin-top:68px;height:auto">
    {if $CATEGORYS[$catid][parentid]}
        <img src="{$CATEGORYS[$CATEGORYS[$catid][parentid]]['image']}" width="100%" height="auto" />
    {else}
         <img src="{$CATEGORYS[$catid][image]}" width="100%" height="auto">
    {/if} 
  </div>

<div class="wrapper"><div class="container irContainer" id="newsevents">
<DIV class=nymore>当前位置：<a href="{siteurl($siteid)}">首页</a> &gt; {$CATEGORYS[$catid][catname]} </DIV>  
    <div class="irSection">
    <div class="irSideArea">
            <div class="irSideBox" id="highlightBox">
                <h3 style="color:red;">重要关注</h3>
				{pc:content  action="position" posid="2" catid="$catid" order="listorder DESC" thumb="1" num="2"}	
				 {loop $data $r}	
				<a href="{$r[url]}"><img src="{$r[thumb]}"></a>
				<a href="{$r[url]}">{str_cut($r['title'],36)}</a>
				{/loop}
				{/pc}
             </div>        	
			 <div class="irSideBox">
            	<h3 style="color:red;">相关资料</h3>
				{pc:content  action="position" posid="2"  catid="$catid" order="listorder DESC"  num="8"}	
				 {loop $data $r}
                    <li style="line-height:30px;height:30px;"><a href="{$r[url]}">{str_cut($r['title'],36)}</a></li>
                 {/loop}
				 {/pc}
                
            </div>
            <div style="clear:both; width:0; height:0;"></div>
            <div class="clearfix"></div>
        </div>
		
        <div class="irContentArea">
            <h1 class="irTitle" style="background-color:#29166f;line-height:35px;
    padding: 20px 40px;
    font-weight: bold;
    text-align: center;color:#fff;">{$CATEGORYS[$catid][catname]}<br>{$CATEGORYS[$catid][catdir]}
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
{pc:content action="lists" catid="$catid" num="4" order="id DESC" page="$page"}  
{loop $data $r}	             
            <div class="listItem2">
            	<div class="date">
                	<div class="month">{date('m',$r[inputtime])}
</div>
                    <div class="day">{date("d",$r[inputtime])}</div>
                    <div class="year">{date('Y',$r[inputtime])}</div>
                </div>
                <div class="content">
                	<h2><a href="{$r['url']}">{str_cut($r[title],60,'…')}</a></h2>
                    <div class="desc">{$r['description']}
                    </div>
                    <div class="tools">
                    	<a href="{$r['url']}" class="ir_tools_ico ico_news" target="_blank">查看</a> 
                    </div>
                </div><div style="clear:both; width:0; height:0;"></div>
                <div class="clearfix"></div>
            </div>
{/loop}

           
           
      
      
     
       
               
            <div style="clear:both; width:0; height:0;"></div>
                <div class="pagerWrapper clearfix">
                
                	
					<div class="num" style="float:right">{$pages}
                    </div>
                    
				
            </div>
{/pc}        			
                    </div>
        <div style="clear:both; width:0; height:0;"></div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="push"></div>
</div>

{template "content","footer"}