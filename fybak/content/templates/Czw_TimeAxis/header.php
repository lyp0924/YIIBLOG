<?php
/*
Template Name:心蓝时间轴
Description:来自杨青的HTML，由陈子文移植EMLOG版本
Version:1.0
Author:UI：杨青 移植：陈子文
Author Url:http://vps.lantk.com
Sidebar Amount:1
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $site_title; ?></title>
<meta name="keywords" content="<?php echo $site_key; ?>" />
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="generator" content="emlog" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml" />
<link rel="alternate" type="application/rss+xml" title="RSS"  href="<?php echo BLOG_URL; ?>rss.php" />


<link href="<?php echo TEMPLATE_URL; ?>css/about.css" rel="stylesheet">


<link href="<?php echo TEMPLATE_URL; ?>css/base.css" rel="stylesheet">
<link href="<?php echo TEMPLATE_URL; ?>css/index.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="<?php echo TEMPLATE_URL; ?>js/modernizr.js"></script>
<![endif]-->
<script src="<?php echo TEMPLATE_URL; ?>js/scrollReveal.js"></script>
<link href="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo BLOG_URL; ?>admin/editor/plugins/code/prettify.js" type="text/javascript"></script>
<script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
<?php 
if(_g('index_skin') == 'skin1'){
    
}else if(_g('index_skin') == 'skin2'){
    echo '<style>
    .cbp_tmtimeline > li .cbp_tmicon {background: #555 none repeat scroll 0 0; !important; }
    .cbp_tmtimeline > li .cbp_tmtime span:last-child { font-size: 22px; color: #685658 !important; }
    .cbp_tmtimeline > li:nth-child(odd) .cbp_tmtime span:last-child { color: #523f3f !important; }
    .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after { border-right-color: #523f3f !important; }
    .cbp_tmtimeline > li .cbp_tmlabel:after { border-right-color: #685658 !important;}
    a.readmore { background: #160002;}.cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel { background: #523f3f !important; }
    .cbp_tmtimeline > li .cbp_tmlabel {background: #685658 !important;}
    .container {box-shadow: #160002 0px 1px 10px !important; }
    body { font: 14px "微软雅黑", Arial, Helvetica, sans-serif; background: #160002 url("'.TEMPLATE_URL.'images/88967_top.jpg") no-repeat scroll center top !important; color: #fff }</style>';
}else{
        echo '<style>
    .cbp_tmtimeline > li .cbp_tmicon {background: #555 none repeat scroll 0 0; !important; }
    
    
    .cbp_tmtimeline > li .cbp_tmtime span:last-child { font-size: 22px; color: '._g('zdy_rjbj2').' !important; }
    
    
    .cbp_tmtimeline > li:nth-child(odd) .cbp_tmtime span:last-child { color: '._g('zdy_rjbj1').' !important; }
    .cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel:after { border-right-color: '._g('zdy_rjbj1').' !important; }
    
    
    .cbp_tmtimeline > li .cbp_tmlabel:after { border-right-color: '._g('zdy_rjbj2').' !important;}
    
    a.readmore { background: #160002;}.cbp_tmtimeline > li:nth-child(odd) .cbp_tmlabel { background: '._g('zdy_rjbj1').' !important; }
    
    
    .cbp_tmtimeline > li .cbp_tmlabel {background: '._g('zdy_rjbj2').' !important;}
    nav a {color: '._g('zdy_dh').' !important;}
    .container {box-shadow: '._g('zdy_bk').' 0px 1px 10px !important; }
    .cbp_tmtimeline::before {background: '._g('zdy_sjz').';}
    body { font: 14px "微软雅黑", Arial, Helvetica, sans-serif; background: '._g('zdy_bjys').' url("'._g('zdy_bj').'") no-repeat scroll center top !important; color: #fff }</style>';
    
    
    
    
}
doAction('index_head'); //头部挂载点
?>
</head>
<body>

<header>
    <div class="logo" data-scroll-reveal="enter right over 1s">
        <a href="<?php echo BLOG_URL; ?>"><img src="<?php echo _g('index_logo');?>"></a>
    </div>
    <?php blog_navi();?>
</header>