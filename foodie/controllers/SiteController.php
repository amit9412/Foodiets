<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    public $layout = '@app/themes/frontend/main-layout';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        // $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);

        // return $this->render('login');
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        // $model = new ContactForm();
        // if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
        //     Yii::$app->session->setFlash('contactFormSubmitted');

        //     return $this->refresh();
        // }
        // return $this->render('contact', [
        //     'model' => $model,
        // ]);

        return $this->render('contact');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays Book Food page.
     *
     * @return string
     */
    public function actionBookFood()
    {
        return $this->render('book-food');
    }

    /**
     * Displays Edit Food page.
     *
     * @return string
     */
    public function actionEditFood()
    {
        return $this->render('edit-food');
    }

    /**
     * Displays Checkout page.
     *
     * @return string
     */
    public function actionCheckout()
    {
        return $this->render('checkout');
    }

    /**
     * Displays FAQ page.
     *
     * @return string
     */
    public function actionFaq()
    {
        return $this->render('faq');
    }

    /**
     * Displays Product List page.
     *
     * @return string
     */
    public function actionProductDetail()
    {
        return $this->render('product-detail');
    }

    /**
     * Displays Product List page.
     *
     * @return string
     */
    public function actionProductList()
    {
        return $this->render('product-list');
    }

    /**
     * Displays User page.
     *
     * @return string
     */
    public function actionUser()
    {
        return $this->render('user');
    }

    /**
     * Displays Checkout page.
     *
     * @return string
     */
    public function actionOrder()
    {
        return $this->render('order');
    }

    /**
     * Displays Payment page.
     *
     * @return string
     */
    public function actionPayment()
    {
        return $this->render('payment');
    }

    /**
     * Displays Setting page.
     *
     * @return string
     */
    public function actionSetting()
    {
        return $this->render('setting');
    }

    /**
     * Displays Help page.
     *
     * @return string
     */
    public function actionHelp()
    {
        return $this->render('help');
    }

    /**
     * Displays 404 page.
     *
     * @return string
     */
    public function action404()
    {
        $this->layout = '@app/themes/frontend/404-layout';
        return $this->render('404');
    }


    /**
     * Displays Signup page.
     *
     * @return string
     */
    public function actionSignup()
    {
        return $this->render('signup');
    }

    /**
     * Displays Otp Verification Signup page.
     *
     * @return string
     */
    public function actionOtpVerificationSignup()
    {
        return $this->render('otp-verification-signup');
    }

    /**
     * Displays Forgot Password page.
     *
     * @return string
     */
    public function actionForgotPassword()
    {
        return $this->render('forgot-password');
    }

    /**
     * Displays Otp Verification page.
     *
     * @return string
     */
    public function actionOtpVerification()
    {
        return $this->render('otp-verification');
    }

    /**
     * Displays Rest Password page.
     *
     * @return string
     */
    public function actionResetPassword()
    {
        return $this->render('reset-password');
    }

    /**
     * Displays Payment Successful page.
     *
     * @return string
     */
    public function actionPaymentSuccessful()
    {
        $this->layout = '@app/themes/frontend/404-layout';
        return $this->render('payment-successful');
    }
}
