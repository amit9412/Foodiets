<?php

use yii\helpers\Url;

/** @var yii\web\View $this */


$this->title = 'Login';

?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Login</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/login']) ?>">Home</a></li>
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
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group text-right">
                        <a href="<?= Url::to(['site/forgot-password']) ?>" class="forgot-txt">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <a href="<?= Url::to(['site/user']) ?>" class="btn btn-block btn-primary">Login</a>
                    </div>
                    <p class="rgstr-txt text-center">Don't have an account?
                        <a href="<?= Url::to(['site/signup']) ?>">Register</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>