<?php
/**
 * Created by IntelliJ IDEA.
 * User: lyp09
 * Date: 2018/4/19
 * Time: 13:24
 */

namespace app\admin\controller;


use app\commons\base;

class Shop extends base
{
    public function shopList(){
        return $this->fetch('shopList');
    }

    public function shopsAudit(){
        return $this->fetch('shopsAudit');
    }

    public function shoppingDetailed(){
        return $this->fetch('shoppingDetailed');
    }

    public function guestbook(){
        return $this->fetch('guestbook');
    }

    public function feedback(){
        return $this->fetch('feedback');
    }
}