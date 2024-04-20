<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- Forgot Password';
?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Forgot Password</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                    <li class="breadcrumb-item active">Forgot Password?</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="form-section pd-sec-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <p class="frgt-para">Please enter your registered mobile number. We will send OTP to reset
                    password on your registered mobile number.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                        <a href="<?= Url::to(['site/otp-verification'])?>" class="btn btn-block btn-primary">Send</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>