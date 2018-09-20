<?php
/*
Template Name:Fys
Description:<span style="color:red">有空多到我的博客做客哈~</span>>><a href="http://www.f162.cn">小站</a></br>模板设置：>><a href="../?setting">设置</a>
Version:1.81
Author:会飞的鱼
Author Url:http://www.f162.cn/
Sidebar Amount:2
*/
define("THEME_VER","1.81");

ini_set('date.timezone','Asia/Shanghai');

require_once View::getView('config');

global $arr_navico1;
$arr_navico1 = unserialize($arr_navico);
global $arr_sortico1;
$arr_sortico1 = unserialize($arr_sortico);

require_once View::getView('module');

require_once View::getView('function');

require_once View::getView('module/m-header');
?>
