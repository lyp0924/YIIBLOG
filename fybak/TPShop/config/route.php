<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];
Route::get('/','index/Index/index');
Route::get('/goods/:goodsId','goods/Index/index',[],['goodsId'=>'^[1-9]\d+']);
Route::get('/category','goods/Category/index');
Route::get('/buynow/:goodsId','goods/Index/buyNow',[],['goodsId'=>'^[1-9]\d+']);
Route::get('/buynownext/:goodsId','goods/Index/buyNowNext',[],['goodsId'=>'^[1-9]\d+']);
Route::get('/test','index/Index/test');


Route::get('/admin','admin/Index/index');
Route::get('/admin/home','admin/Index/home');


Route::get('/admin/productsList','admin/Goods/productsList');
Route::get('/admin/brandManage','admin/Goods/brandManage');
Route::get('/admin/categoryManage','admin/Goods/categoryManage');
Route::get('/admin/categoryAdd','admin/Goods/categoryAdd');
Route::get('/admin/advertising','admin/Goods/advertising');
Route::get('/admin/sortAds','admin/Goods/sortAds');
Route::get('/admin/adsList','admin/Goods/adsList');
Route::get('/admin/addBrand','admin/Goods/addBrand');
Route::get('/admin/brandDetailed','admin/Goods/brandDetailed');
Route::get('/admin/pictureAdd','admin/Goods/pictureAdd');



Route::get('/admin/transaction','admin/Orders/transaction');
Route::get('/admin/orderChart','admin/Orders/orderChart');
Route::get('/admin/orderform','admin/Orders/orderform');
Route::get('/admin/orderDetailed','admin/Orders/orderDetailed');
Route::get('/admin/amounts','admin/Orders/amounts');
Route::get('/admin/orderHandling','admin/Orders/orderHandling');
Route::get('/admin/refund','admin/Orders/refund');
Route::get('/admin/refundDetailed','admin/Orders/refundDetailed');



Route::get('/admin/coverManagement','admin/Payment/coverManagement');
Route::get('/admin/accountDetails','admin/Payment/accountDetails');
Route::get('/admin/paymentMethod','admin/Payment/paymentMethod');
Route::get('/admin/paymentConfigure','admin/Payment/paymentConfigure');
Route::get('/admin/paymentDetails','admin/Payment/paymentDetails');



Route::get('/admin/getCaptcha/:time','admin/Users/getCaptcha');
Route::get('/admin/login','admin/Users/login');
Route::get('/admin/index/login','admin/Users/login');
Route::post('/admin/userLogin','admin/Users/userLogin');

Route::get('/admin/adminCompetence','admin/Users/adminCompetence');
Route::get('/admin/adminIstrator','admin/Users/adminIstrator');
Route::get('/admin/adminInfo','admin/Users/adminInfo');
Route::get('/admin/competence','admin/Users/competence');


Route::get('/admin/memberList','admin/Members/memberList');
Route::get('/admin/memberGrading','admin/Members/memberGrading');
Route::get('/admin/integration','admin/Members/integration');
Route::get('/admin/memberShow','admin/Members/memberShow');


Route::get('/admin/shopList','admin/Shop/shopList');
Route::get('/admin/shopsAudit','admin/Shop/shopsAudit');
Route::get('/admin/shoppingDetailed','admin/Shop/shoppingDetailed');
Route::get('/admin/guestbook','admin/Shop/guestbook');
Route::get('/admin/feedback','admin/Shop/feedback');


Route::get('/admin/articleList','admin/Article/articleList');
Route::get('/admin/articleSort','admin/Article/articleSort');
Route::get('/admin/articleAdd','admin/Article/articleAdd');


Route::get('/admin/systems','admin/System/systems');
Route::get('/admin/systemSection','admin/System/systemSection');
Route::get('/admin/systemLogs','admin/System/systemLogs');

