<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- 404';
?>

<section class="page-sections pd-sec-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <img src="<?php yii::getAlias('@web') ?>/themes/frontend/assets/img/404-img.svg" alt="">
                <h2>Oopps... Page Not Found!</h2>
                <p>The URL may be misplaced or the pahe you are looking is no longer available.</p>
                <a href="<?=Url::to(['site/index'])?>" class="btn btn-primary">Goto Home Page</a>
            </div>  
        </div>
    </div>
</section>