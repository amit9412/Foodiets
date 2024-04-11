<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `super-admin` module
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
}
