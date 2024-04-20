<?php

namespace app\modules\deliveryBoy\controllers;

use yii\web\Controller;

/**
 * Default controller for the `delivery-boy` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public $layout = '@app/themes/backend/main-layout';

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
