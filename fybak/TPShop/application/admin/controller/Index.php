<?php
namespace app\admin\controller;

use app\commons\base;

class Index extends base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return $this->fetch('index');
    }


    public function home(){
        return $this->fetch('home');
    }


}
