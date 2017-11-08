<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>

<?php
$cm = pc_base::load_model("category_model");
$datac['type'] = 0;
$datac['modelid'] = 1;
$cm->update($datac , array('catid'=> 208));
?>

<?php
        $array_map = array(
            206 => 234,
            207 => 214,
            208 => 217,
            209 => 220,
        );

if(isset($array_map[$catid])){
    header('location:'.$CATEGORYS[$array_map[$catid]][url]);
}
        ?>

