<?php

namespace app\controllers;

class SuperAdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
