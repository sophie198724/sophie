<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!--导航结束-->
<div class="wrapper" >
<style>
	.footer{
	color: #666;
    line-height: 24px;
    width: 920px;
    margin: auto;
    text-align: center;
    padding: 12px 0;
    margin-top: 52px;
    border-top: 1px solid #e5e5e5;
	}
	.col2 p{
		margin-bottom: 0;
	}
</style>


<div id="full-screen-slider">
	<ul id="slides">
	  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=94ad874e4ab9d946ed1df646976c70bb&sql=select+%2A+from+v9_poster+where+spaceid%3D12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from v9_poster where spaceid=12 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <?php
         $str = array();
         $str =  string2array($r['setting']);
        ?>
        <li style="background:url(<?php echo $str['1']['imageurl'];?>) no-repeat center top"></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</ul>
</div>



</div>
<?php include template("content","footer"); ?>
</body>
</html>
