<?php

namespace frontend\controllers;

class WbController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
