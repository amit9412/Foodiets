<?php

namespace app\modules\deliveryBoy\controllers;

use app\models\Vendor;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;
use app\models\LoginForm;
use Yii;


/**
 * OrderController implements the CRUD actions for Vendor model.
 */
class OrderController extends Controller
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
                        'roles' => ['delivery-boy'], // '@' All logged in users / or your access role e.g. 'admin', 'user'
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
    public function actionNewOrder()
    {
        return $this->render('new-order');
    }

    /**
     * Lists all Vendor models.
     *
     * @return string
     */
    public function actionTotalOrder()
    {
        return $this->render('total-order');
    }

    /**
     * Lists all Vendor models.
     *
     * @return string
     */
    public function actionTodayOrder()
    {
        return $this->render('today-order');
    }


    protected function findModel($id)
    {
        if (($model = Vendor::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
