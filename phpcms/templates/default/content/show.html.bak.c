{template "content","header"}

<div style="display:block;width:100%;margin-top:68px;height:auto">
  {if $CATEGORYS[$catid][parentid]}
        <img src="{$CATEGORYS[$CATEGORYS[$catid][parentid]]['image']}" width="100%" height="auto" />
    {else}
         <img src="{$CATEGORYS[$catid][image]}" width="100%" height="auto">
    {/if} 
</div>


<div class="container" id="overview">
<DIV class=nymore>当前位置：<a href="{siteurl($siteid)}">首页</a> &gt; {$CATEGORYS[$catid][catname]} </DIV>  
        <div id="new-sidebar">
            <h1 class="title" style="background: url({IMG_PATH}leftbg.jpg) no-repeat left top #28166f !important;">{$CATEGORYS[$catid][catname]}<br>{$CATEGORYS[$catid][catdir]}</h1>
            <div class="logoArea">
                <div>
                    <img src="{IMG_PATH}images/logo.png" alt="">
                </div>
            </div>
            <div class="download">
            
            </div>
            <div class="contactInfo">
                <h2 >联系我们:</h2>
                <div class="contactInfo">
                    <!-- <p>
                    西安曲江新区雁南五路1868号曲江影视大厦10层<br/>
                    联系电话：<br>029-68206165<br>    
                    </p> -->
					{pc:block pos="about"}{/pc}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="articleMain">
           
            <h1 align="center">{$title}</h1></br>
			<h3 align="center">作者:{$username}&nbsp;&nbsp;来源:{$copyfrom}&nbsp;&nbsp;&nbsp;&nbsp;发表时间:{date('Y-m-d',$r[inputtime])}</h3>
            
          
            <div id="new-page" style="text-indent:2em;">
                    {$content}
            </div>

            <p class="f14">
                <strong>上一篇：</strong><a href="{$previous_page[url]}">{$previous_page[title]}</a><br />
                <strong>下一篇：</strong><a href="{$next_page[url]}">{$next_page[title]}</a>
           </p>
        </div>

		<div class="push"></div>
	</div>
{template "content","footer"}