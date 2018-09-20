<?php
/**
 * Created by IntelliJ IDEA.
 * User: lyp09
 * Date: 2018/4/18
 * Time: 20:49
 */

namespace app\admin\controller;


use app\commons\base;

class Payment extends base
{
    public function coverManagement(){
        return $this->fetch('coverManagement');
    }


    public function accountDetails(){
        return $this->fetch('accountDetails');
    }

    public function paymentMethod(){
        return $this->fetch('paymentMethod');
    }

    public function paymentConfigure(){
        return $this->fetch('paymentConfigure');
    }

    public function paymentDetails(){
        return $this->fetch('paymentDetails');
    }
}