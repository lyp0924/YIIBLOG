<?php
/**
 * Created by IntelliJ IDEA.
 * User: lyp09
 * Date: 2018/4/15
 * Time: 10:38
 */

namespace app\admin\controller;

use app\admin\model\User;
use app\commons\base;
use think\Session;

class Users extends base
{
    public function login()
    {
        if (Session::has('login')){
            $this->error('您已登录，请先退出！','admin/Index/index');
        } else {
            return $this->fetch('login');
        }
    }

    public function userLogin()
    {

        if (!$this->checkCaptcha($_POST['ident'])) {
            $return = array(
                'errorcode'=>'0',
                'errormsg'=>'验证码错误！',
            );
            echo json_encode($return);
            return;
        }
        $users = new User;
        $user = $users->get(['user_account'=>$_POST['user_account']]);




        if (count($user) == 1) {
            if ($user->user_password == md5($_POST['user_password'].$user->addtime)){
                Session::set('user_id',$user->user_id);
                $return = array(
                    'errorcode'=>'1',
                    'errormsg'=>'登录成功！',
                );
            } else {
                $return = array(
                    'errorcode'=>'0',
                    'errormsg'=>'账号或密码错误！',
                );
            }
        } else {
            $return = array(
                'errorcode'=>'0',
                'errormsg'=>'该用户不存在！',
            );
        }

        echo json_encode($return);
        return;
    }

    public function adminCompetence()
    {
        return $this->fetch('adminCompetence');
    }

    public function adminIstrator()
    {
        return $this->fetch('adminIstrator');
    }

    public function adminInfo()
    {
        return $this->fetch('adminInfo');
    }

    public function competence()
    {
        return $this->fetch('competence');
    }
}