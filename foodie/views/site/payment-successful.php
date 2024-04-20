<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- Payment Successful';
?>

<section class="page-sections pd-sec-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <img src="<?php yii::getAlias('@web') ?>/themes/frontend/assets/img/payment-successful.svg" alt="">
                <h2>Payment Successful</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quam labore fugit, harum modi commodi
                    aliquam! Hic impedit quas vitae id provident amet, temporibus ea in laudantium perferendis saepe
                    nemo.</p>
                <a href="<?= Url::to(['site/index']) ?>" class="btn btn-primary">Goto Home Page</a>
            </div>
        </div>
    </div>
</section>