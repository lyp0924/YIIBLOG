<?php
/**
 * Created by IntelliJ IDEA.
 * User: lyp09
 * Date: 2018/4/5
 * Time: 10:33
 */

namespace app\goods\controller;

use think\Controller;

class Category extends Controller
{
    /**
     * Category constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 商品分类页面
     * @return mixed
     */
    public function index()
    {
        return $this->fetch('index');
    }
}