<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = Yii::t("app", "Admin | Login");

?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="auth-logo text-center">
                    <img src="<?= Yii::getAlias('@web') ?>/themes/backend/admin-assets/images/logo.svg" alt=""
                        height="50">
                    <h5 class="mt-2"> Change Password</h5>
                    <p>Re-Password your password</p>
                </div>
                <form class="form-horizontal" action="">
                    <div class="mb-3">
                        <label for="oldpwd" class="form-label">Old Password</label>
                        <input type="password" class="form-control" id="oldpwd" placeholder="Enter old password">
                    </div>
                    <div class="mb-3">
                        <label for="newpwd" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="newpwd" placeholder="Enter new password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmpwd" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpwd"
                            placeholder="Enter confirm password">
                    </div>
                    <div class="text-end">
                        <a href="<?= Url::to(['/super-admin/dashboard']) ?>"
                            class="btn btn-primary w-md waves-effect waves-light"> Change</a>
                    </div>
                    <div class="mt-4 text-center">
                        <span class="text-muted">
                            Back <a href="<?= Url::to(['/super-admin/login']) ?>" class="fw-medium text-primary"> Click
                                here</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>