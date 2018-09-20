<?php
/**
 * Created by IntelliJ IDEA.
 * User: lyp09
 * Date: 2018/4/15
 * Time: 14:28
 */

namespace app\admin\controller;


use app\commons\base;

class Orders extends base
{
    public function transaction()
    {
        return $this->fetch('transaction');
    }

    public function orderChart()
    {
        return $this->fetch('orderChart');
    }

    public function orderform()
    {
        return $this->fetch('orderform');
    }


    public function orderDetailed()
    {
        return $this->fetch('orderDetailed');
    }


    public function amounts()
    {
        return $this->fetch('amounts');
    }


    public function orderHandling()
    {
        return $this->fetch('orderHandling');
    }

    public function refund()
    {
        return $this->fetch('refund');
    }

    public function refundDetailed()
    {
        return $this->fetch('refundDetailed');
    }
}