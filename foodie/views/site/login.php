<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */


$this->title = 'Login';

?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Login</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                    <li class="breadcrumb-item active">Login</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="form-section pd-sec-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <h2>Welcome Back !</h2>

                <?php $form = ActiveForm::begin(['action' => '', 'options' => ['class' => 'user form-group']]); ?>

                <div class="form-group mb-3">
                    <?= $form->field($model, 'username')->textInput(['maxlength' => 255, 'class' => 'form-control form-control-user', 'placeholder' => 'Enter Mobile Number'])->label(false) ?>
                </div>

                <div class="form-group mb-3">
                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255, 'class' => 'form-control form-control-user', 'placeholder' => 'Enter Password'])->label(false) ?>
                </div>

                <div class="form-group text-right">
                    <a href="<?= Url::to(['site/forgot-password']) ?>" class="forgot-txt">Forgot Password?</a>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-success waves-effect waves-light w-100']) ?>
                </div>
                <p class="rgstr-txt text-center">Don't have an account?
                    <a href="<?= Url::to(['site/signup']) ?>">Register</a>
                </p>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>