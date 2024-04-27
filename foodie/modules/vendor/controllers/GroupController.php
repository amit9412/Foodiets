<?php

namespace app\modules\vendor\controllers;

use app\models\Vendor;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;
use app\models\LoginForm;
use Yii;


/**
 * GroupController implements the CRUD actions for Vendor model.
 */
class GroupController extends Controller
{
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

    /**
     * Lists all Vendor models.
     *
     * @return string
     */
    public function actionAddGroup()
    {
        return $this->render('add-group');
    }

    /**
     * Lists all Vendor models.
     *
     * @return string
     */
    public function actionGroupCustomerList()
    {
        return $this->render('group-customer-list');
    }

    protected function findModel($id)
    {
        if (($model = Vendor::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
