<?php

namespace app\modules\superAdmin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `superAdmin` module
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
