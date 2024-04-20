<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- Reset Password';
?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Reset Password</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                    <li class="breadcrumb-item active">Reset Password</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="form-section pd-sec-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <form>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Enter Confirm Password">
                    </div>
                    <div class="form-group">
                        <a href="<?= Url::to(['site/login']) ?>" class="btn btn-block btn-primary">Submit</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>