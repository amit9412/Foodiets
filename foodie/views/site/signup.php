<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- Signup';
?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Signup</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                    <li class="breadcrumb-item active">Signup</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="form-section pd-sec-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <h2>Register</h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter User Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Email Id">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Confirm Password">
                    </div>
                    <div class="form-group">
                        <a href="<?= Url::to(['site/otp-verification-signup.php'])?>" class="btn btn-block btn-primary">Continue</a>
                    </div>
                    <p class="rgstr-txt text-center">Already have an account?
                        <a href="<?=Url::to(['site/login'])?>">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>