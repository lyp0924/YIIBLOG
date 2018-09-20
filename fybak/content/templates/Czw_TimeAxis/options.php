<?php

/*@support tpl_options*/
!defined('EMLOG_ROOT') && exit('access deined!');
$options = array(

//首页logo设置
'index_logo' => array(
     'type' => 'image',
	'name' => '首页 → LOGO设置',
	'values' => array(
	TEMPLATE_URL . 'images/logo.png',
	),
	'default' => ''.TEMPLATE_URL.'images/logo.png',
),


//前台风格
	'index_skin' => array(
	    'type' => 'radio',
		'name' => '前台皮肤选择',
		'values' => array(
			'skin1' => '心蓝时间轴',
			'skin2' => '红色美女',
			'skin3' => '自定义',
		),
		'default' => 'skin1',
	),
    
	'zdy_bj' => array(
		'type' => 'text',
		'name' => '自定义背景图',
		'default' => 'http://i.gtimg.cn/qzone/space_item/orig/2/86034_top.jpg',
	),
    'zdy_bjys' => array(
		'type' => 'text',
		'name' => '自定义背景颜色',
		'default' => '#000014',
	),

    'zdy_rjbj1' => array(
		'type' => 'text',
		'name' => '自定义日记列表背景颜色一',
		'default' => '#29293a',
	),

    'zdy_rjbj2' => array(
		'type' => 'text',
		'name' => '自定义日记列表背景颜色二',
		'default' => '#39394c',
	),

    'zdy_bk' => array(
		'type' => 'text',
		'name' => '自定义边框背景颜色',
		'default' => '#a91926',
	),
    'zdy_sjz' => array(
		'type' => 'text',
		'name' => '自定义时间轴颜色',
		'default' => '#845259',
	),
    'zdy_dh' => array(
		'type' => 'text',
		'name' => '自定义导航颜色',
		'default' => '#fff',
	),
	'indextop_sortop' => array(
		'type' => 'text',
		'name' => '为分类指定单独图文模板',
		'description' => '填写格式：分类ID,多个ID用,隔开',
		'default' => '40',
	),






);
