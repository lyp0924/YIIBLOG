<?php
namespace app\index\controller;

use app\commons\base;
use app\index\model\User;
use app\index\model\ArticleList;
use app\index\model\UserLogs;
use think\Session;

class Index extends base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $user_id = Session::get('user_id');
        $user = new User;
        $userMsg = $user->get($user_id);
        $userPermission = $user->getUserPermission($user_id);
        $permissionIcon = array(
            '1'=>'icon-home',
            '2'=>'icon-group',
            '3'=>'icon-cogs',
            '4'=>'icon-user',
            '5'=>'icon-bookmark',
        );

        $this->assign('userMsg',$userMsg);
        $this->assign('permissions',$userPermission);
        $this->assign('permissionIcon',$permissionIcon);
        $this->assign('user_id',$user_id);
        return $this->fetch('index');
    }


    public function home(){
        $userLogs = new UserLogs;
        $userLog = $userLogs->getLastLog(Session::get('user_id'));
        $this->assign('userLog',$userLog);
		$articleList = new ArticleList;
		$articles = $articleList->article_select();
//		echo '<pre>';
//		echo '123';
//		var_dump($articles);
//		exit;
		$this->assign('articlelist',$articles);
        return $this->fetch('home');
    }


}
