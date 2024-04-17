<?php

namespace app\modules\superAdmin\controllers;

use yii\web\Controller;
use yii\helpers\Url;
use yii;
use yii\rbac\Role;

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
        $authManager = Yii::$app->authManager;
        if ($authManager->checkAccess(Yii::$app->user->id, 'super-admin')) {
            return $this->redirect(Url::to(['dashboard/']));
        } else {
            return $this->redirect(Url::to(['login/']));
        }
    }
}
