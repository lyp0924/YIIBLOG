<?php
/**
 * Created by IntelliJ IDEA.
 * User: lyp09
 * Date: 2018/4/19
 * Time: 14:31
 */

namespace app\admin\controller;


use app\commons\base;

class Article extends base
{
    public function articleList()
    {
        return $this->fetch('articleList');
    }

    public function articleSort()
    {
        return $this->fetch('articleSort');
    }

    public function articleAdd()
    {
        return $this->fetch('articleAdd');
    }
}