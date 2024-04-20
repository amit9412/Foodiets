<?php

namespace app\modules\vendor\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii;

/**
 * Default controller for the `vendor` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public $layout = '@app/themes/backend/main-layout';

    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        //'actions' => ['login', 'error'], // Define specific actions
                        'allow' => true, // Has access
                        'roles' => ['vendor'], // '@' All logged in users / or your access role e.g. 'admin', 'user'
                    ],
                    [
                        'allow' => true, // Do not have access
                        'roles' => ['?'], // Guests '?'
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    public function actionIndex()
    {

        $authManager = Yii::$app->authManager;
        if ($authManager->checkAccess(Yii::$app->user->id, 'vendor')) {
            return $this->redirect(Url::to(['dashboard/']));
        } else {
            return $this->redirect(Url::to(['login/']));
        }
    }
}
