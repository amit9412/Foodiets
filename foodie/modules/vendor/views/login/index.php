<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t("app","Admin | Login");

?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="auth-logo mb-3 text-center">
                    <img src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/logo.svg" alt=""
                        height="50">
                </div>
                <!-- <form class="form-horizontal" action="dashboards.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group auth-pass-inputgroup">
                            <input type="password" class="form-control" placeholder="Enter password"
                                aria-label="Password" aria-describedby="password-addon">
                            <button class="btn btn-light " type="button" id="password-addon"><i
                                    class="mdi mdi-eye-outline"></i></button>
                        </div>
                    </div>
                    <div class="text-end">
                        <a href="/super-admin/forgot-password.php" class="text-muted"><i class="mdi mdi-lock me-1"></i>
                            Forgot your password?</a>
                    </div>
                    <div class="mt-3 d-grid">
                        <a href="/super-admin/dashboard.php" class="btn btn-success waves-effect waves-light"> Log
                            In</a>
                    </div>
                </form> -->




                <?php $form = ActiveForm::begin(['action' => '', 'options' => ['class' => 'user']]); ?>

                <div class="form-group mb-3">
                    <?= $form->field($model, 'username')->textInput(['maxlength' => 255, 'class' => 'form-control form-control-user', 'placeholder' => 'Enter Username']) ?>
                </div>

                <div class="form-group mb-3">
                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255, 'class' => 'form-control form-control-user', 'placeholder' => 'Enter Password']) ?>
                </div>

                <div class="text-end">
                    <a href="<?= Url::to(['/super-admin/forgot-password']) ?>" class="text-muted"><i class="mdi mdi-lock me-1"></i>
                        Forgot your password?</a>
                </div>

                <div class="mt-3 d-grid">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-success waves-effect waves-light w-100']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>