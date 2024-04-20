<?php

use yii\helpers\Url;

/** @var yii\web\View $this */

$this->title = 'Foodieits- About';
?>

<section class="breadcrumb-section light-bg">
    <div class="container">
        <div class="breadcrumb-text">
            <h1>About Us</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['site/index']) ?>">Home</a></li>
                    <li class="breadcrumb-item active">About</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section class="about-section pd-sec-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>Who We Are</h2>
                <p>Rorem Ipsum is simply dummy text of the printin and type setting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown</p>
                <p>Printer took a galley of type and scrambled it to make a type speci menu book. It has
                    survived not only five centuries, but also the leap intoelectronic typesetting,
                    remaining essentially unchanget was popularised.</p>
                <ul>
                    <li>simply dummy text of the printin and type.</li>
                    <li>simply dummy text of the printin and type.</li>
                    <li>simply dummy text of the printin and type.</li>
                    <li>simply dummy text of the printin and type.</li>
                    <li>simply dummy text of the printin and type.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <img src="<?php yii::getAlias('@web') ?>/themes/frontend/assets/img/about.jpg" alt="">
            </div>
        </div>
    </div>
</section>