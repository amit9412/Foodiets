<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ShopDetails $model */

$this->title = 'Create Shop Details';
$this->params['breadcrumbs'][] = ['label' => 'Shop Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
