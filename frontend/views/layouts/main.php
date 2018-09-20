<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode(Yii::$app->name."-".$this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container" style="padding: 40px 0px 30px 0px;width: 70vw;">
    <ul class="list-inline" style="display: inline-block;float: left;text-align: center;min-width: 80px;">
        <li style="vertical-align: middle;">
            <img src="<?=Url::to('@web/img/title.png')?>" style="" alt="商标" title="商标" class="titleImg" id="titleImg">
        </li>
    </ul>
    <ul class="list-inline contact">

        <li style="border: 1px red solid;background-repeat: no-repeat;
                background-size: cover;width:3.6em;height:3.5em;vertical-align: middle;
                margin-left: 140px;margin-top: 8px;background-image: url(<?=Url::to('@web/img/icon.png')?>);
                background-position: -6.7em -0em;">
        </li>
        <li style="vertical-align: middle;margin-top: 8px;border-right: 1px solid #eff0ef;width: 165px;line-height: 1.78em;">
            <ul class="list-unstyled">

                <li>联系电话</li>
                <li>+86-18518312665</li>
            </ul>
        </li>
        <li style="border: 1px red solid;background-repeat: no-repeat;
                background-size: cover;width:3.6em;height:3.5em;vertical-align: middle;margin-left: 18px;margin-top: 8px;background-image: url(<?=Url::to('@web/img/icon.png')?>);background-position:-3.3em -0em;"></li>

        <li style="vertical-align: middle;margin-top: 8px;border-right: 1px solid #eff0ef;width: 165px;line-height: 1.75em;">
            <ul class="list-unstyled">
                <li>邮箱地址</li>
                <li>976473194@qq.com</li>
            </ul>

        </li>
        <li style="border: 1px red solid;background-repeat: no-repeat;
                background-size: cover;width:3.6em;height:3.5em;vertical-align: middle;margin-left: 18px;margin-top: 8px;background-image: url(<?=Url::to('@web/img/icon.png')?>);background-position:-0em -0em;"></li>
        <li style="vertical-align: middle;margin-top: 8px;width: 165px;">
            <ul class="list-unstyled">
                <li>24小时服务电话</li>
                <li>TEL:010-120999110</li>
            </ul>

        </li>
<!--        <li style="vertical-align: middle;margin-left: 50px;margin-top: 0px;">-->
<!--            <span style="">城市:</span>-->
<!--        </li>-->
<!--        <li class="dropdown" style="vertical-align: middle;margin-top: 0px;">-->
<!--            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>城市</span><b class="caret"></b></a>-->
<!--            <ul class="dropdown-menu" style="min-width: 50px;">-->
<!--                <li><a href="#">北京</a></li>-->
<!--                <li><a href="#">上海</a></li>-->
<!--                <li><a href="#">深圳</a></li>-->
<!--                <li class="divider"></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li style="vertical-align: middle;margin-left: 50px;">-->
<!--            <div id='gmap'>-->
<!--            </div>-->
<!--        </li>-->
    </ul>


</div>
<div class="wrap">
    <?php
    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse ', //navbar-fixed-top
            'style'=>'margin-bottom:0px;border-radius:0px;height:55px;' //position: relative;top: 20px;
        ],
    ]);
    $menuItems = [
        ['label' => '网站首页', 'url' => ['/index/index'],'linkOptions'=>['class'=>'meauItems']],
        ['label' => '电梯维保', 'url' => ['/wb/index'],'linkOptions'=>['class'=>'meauItems']],
        ['label' => '电梯装饰', 'url' => ['/zs/index'],'linkOptions'=>['class'=>'meauItems']],
        ['label' => '电梯改造', 'url' => ['/gz/index'],'linkOptions'=>['class'=>'meauItems']],
        ['label' => '电梯配件', 'url' => ['/pj/index'],'linkOptions'=>['class'=>'meauItems']],
        ['label' => '电梯推荐', 'url' => ['/tj/index'],'linkOptions'=>['class'=>'meauItems']],
        ['label' => '关于我们', 'url' => ['/about/index'],'linkOptions'=>['class'=>'meauItems']],
//        ['label' => '联系我们', 'url' => ['/site/tj'],'linkOptions'=>['class'=>'meauItems']],

    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => '注册', 'url' => ['/site/signup'],'linkOptions'=>['class'=>'loginItem']];
//        $menuItems[] = ['label' => '登录', 'url' => ['#'],'linkOptions'=>['class'=>'registItem','data-toggle'=>"modal",'data-target'=>"#loginModal"]];// /site/login
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post')
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => '']//btn btn-link logout
//            )
//            . Html::endForm()
//            . '</li>';
//    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left','style'=>'height:65xp;'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <div class="" style="padding-top: 0">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer" style="min-height: 18vh;">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        <p class="pull-right"><?= "作者：刘亚朋&nbsp;&nbsp;&nbsp;&nbsp;" ?></p>
    </div>
</footer>

<!-- 模态框（Modal） -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog" style="padding-top: 25vh;">
        <div class="modal-content" style="">
            <!--登陆框头部-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    欢迎登陆！
                </h4>
            </div>
            <!--登陆框中间部分(from表单)-->
            <div class="modal-body">
                <div class="form-horizontal" style="display: inline-block;height: 100%;width:35%;vertical-align: top;padding-left: 15px;padding-top: 15px;">
                    <img src="<?=Url::to('@web/img/long.png')?>" style="height:100%;" alt="商标" title="商标">
                </div>
                <form class="form-horizontal" id="login-form" role="form" style="display: inline-block;width:55%;border-left: 1px solid #e5e5e5;">
                    <!--用户框-->
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">用户名</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="username" placeholder="用户名" required="required">
                        </div>
                    </div>
                    <!--密码框-->
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label" >密码</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password" placeholder="密码" required="required">
                        </div>
                    </div>
                    <!--验证码-->
                    <div class="form-group">
                        <label for="verify" class="col-sm-3 control-label" >验证码</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="verify" placeholder="验证码" required="required">
                        </div>
                        <div class="col-sm-4" style="">
<!--                            --><?php //echo Captcha::widget(
//                                    ['name'=>'captcha',
//                                        'captchaAction'=>'site/captcha',
//                                        'imageOptions'=>['id'=>'captcha',
//                                            'title'=>'换一个',
//                                            'alt'=>'换一个',
//                                            'style'=>'cursor:pointer;margin-left:25px;'
//                                        ],
//                                        'template'=>'{image}'
//                                    ]);?>
<!--                            <img id="verifyImg"  class="" style="height:35px;margin: 0;padding: 0;position: absolute;left: 0px;" src="http://bysj.itishow.com/index.php/index/getCaptcha/0.html">-->
                        </div>
                    </div>
                    <!--记住密码-->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> 记住密码
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--登陆按钮-->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">登录</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
