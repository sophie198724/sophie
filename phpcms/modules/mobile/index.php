<?php 
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_func('global');
pc_base::load_sys_class('format', '', 0);
class index {
	function __construct() {		
		$this->db = pc_base::load_model('content_model');
		$this->cate_db = pc_base::load_model('mobile_cate_model');
		$this->siteid = isset($_GET['siteid']) && (intval($_GET['siteid']) > 0) ? intval(trim($_GET['siteid'])) : (param::get_cookie('siteid') ? param::get_cookie('siteid') : 1);
		$this->mobile_site = getcache('mobile_site','mobile');
		$this->cates = getcache('mobile_cate','mobile');
		$this->cates = getcache('mobile_page','mobile');
		$this->mobile = $this->mobile_site[$this->siteid];
		define('MOBILE_SITEURL', $this->mobile['domain'] ? $this->mobile['domain'].'index.php?m=mobile&siteid='.$this->siteid : APP_PATH.'index.php?m=mobile&siteid='.$this->siteid);
		if($this->mobile['status']!=1) exit(L('mobile_close_status'));
		$CATEGORYS = getcache('category_content_'.$this->siteid,'commons');
		foreach($CATEGORYS as $k=>$v){
			$CATEGORYS[$k]['url']=MOBILE_SITEURL.'&a=lists&c=index&catid='.$v['catid'];
			}
	    $this->categorys=$CATEGORYS;		
	}
	
	//展示首页
	public function init() {
		$CATEGORYS =$this->categorys;
		$mobile = $this->mobile;
		$cates=$this->cates;
		$GLOBALS['siteid'] = $siteid = max($this->siteid,1);
		include template('mobile', 'index');
	}
	
    //展示列表页
	public function lists() {
	    
		$cates=$this->cates;
		$mobile = $this->mobile;
		$GLOBALS['siteid'] = $siteid = max($this->siteid,1);
		$catid = intval($_GET['catid']);	
		$t = $_GET['t'];	
		if(!$catid) exit(L('parameter_error'));	
		$siteids = getcache('category_content','commons');
		$siteid = $siteids[$catid];
		$CATEGORYS = getcache('category_content_'.$siteid,'commons');
		if(!isset($CATEGORYS[$catid])) exit(L('parameter_error'));
		$CAT = $CATEGORYS[$catid];
		$CATEGORYS =$this->categorys;
		$siteid = $GLOBALS['siteid'] = $CAT['siteid'];
		extract($CAT);
		$setting=string2array($setting);
		$category_template=$setting['category_template'];
		$list_template=$setting['list_template'];
		foreach($cates as $_t) $parentids[] = $_t['parentid'];

		$template = ($cates[$catid]['parentid']==0 && in_array($catid,array_unique($parentids))) ? $category_template: $list_template;
        if($catid == 104){
            $template = "category_104";
        }
	
	   
		$MODEL = getcache('model','commons');
		$modelid = $CAT['modelid'];
		$tablename = $this->db->table_name = $this->db->db_tablepre.$MODEL[$modelid]['tablename'];
		$total = $this->db->count(array('status'=>'99','catid'=>$catid));
		$page = isset($_GET['page']) && intval($_GET['page']) ? intval($_GET['page']) : 1;
		$pagesize =  20 ;
		$offset = ($page - 1) * $pagesize;

		$list = $this->db->select(array('status'=>'99','catid'=>$catid), '*', $offset.','.$pagesize,'inputtime DESC');
	   
		//构造mobile url规则
	
		 if($t=="more")
		{
			 $template = "list_five_more";
			 define('URLRULE', 'index.php?m=mobile&c=index&a=lists&catid={$catid}~index.php?m=mobile&c=index&a=lists&catid={$catid}&page={$page}&t=more');
		}
		
		$GLOBALS['URL_ARRAY'] = array('catid'=>$catid);
		$pages = wpa_pages($total, $page, $pagesize);
		include template('mobile', $template);
	}
	
	
	
	//展示单页
	public function page() {
	    
		$pages=$this->pages;
		$cates=$this->cates;
		$mobile = $this->mobile;
		$GLOBALS['siteid'] = $siteid = max($this->siteid,1);
		$catid = intval($_GET['catid']);
	    if($catid==81){$catid=254;}
		if($catid==127){$catid=255;}
		if($catid==248){$catid=256;}
		if($catid==190){$catid=257;}
		if($catid==89){$catid=259;}
		if($catid==197){$catid=258;}
		if($catid==143){$catid=260;}			
		if(!$catid) exit(L('parameter_error'));	
		foreach($pages as $_t) $parentids[] = $_t['parentid'];
		$page_template = ($pages[$catid]['parentid']==0 && in_array($catid,array_unique($parentids))) ? 'page_list':'page';	
		$this->page_db = pc_base::load_model('page_model');
		$r = $this->page_db->get_one(array('catid'=>$catid));

		$CATEGORYS =$this->categorys;
		if($r) extract($r);
	    if($catid==254){$catid=81;}
		if($catid==255){$catid=127;}
		if($catid==256){$catid=248;}
		if($catid==257){$catid=190;}
		if($catid==259){$catid=89;}
		if($catid==258){$catid=197;}
		if($catid==260){$catid=143;}
		$catname = $CATEGORYS[$catid]['catname'];
		$catparent = $CATEGORYS[$CATEGORYS[$catid]['parentid']]['catname'];
		$image = $CATEGORYS[$catid]['image1'];
		$image2 = $CATEGORYS[$CATEGORYS[$CATEGORYS[$catid]['parentid']]['parentid']]['image1'];
		$image3 = $CATEGORYS[$CATEGORYS[$CATEGORYS[$CATEGORYS[$catid]['parentid']]['parentid']]['parentid']]['image1'];
		$image4 = $CATEGORYS[$CATEGORYS[$CATEGORYS[$CATEGORYS[$CATEGORYS[$catid]['parentid']]['parentid']]['parentid']]['parentid']]['image1'];
		if($image4)
		{ $image1 = $image4; }
		elseif($image3)
		{ $image1 = $image3; }
		elseif($image2)
		{ $image1 = $image2; }
		elseif($image)
		{ $image1 = $image;	}
		
		

	
		include template('mobile', $page_template);
	  }		
	
    //展示内容页
	public function show() {
		$mobile = $this->mobile;
		$cates=$this->cates;
		
		$GLOBALS['siteid'] = $siteid = max($this->siteid,1);
		$catid =intval($_GET['catid']);	
		$id = intval($_GET['id']);
		if(!$catid || !$id) exit(L('parameter_error'));
		$siteids = getcache('category_content','commons');
		$siteid = $siteids[$catid];
		$CATEGORYS = getcache('category_content_'.$siteid,'commons');
		$page = intval($_GET['page']);
		$page = max($page,1);

		if(!isset($CATEGORYS[$catid]) || $CATEGORYS[$catid]['type']!=0) exit(L('information_does_not_exist','','content'));
		$this->category = $CAT = $CATEGORYS[$catid];
		$this->category_setting = $CAT['setting'] = string2array($this->category['setting']);
		$siteid = $GLOBALS['siteid'] = $CAT['siteid'];
		$MODEL = getcache('model','commons');
		$modelid = $CAT['modelid'];
		
		$setting=$CAT['setting'];
		$show_template=$setting['show_template'];
		$tablename = $this->db->table_name = $this->db->db_tablepre.$MODEL[$modelid]['tablename'];
		$r = $this->db->get_one(array('id'=>$id));
		if(!$r || $r['status'] != 99) showmessage(L('info_does_not_exists'),'blank');
		
		$this->db->table_name = $tablename.'_data';
		$r2 = $this->db->get_one(array('id'=>$id));
		$rs = $r2 ? array_merge($r,$r2) : $r;

		//再次重新赋值，以数据库为准
		$catid = $CATEGORYS[$r['catid']]['catid'];
		$modelid = $CATEGORYS[$catid]['modelid'];
		$CATEGORYS =$this->categorys;
		$catname = $CATEGORYS[$catid]['catname'];
		$catparent = $CATEGORYS[$CATEGORYS[$catid]['parentid']]['catname'];
		$image = $CATEGORYS[$catid]['image1'];
		$image2 = $CATEGORYS[$CATEGORYS[$CATEGORYS[$catid]['parentid']]['parentid']]['image1'];
		$image3 = $CATEGORYS[$CATEGORYS[$CATEGORYS[$CATEGORYS[$catid]['parentid']]['parentid']]['parentid']]['image1'];
		$image4 = $CATEGORYS[$CATEGORYS[$CATEGORYS[$CATEGORYS[$CATEGORYS[$catid]['parentid']]['parentid']]['parentid']]['parentid']]['image1'];
		if($image4)
		{ $image1 = $image4; }
		elseif($image3)
		{ $image1 = $image3; }
		elseif($image2)
		{ $image1 = $image2; }
		elseif($image)
		{ $image1 = $image;	}
		require_once CACHE_MODEL_PATH.'content_output.class.php';
		$content_output = new content_output($modelid,$catid,$CATEGORYS);
		$data = $content_output->get($rs);
		extract($data);
		include template('mobile', $show_template);
	}
	
	
	//导航页
	function maps() {
		$mobile = $this->mobile;
		$cates=$this->cates;
		$GLOBALS['siteid'] = $siteid = max($this->siteid,1);
		include template('mobile', 'maps');
	}
	
	
}
?>