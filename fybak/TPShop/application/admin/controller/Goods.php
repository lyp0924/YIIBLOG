<?php
/**
 * Created by IntelliJ IDEA.
 * User: lyp09
 * Date: 2018/4/15
 * Time: 10:37
 */

namespace app\admin\controller;


use app\commons\base;

class Goods extends base
{
    public function productsList()
    {
        return $this->fetch('productsList');
    }


    public function brandManage()
    {
        return $this->fetch('brandManage');
    }


    public function categoryManage()
    {
        return $this->fetch('categoryManage');
    }


    public function categoryAdd()
    {
        return $this->fetch('categoryAdd');
    }

    public function advertising()
    {
        return $this->fetch('advertising');
    }

    public function sortAds()
    {
        return $this->fetch('sortAds');
    }

    public function adsList()
    {
        return $this->fetch('adsList');
    }

    public function addBrand()
    {
        return $this->fetch('addBrand');
    }

    public function brandDetailed()
    {
        return $this->fetch('brandDetailed');
    }

    public function pictureAdd()
    {
        return $this->fetch('pictureAdd');
    }



}