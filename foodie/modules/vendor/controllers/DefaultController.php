<?php

namespace app\modules\vendor\controllers;

use yii\web\Controller;

/**
 * Default controller for the `vendor` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public $layout = '@app/themes/backend/main';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        $this->layout = '@app/themes/backend/login-layout';
        return $this->render('login');
    }
}
