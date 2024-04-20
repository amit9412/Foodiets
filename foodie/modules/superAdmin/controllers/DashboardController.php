<?php

namespace app\modules\superAdmin\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * Dashboard controller for the `super-admin` module
 */
class DashboardController extends Controller
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
                        'roles' => ['super-admin'], // '@' All logged in users / or your access role e.g. 'admin', 'user'
                    ],
                    [
                        'allow' => false, // Do not have access
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
        return $this->render('index');
    }
}
