<?php

namespace app\modules\superAdmin\controllers;

use app\models\Vendor;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\LoginForm;
use yii\helpers\Url;
use Yii;


/**
 * LoginController implements the CRUD actions for Vendor model.
 */
class LoginController extends Controller
{
    public $layout = '@app/themes/backend/login-layout';
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

    /**
     * Lists all Vendor models.
     *
     * @return string
     */
    public function actionIndex()
    {
        // $model = new Login();

        // return $this->render('index', [
        //     'model' => $modelData,
        // ]);

        // if (!Yii::$app->user->isGuest) {
        //     return $this->goHome();
        // }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            // return $this->goBack();
            return $this->redirect(Url::to(['/superadmin-panel/dashboard']));
        }

        //$model->password = '';
        return $this->render('index', [
            'model' => $model,
        ]);
    }


    // function actionTest()
    // {
    //     $model = new User();
    //     // $model->scenario = 'userCreateByAdmin';
    //     $model->name = 'Customer';
    //     $model->email = 'customer@test.com';
    //     $model->mobile = 9999999999;
    //     $model->password = '123456';
    //     $model->c_password = $model->password;

    //     $u = $model->saveUser($model);

    //     var_dump($u);

    //     echo "saved";

    // }

    /**
     * Finds the Vendor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Vendor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Vendor::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
