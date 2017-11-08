<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php
$top_parentid = $CATEGORYS[$catid]['parentid'];
?>
<h5 class="h5_206 <?php if($top_parentid == 206) { ?> active<?php } ?>"><?php echo $CATEGORYS['206']['catname'];?></h5>
<div class="div_206 <?php if($top_parentid == 206) { ?> active<?php } ?>" data-value="206">
    <a class="<?php if($catid == 234) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['234']['url'];?>"><?php echo $CATEGORYS['234']['catname'];?></a>
    <a class="<?php if($catid == 235) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['235']['url'];?>"><?php echo $CATEGORYS['235']['catname'];?></a>
    <a class="<?php if($catid == 236) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['236']['url'];?>"><?php echo $CATEGORYS['236']['catname'];?></a>
    <a class="<?php if($catid == 237) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['237']['url'];?>"><?php echo $CATEGORYS['237']['catname'];?></a>
    <a class="<?php if($catid == 238) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['238']['url'];?>"><?php echo $CATEGORYS['238']['catname'];?></a>
    <a class="<?php if($catid == 239) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['239']['url'];?>"><?php echo $CATEGORYS['239']['catname'];?></a>
</div>

<link href="/statics/css/newbetter.css" rel="stylesheet" type="text/css" />

<h5 class="h5_207 <?php if($top_parentid == 207) { ?> active<?php } ?>"><?php echo $CATEGORYS['207']['catname'];?></h5>
<div class="div_207 <?php if($top_parentid == 207) { ?> active<?php } ?>" data-value="207">
    <a class="<?php if($catid == 214) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['214']['url'];?>"><?php echo $CATEGORYS['214']['catname'];?></a>
    <a class="<?php if($catid == 240) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['240']['url'];?>"><?php echo $CATEGORYS['240']['catname'];?></a>
</div>

<h5 class="h5_208 <?php if($top_parentid == 208) { ?> active<?php } ?>"><?php echo $CATEGORYS['208']['catname'];?></h5>
<div class="div_208 <?php if($top_parentid == 208) { ?> active<?php } ?>" data-value="208">
    <a class="<?php if($catid == 217) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['217']['url'];?>"><?php echo $CATEGORYS['217']['catname'];?></a>
    <a class="<?php if($catid == 241) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['241']['url'];?>"><?php echo $CATEGORYS['241']['catname'];?></a>

</div>

<h5 class="h5_209 <?php if($top_parentid == 209) { ?> active<?php } ?>"><?php echo $CATEGORYS['209']['catname'];?></h5>
<div class="div_209 <?php if($top_parentid == 209) { ?> active<?php } ?>" data-value="209">
    <a class="<?php if($catid == 220) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['220']['url'];?>"><?php echo $CATEGORYS['220']['catname'];?></a>
    <a class="<?php if($catid == 242) { ?> active<?php } ?>" href="<?php echo $CATEGORYS['242']['url'];?>"><?php echo $CATEGORYS['242']['catname'];?></a>
</div>
<style type="text/css">
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

        background: #df270f url(<?php echo IMG_PATH;?>sidebar_ico02.jpg) no-repeat 60px center!important;
        color:#fff;
    }
    #nav .sanji a.active,#nav .sanji a:hover{
        background: #df270f ;color:#fff;
    }
    #nav div{display:none; border-top:none}
    #nav div.active{display: block}
</style>
<script type="text/javascript">

    $(function(){
        $("#nav h5").css("cursor","pointer");

        $("#nav h5").on("click",function(){
            $(this).next("div").slideToggle(500);
        })
    })

</script>
