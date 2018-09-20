<?php
/**
 * Created by IntelliJ IDEA.
 * User: lyp09
 * Date: 2018/4/15
 * Time: 10:38
 */

namespace app\index\controller;

use app\admin\model\User;
use app\commons\base;
use think\Session;

class Members extends base
{
    public function memberList(){
        return $this->fetch('memberList');
    }

    public function memberGrading(){
        return $this->fetch('memberGrading');
    }

    public function integration(){
        return $this->fetch('integration');
    }

    public function memberShow(){
        return $this->fetch('memberShow');
    }
}