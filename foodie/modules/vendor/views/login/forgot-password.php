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
                    <h5> Reset Password</h5>
                    <p>Re-Password with Email/Mobile Number.</p>
                </div>
                <div class="alert alert-success text-center" role="alert">
                    Enter your Email/Mobile Number and instructions will be sent to you!
                </div>
                <form class="form-horizontal" action="">
                    <div class="mb-3">
                        <label for="useremail" class="form-label">Email/Mobile Number</label>
                        <input type="email" class="form-control" id="useremail" placeholder="Enter email/mobile">
                    </div>
                    <div class="text-end">
                        <a href="<?php echo BASE_URL ?>/vendor/dashboard.php"
                            class="btn btn-success w-md waves-effect waves-light"> Reset</a>
                    </div>
                    <div class="mt-4 text-center">
                        <span class="text-muted">
                            Remember It ? <a href="<?php echo BASE_URL ?>/vendor/index.php" class="fw-medium text-dark">
                                Login Here</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>