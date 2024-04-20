<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- Verification';
?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>Verification</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                    <li class="breadcrumb-item active">Verification</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="form-section pd-sec-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <p class="frgt-para text-center">Please enter the 4 digit verification code. Which has just arrived on
                    your registered mobile number</p>
                <form>
                    <div class="form-group mt-4">
                        <div class="form-row justify-content-center">
                            <div class="col-2">
                                <input type="text" class="form-control text-center" value="0">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control text-center" value="0">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control text-center" value="0">
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control text-center" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <h3 class="time-txt text-center">01:00</h3>
                    </div>
                    <div class="form-group">
                        <a href="<?= Url::to(['site/user']) ?>" class="btn btn-block btn-primary">Submit</a>
                    </div>
                    <p class="rgstr-txt text-center">Don't Get Code?
                        <a href="javascript:void(0);">Send Again</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>