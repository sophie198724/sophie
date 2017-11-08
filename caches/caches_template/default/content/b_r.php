<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><style type="text/css">
    *{margin:0; padding:0}
    #nav h5{    height: 40px !important;
        line-height: 40px !important;
        margin-bottom: 2px;
        text-indent: 68px;
        background-image: url(<?php echo IMG_PATH;?>sidebar_ico.jpg) ;
        background-position:  60px center;
        background-repeat: no-repeat;

        font-size: 16px !important;
        height: 40px !important;
        line-height: 40px !important;
        padding-left: 0 !important;
        text-decoration: none;}
    #nav .sanji a{height: 40px !important;
        line-height: 40px !important;
        margin-bottom: 2px;
        text-indent: 55px; display:block;
        font-size: 16px !important;
        height: 40px !important;
        line-height: 40px !important;
        padding-left: 0 !important;
        text-decoration: none;}
    #nav h5:hover,#nav h5.active {

        background: #28166f url(<?php echo IMG_PATH;?>sidebar_ico02.jpg) no-repeat 60px center;
        color:#fff;
    }
     #nav .sanji a.active,#nav .sanji a:hover{
         background: #28166f ;color:#fff;
     }
    #nav div{display:none; border-top:none}
    #nav div.active{display: block}
</style>
<script type="text/javascript">
    $(function(){
        $("#nav h5").css("cursor","pointer");

        $("#nav h5").on("click",function(){
            $(this).next(".sanji").slideToggle(500);
        })
    })
</script>
<ul class="content" id="nav">
    <!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fa842151920a6f8dfabb7429785796ef&action=category&catid=115&num=12&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'115','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'12',));}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $c) { ?>
       <li><a <?php if($catid == $c[catid]) { ?> class="on" style="background-color:#28166f;color:#fff;" <?php } ?> href="<?php echo $c['url'];?>"><?php echo $c['catname'];?></a></li>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
    <?php
        $pcatid = $CATEGORYS[$catid]['parentid'];
    ?>

    <h5  class="<?php if($pcatid == 115) { ?> active<?php } ?>"><?php echo $CATEGORYS['115']['catname'];?></h5>
    <div   class="sanji <?php if($pcatid == 115) { ?> active<?php } ?>">
        <a class="<?php if($catid == 117) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['117']['url'];?>"><?php echo $CATEGORYS['117']['catname'];?></a>
        <a class="<?php if($catid == 118) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['118']['url'];?>"><?php echo $CATEGORYS['118']['catname'];?></a>
        <a class="<?php if($catid == 119) { ?> active<?php } ?>"  href="<?php echo $CATEGORYS['119']['url'];?>" ><?php echo $CATEGORYS['119']['catname'];?></a>
    </div>
    <li><a <?php if($catid ==163 || $CATEGORYS[$catid][parentid]==163 || $CATEGORYS[$catid][parentid]==112  && $catid!=81 && $catid!= 79&& $catid!= 63&& $catid!= 78&& $catid!= 66  && $catid!=178) { ?> class="on"  style="background-color:#28166f;color:#fff;" <?php } ?> href="<?php echo $CATEGORYS['163']['url'];?>"><?php echo $CATEGORYS['163']['catname'];?></a></li>
    <li><a <?php if($catid ==66) { ?> class="on"  style="background-color:#28166f;color:#fff;" <?php } ?> href="<?php echo $CATEGORYS['66']['url'];?>"><?php echo $CATEGORYS['66']['catname'];?></a></li>
    <li><a <?php if($catid ==78 || $CATEGORYS[$catid][parentid]==78) { ?> class="on"  style="background-color:#28166f;color:#fff;" <?php } ?> href="<?php echo $CATEGORYS['78']['url'];?>"><?php echo $CATEGORYS['78']['catname'];?></a></li>
    <li><a <?php if($catid ==63) { ?> class="on"  style="background-color:#28166f;color:#fff;" <?php } ?> href="<?php echo $CATEGORYS['63']['url'];?>"><?php echo $CATEGORYS['63']['catname'];?></a></li>
    <li><a <?php if($catid ==79) { ?> class="on"  style="background-color:#28166f;color:#fff;" <?php } ?> href="<?php echo $CATEGORYS['79']['url'];?>"><?php echo $CATEGORYS['79']['catname'];?></a></li>
    
    <li><a <?php if($catid ==178) { ?> class="on"  style="background-color:#28166f;color:#fff;" <?php } ?> href="<?php echo $CATEGORYS['178']['url'];?>"><?php echo $CATEGORYS['178']['catname'];?></a></li>
    <li><a <?php if($catid ==81) { ?> class="on"  style="background-color:#28166f;color:#fff;" <?php } ?> href="<?php echo $CATEGORYS['81']['url'];?>"><?php echo $CATEGORYS['81']['catname'];?></a></li>
</ul>