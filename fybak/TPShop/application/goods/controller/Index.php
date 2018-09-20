<?php
namespace app\goods\controller;

use think\Controller;

class Index extends Controller
{
    /**
     * Index constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 商品详情
     * @param int $goodsId
     * @return mixed
     */
    public function index($goodsId)
    {
        return $this->fetch('index');
    }


    /**
     * 立即购买
     * @return mixed
     */
    public function buyNow($goodsId)
    {
        $this->assign('goodsId',$goodsId);
        return $this->fetch('buyNow');
    }


    /**
     * 填写订单  立即支付
     * @return mixed
     */
    public function buyNowNext()
    {
        return $this->fetch('buyNowNext');
    }

    /**
     * 商品信息传递尤其是id等敏感信息使用加密传递
     * 优惠券  应存在于用户模块
     * @return mixed
     */
    public function coupon(){
        return $this->fetch('coupon');
    }
}