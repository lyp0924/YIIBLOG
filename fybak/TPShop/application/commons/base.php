<?php
/**
 * Created by IntelliJ IDEA.
 * User: lyp09
 * Date: 2018/4/11
 * Time: 22:02
 */
namespace app\commons;

use think\captcha\Captcha;
use think\Controller;
use think\Session;

class base extends Controller
{
    private $controllerName;
    private $moduleName;
    private $actionName;
    private $beforeNeedle = [
                            'index'=>
                                [
                                    'Index'=>['only'=>'test']
                                ],
                            'admin'=>
                                [
                                    'Users'=>['except'=>'login,userLogin,getCaptcha'],
                                    'Index'=>'all',
                                    'Goods'=>'all',
                                    'Orders'=>'all',
                                    'Payment'=>'all',
                                    'Members'=>'all',
                                    'Shop'=>'all',
                                    'Article'=>'all',
                                    'System'=>'all',
                                ],
                            ];

    protected $beforeActionList;// = ['checkLogin'=>['only'=>'test']];

    public function _initialize()
    {
        $this->controllerName = request()->controller();
        $this->moduleName = request()->module();
        $this->actionName = request()->action();
        if ($this->beforeNeedle[$this->moduleName][$this->controllerName] == 'all'){
            $this->beforeActionList = ['checkLogin'];
        } else {
            $this->beforeActionList = ['checkLogin'=>$this->beforeNeedle[$this->moduleName][$this->controllerName]];
        }
    }
    public function __construct()
    {
        parent::__construct();
    }

    public function checkLogin(){
        if ($this->moduleName == 'admin') {
            if (!Session::has('user_id')) {
                $this->error('请先登录', 'admin/index/login');
            }
        }else {
            if (!Session::has('member_id')) {
                $this->error('请先登录', 'index/index/index');
            }
        }
    }

    public function getCaptcha($time){
        $captcha_conf =['length'=>4];
        $captcha = new Captcha($captcha_conf);
        return $captcha->entry();
    }

    public function checkCaptcha($code){
        $captcha = new Captcha();
        return $captcha->check($code);
    }
}