<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Dashboard controller for the `super-admin` module
 */
class DashboardController extends Controller
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
}
